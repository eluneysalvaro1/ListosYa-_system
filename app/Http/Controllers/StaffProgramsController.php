<?php

namespace App\Http\Controllers;

use App\Mail\InscriptionMailable;
use App\Mail\RejectInscriptionMailable;
use App\Models\BlackList;
use App\Models\Program;
use App\Models\StaffPrograms;
use App\Models\User;
use App\Models\UserProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Spatie\Flash\Flash;

class StaffProgramsController extends Controller
{
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
     * @param  \App\Models\StaffPrograms  $staffPrograms
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $userPro = UserProgram::where('program_id', $id)->first();
        $duo = false;
        $program = Program::where('id' , $id)->first();
        
        if($userPro == null){
            
            $return = null;
        }else{
            
            if ($userPro->duo_id == null && $userPro->turn == null) {
                $userProgram = DB::table('user_programs')
                    ->where('user_programs.program_id' , $id)
                    ->join('programs' , 'user_programs.program_id' , '=' , 'programs.id')
                    ->join('users' , 'user_programs.user_id' , '=' , 'users.id')
                    ->get([
                        'users.name as userName' , 'users.surname as userSurname', 'users.dni as userDni'
                        ,  'user_programs.turn as turn' , 'user_programs.qualified as qualified' ,'user_programs.postulation_state as postulation_state' , 
                        'programs.state as state'  ,'user_programs.asistance as asistance' , 'user_programs.observation as observation' , 'user_programs.user_id as user_id' , 'user_programs.program_id as program_id', 
                        
                    ]);

                    $return = $this->userBlacklist($userProgram);

            }elseif ($userPro->duo_id !== null) {
                $userProgram = DB::table('user_programs')
                ->where('user_programs.program_id' , $id)
                ->join('programs' , 'user_programs.program_id' , '=' , 'programs.id')
                ->join('users' , 'user_programs.user_id' , '=' , 'users.id')
                ->join('users as userDuo' , 'user_programs.duo_id' , '=' , 'userDuo.id')
                ->get([
                    'users.name as userName' , 'users.surname as userSurname', 'users.dni as userDni'
                    , 'userDuo.surname as duoSurname', 'user_programs.qualified as qualified' ,'userDuo.dni as duoDni'  ,'userDuo.name as duoName' , 'user_programs.turn as turn' , 'user_programs.postulation_state as postulation_state' , 
                    'programs.state as state'  ,'user_programs.asistance as asistance' , 'user_programs.observation as observation' , 'user_programs.user_id as user_id' , 'user_programs.program_id as program_id', 'programs.name as programName' ,
                    
                ]);

                $duo = true;
                $return = $this->userBlacklist($userProgram);
            }elseif($userPro->turn !== null){
                    $userProgram = DB::table('user_programs')
                    ->where('user_programs.program_id' , $id)
                    ->join('programs' , 'user_programs.program_id' , '=' , 'programs.id')
                    ->join('users' , 'user_programs.user_id' , '=' , 'users.id')
                    ->get([
                        'users.name as userName' , 'users.surname as userSurname', 'users.dni as userDni'
                        ,  'user_programs.turn as turn' , 'user_programs.qualified as qualified' ,'user_programs.postulation_state as postulation_state' , 
                        'programs.state as state'  ,'user_programs.asistance as asistance' , 'user_programs.observation as observation' , 'user_programs.user_id as user_id' , 'user_programs.program_id as program_id', 'programs.name as programName' ,
                        
                    ]);
                    $return = $this->userBlacklist($userProgram);
            }else{
                    $userProgram = DB::table('user_programs')
                    ->where('user_programs.program_id' , $id)
                    ->join('users' , 'user_programs.user_id' , '=' , 'users.id')
                    ->join('programs' , 'user_programs.program_id' , '=' , 'programs.id')
                    ->join('users as userDuo' , 'user_programs.duo_id' , '=' , 'userDuo.id')
                    ->get([
                        'users.name as userName' , 'users.surname as userSurname', 'users.dni as userDni'
                        , 'userDuo.surname as duoSurname', 'user_programs.qualified as qualified' ,'userDuo.dni as duoDni'  ,'userDuo.name as duoName' , 'user_programs.turn as turn' , 'user_programs.postulation_state as postulation_state' , 
                        'user_programs.asistance as asistance' , 'user_programs.observation as observation' , 'user_programs.user_id as user_id' , 'user_programs.program_id as program_id', 'programs.name as programName' 
                    ]);
                    $duo = true;
                    $return = $this->userBlacklist($userProgram);
                }
        }

      

