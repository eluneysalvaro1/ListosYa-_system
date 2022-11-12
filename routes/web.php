<?php

use App\Http\Controllers\BlackListController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\UserProgramController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\StaffProgramsController;
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
use App\Mail\InscriptionMailable;
use App\Mail\SuccessfulMailable;
use App\Models\BlackList;
use App\Models\UserProgram;
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

        
        $userProgram = UserProgram::where('user_id' , Auth::user()->id)
                        ->get();

        $count = count($userProgram);

        return view('dashboard', compact('count'));
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
    Route::post('/blacklist/change', [BlackListController::class, 'change'])->name('blacklist.change');
    Route::resource('categories', App\Http\Controllers\CategoryController::class);
    Route::get('/programs', [ProgramController::class, 'index'])->middleware('can:create programs')->name('programs.index');
    Route::get('/programs/create', [ProgramController::class, 'create'])->middleware('can:create programs')->name('programs.create');
    Route::get('/programs/show/{id}', [ProgramController::class, 'show'])->name('programs.show');
    Route::get('/programs/edit/{id}', [ProgramController::class, 'edit'])->middleware('can:edit programs')->name('programs.edit');
    Route::post('/programs/create', [ProgramController::class, 'store'])->middleware('can:create programs')->name('programs.store');
    Route::get('/programs/update/{id}', [ProgramController::class, 'update'])->middleware('can:edit programs')->name('programs.update');
    Route::get('/programs/all' , [ProgramController::class, 'showAllPrograms'])->middleware('can:all programs')->name('programs.all');
    Route::post('/programs/inscribe' , [ProgramController::class, 'inscribe'])->name('programs.inscription');
    Route::get('/programs/management' , [ProgramController::class, 'management'])->middleware('can:management programs')->name('programs.management');
    Route::get('/programs/myInscriptions' , [ProgramController::class, 'myInscriptions'])->name('programs.myInscriptions');
    Route::patch('/users/update/{id}' , [UserController::class, 'update'])->name('users.update');
    Route::delete('/users/destroy/{id}' , [UserController::class, 'destroy'])->name('users.destroy');
    Route::post('/users/delete/{id}',[UserController::class , 'deleteUser'])->name('users.delete');
    Route::post('/categories/delete/{id}' , [CategoryController::class , 'deleteCategory'])->name('categories.delete');
    Route::post('/categories/destroy/{id}' , [CategoryController::class , 'destroyCategory'])->name('categories.destroy');
    Route::get('/programs/inscription/{id}' , [ProgramController::class , 'inscription'])->name('programs.inscribe');
    Route::post('/programs/down' , [UserProgramController::class , 'down'])->name('programs.down');
    Route::get('/staff/postulants/{id}', [StaffProgramsController::class , 'show'])->name('staff.postulant');
    Route::post('/staff/asistance/{id}', [StaffProgramsController::class, 'asistance'])->name('staff.asistance');
    Route::post('/staff/state/{id}', [StaffProgramsController::class, 'state'])->name('staff.state');

    Route::post('/staff/asignate/{id}', [StaffProgramsController::class, 'asignate'])->name('staff.asignate');
    Route::get('/programs/download-contract/{user}' , [UserProgramController::class, 'downloadContract'])->name('programs.downloadContract');
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
        ])->assignRole('general');

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


// Route::get('/inscription/{email}' , function($email){

//     $correo = new InscriptionMailable;

//     Mail::to($email)->send($correo);

//     return redirect()->back(); 
// })->name('inscription');

