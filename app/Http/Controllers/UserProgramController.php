<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use App\Models\Program;
use App\Models\User;
use App\Models\UserProgram;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
      
        if (count($userProgram) >= $volunteerLimit) {
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
      
        if (count($userProgram) >= $volunteerLimit) {
            $response = false; 
        }else{
            $response = true;
        }

        return $response;
    }
    



    public function downloadContract($id){
        $user = User::find($id);

        $userProgram = UserProgram::where('user_id' , $id)
                    ->where('postulation_state' , 'Aceptada')
                    ->latest()->first();

        $program = Program::find($userProgram->program_id);
        
        $ciudad = DB::table('ciudads')
                    ->join('users' , 'users.ciudad_id' , '=' , 'ciudads.id')
                    ->where('ciudads.id' , '=' , $user->ciudad_id)
                    ->get([
                        'ciudads.nombre as ciudadName' , 'ciudads.provincia as provinciaName'
                    ]);
        $pdf = Pdf::loadView('programs.volunteerContract' ,compact('user' , 'userProgram' , 'program' , 'ciudad'));
        return $pdf->download('contrato_voluntariado.pdf');

    }





    public function down(Request $request){
        

        if ($request->postulation_state == 'Espera') {
            $userProgram = UserProgram::where('user_id' , $request->user_id)
                           ->where('program_id' , $request->program_id)
                            ->first();
                            
            $userProgram->postulation_state = 'Baja';
            $userProgram->save();
        }elseif ($request->postulation_state == 'Aceptada') {
            
            $userProgram = UserProgram::where('user_id' , $request->user_id)
                           ->where('program_id' , $request->program_id)
                            ->first();
                            
            $userProgram->postulation_state = 'Baja';
            $userProgram->save();


            $blackList = BlackList::create([
                'user_id' => $request->user_id,
                'motive' => 'Se dió de baja en un programa estando aceptad@.',
                'program_id' => $request->program_id,
                'severity' => 'Intermedia',
                'date' => date('Y-m-d H:i:s'),
            ]);

            $blackList->save();

        }

        flash('Se ha dado de baja satistactoriamente', 'success');
        return redirect()->back();

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