        return view('staff.usersProgram', compact('return', 'duo' , 'program'));
    }


    public function userBlacklist($userProgram){
        $blacklist = BlackList::all();

        for ($i=0; $i < count($userProgram); $i++) { 
            $userProgram[$i]->blacklist = 0;
            $userProgram[$i]->severity = 0;
            for ($j=0; $j < count($blacklist); $j++) { 
                if ($userProgram[$i]->user_id == $blacklist[$j]->user_id ) {
                    $userProgram[$i]->blacklist = 1;
                    $userProgram[$i]->severity = $blacklist[$j]->severity;
                }
                
            }
        }
        return $userProgram;
    }


public function staffUserDelete(Request $request){
    $user = StaffPrograms::where('user_id' , $request->user_id)
                    ->where('program_id' , $request->program_id)
                    ->get();

    $user[0]->delete();


    flash('Usuario staff borrado con ??xito', 'success');
    return back()->withInput();
}



    public function asistance(Request $request ,$id ){
        $userProgram = UserProgram::where('user_id' , $id)
                        ->where('program_id' , $request->program_id)                
                        ->first();

        if ($userProgram->asistance == null) {
            $userProgram->asistance = true;
           
            $userProgram->save();
        }elseif ($userProgram->asistance == 1) {
            $userProgram->asistance = false;
            $userProgram->save();
        }elseif ($userProgram->asistance == 0) {
            $userProgram->asistance = true;
            $userProgram->save();
        }
        
        flash('Asistencia cambiada', 'success');
        return redirect()->back();
    }


    public function asignate(Request $request , $id){
        $userProgram = UserProgram::where('user_id' , $id)
                        ->where('program_id' , $request->program_id)                
                        ->first();

        $userProgram->qualified = true;
        $userProgram->save();

        $user = User::find($id);
        $program = Program::find($request->program_id);

        $user->points = $program->program_points;
        $user->save();

        flash('Puntos asignados a usuario correctamente', 'success');
        return redirect()->back();
    }



    public function state(Request $request,$id){
        $userProgram = UserProgram::where('user_id' , $id)
                        ->where('program_id' , $request->program_id)                
                        ->first();
       
        $user = User::find($id);
      

        if ($userProgram->duo_id !== null) {
            $another = User::find($userProgram->duo_id);
        }



        if ($request->action == 'acept') {
            $userProgram->postulation_state = 'Aceptada';
            $userProgram->save();

            
            $correo = new InscriptionMailable($id);
            
            $email = $user->email;
            
            if ($userProgram->duo_id !== null) {
                $email2 = $another->email; 
                Mail::to([$email,$email2])->send($correo);   
            }else{
                Mail::to($email)->send($correo);
            }


        }elseif ($request->action == 'reject') {
            $userProgram->postulation_state = 'Rechazada';
            $userProgram->save();

            $correo = new RejectInscriptionMailable;
            $email = $user->email;
            
            if ($userProgram->duo_id !== null) {
                $email2 = $another->email; 
                Mail::to([$email,$email2])->send($correo);   
            }else{
                Mail::to($email)->send($correo);
            }

        }
        
        
        flash('Estado de postulaci??n cambiado con ??xito', 'success');
        return redirect()->back(); 

    }



    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\StaffPrograms  $staffPrograms
     * @return \Illuminate\Http\Response
     */
    public function edit(StaffPrograms $staffPrograms)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\StaffPrograms  $staffPrograms
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, StaffPrograms $staffPrograms)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\StaffPrograms  $staffPrograms
     * @return \Illuminate\Http\Response
     */
    public function destroy(StaffPrograms $staffPrograms)
    {
        //
    }
}
