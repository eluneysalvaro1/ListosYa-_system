<?php

namespace App\Http\Controllers;

use App\Models\Program;
use App\Models\User;
use App\Models\UserProgram;
use Illuminate\Http\Request;

class UserProgramController extends Controller
{




     //funcion para comprobar que el usuario no se encuentre registrado en el
    //mismo programa

    /**
     * 
     * 
     * return true (SI SE ENCUENTRA A ESE USUARIO REGISTRADO EN ESE PROGRAMA) 
     *        false (SI NO SE ENCUENTRA A ESE USUARIO REGISTRADO EN ESE PROGRAMA)  
     */

    public static function userProgramInscription($userId = '' , $programId , $dni = ''){
        
        if ($userId !== '') {
            $response = UserProgram::where('user_id' , $userId)->where('program_id' , $programId)->first();
            
        }else{
            $user = User::where('dni' , $dni)->first();
            if ($user == null) {
               
                return $response = true;
            }
            $response = UserProgram::where('user_id' , $user->id)->where('program_id' , $programId)->first();

        }
        
        return $response !== null ? true : false;
    }


    /**
     * 
     * return true (SI SE PUEDE AGREGAR UN NUEVO REGISTRO PARA ESE TURNO)
     *        false (SI NO SE PUEDE AGREGAR UN NUEVO REGISTRO PARA ESE TURNO)  
     */
    public static function verifyTurn($turnId , $programId ){
        $program = Program::where('id' , $programId)->first();
        $volunteerLimit = $program->volunteer_limit; 
        $response = false;
        $userProgram = UserProgram::where('program_id' , $programId)->where('turn' , $turnId)->get(); 
      
        if (count($userProgram) * 2 >= $volunteerLimit) {
            $response = false; 
        }else{
            
            $response = true;
        }

        return $response;
    }



    public static function verifyCount($programId){
        $response = false;
        $program = Program::where('id' , $programId)->first();
        $volunteerLimit = $program->volunteer_limit; 
        $userProgram = UserProgram::where('program_id' , $programId)->get(); 
      
        if (count($userProgram) * 2 >= $volunteerLimit) {
            $response = false; 
        }else{
            $response = true;
        }

        return $response;
    }
    


    public static function verifyCountWithoutTurn($programId){
        $response = false;
        $program = Program::where('id' , $programId)->first();
        $volunteerLimit = $program->volunteer_limit; 
        $userProgram = UserProgram::where('program_id' , $programId)->get(); 
      
        if (count($userProgram) >= $volunteerLimit) {
            $response = false; 
        }else{
            $response = true;
        }

        return $response;
    }








    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\UserProgram  $userProgram
     * @return \Illuminate\Http\Response
     */
    public function show(UserProgram $userProgram)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\UserProgram  $userProgram
     * @return \Illuminate\Http\Response
     */
    public function edit(UserProgram $userProgram)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\UserProgram  $userProgram
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, UserProgram $userProgram)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\UserProgram  $userProgram
     * @return \Illuminate\Http\Response
     */
    public function destroy(UserProgram $userProgram)
    {
        //
    }
}
