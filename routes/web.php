<?php

use App\Http\Controllers\BlackListController;
use App\Http\Controllers\ProgramController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Ciudad;
use App\Models\Provincia;
use App\Models\Program;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;


use App\Mail\AlertMailable;
use App\Mail\SuccessfulMailable;
use Illuminate\Support\Facades\Mail;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $programs = Program::all();
    return view('welcome',compact('programs'));
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::get('profile' , function() {

        $provincias = Provincia::all();
        $ciudades = Ciudad::all();

        return view('profile.show', compact('provincias' , 'ciudades'));
    });

    Route::post('/users/{user}', [UserController::class, 'data'])->name('users.data');

    Route::resources([
        'users' => UserController::class,
        'blacklist' => BlackListController::class
    ]);
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::get('/programs', [ProgramController::class, 'index'])->name('programs.index');
    Route::get('/programs/create', [ProgramController::class, 'create'])->name('programs.create');
    Route::post('/programs/create', [ProgramController::class, 'store'])->name('programs.store');
    Route::get('/programs/update/{id}', [ProgramController::class, 'update'])->name('programs.update');
    Route::patch('/users/update/{id}' , [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/destroy/{id}' , [UserController::class, 'destroy'])->name('users.destroy');
});
Route::get('/programs/calendar', [ProgramController::class, 'calendar'])->name('calendar_programs');
Route::get('/programs/data', [ProgramController::class, 'calendarData'])->name('calendar_data');

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
 
    $userExists = User::where('external_id' , $user->id)->first(); 

    $userNoExternal = User::where('email' , $user->email)->first(); 

    if ($userExists) {
        Auth::login($userExists); 
    }elseif($userNoExternal !== null && $userNoExternal->external_id == null){
        $userNoExternal->update([
            'external_id' => $user->id
        ]);
        $userNoExternal->save();
        Auth::login($userNoExternal); 
    }else{
        $newUser = User::create([
            'name' => $user->name,
            'email' => $user->email,
            'role_id' => 3,
            'password'=> NULL,
            'ciudad_id' => NULL, 
            'email_verified_at' => date('d M Y H:i:s'),
            'profile_external_path' => $user->avatar,
            'external_id' => $user->id,
            'points' => 0,
        ]);

        $email = $user->email;
        Auth::login($newUser); 
        return redirect('/alert/'.$email); 
    }


    return redirect('/dashboard'); 

});


Route::get('/alert/{email}' , function($email){

    $correo = new AlertMailable;

    Mail::to($email)->send($correo);

    return redirect('/dashboard'); 
})->name('alert');



Route::get('/successful/{email}', function($email){

    $correo = new SuccessfulMailable;

    Mail::to($email)->send($correo);
    return redirect('/dashboard'); 
})->name('successful');

