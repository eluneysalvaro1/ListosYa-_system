<?php

use App\Http\Controllers\ProgramController;
use Laravel\Socialite\Facades\Socialite;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Ciudad;
use App\Models\Provincia;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\UserController;


use App\Mail\AlertMailable;
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
    return view('welcome');
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
    ]);


    Route::get('/programs/calendar', [ProgramController::class, 'calendar'])->name('calendar_programs');
    Route::get('/programs/data', [ProgramController::class, 'calendarData'])->name('calendar_data');
});

Route::get('/login-google', function () {
    return Socialite::driver('google')->redirect();
});
 
Route::get('/google-callback', function () {
    $user = Socialite::driver('google')->user();
 
    $userExists = User::where('external_id' , $user->id)->first(); 

    if ($userExists) {
        Auth::login($userExists); 
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

        Auth::login($newUser); 

    }
    return redirect('/dashboard'); 

});


Route::get('alert' , function(){

    $correo = new AlertMailable;

    Mail::to('eluneyjsalvaro@gmail.com')->send($correo);

    return redirect('/dashboard'); 
})->name('alert');