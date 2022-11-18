<?php

namespace App\Http\Controllers;


use App\Models\check;
use App\Mail\InscriptionMailable;
use App\Mail\RejectInscriptionMailable;
use App\Models\Program;
use App\Models\StaffPrograms;
use App\Models\User;
use App\Models\UserProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;

class CheckController extends Controller
{
    public function show($id)
    {
      
        $userProgram = null;
        $idUsuarioLogueado = auth()->id();
        $program = null;
        if ($idUsuarioLogueado!==null){
            $userProgram = DB::table('user_programs')
            ->where('program_id',$id)
            ->where('user_id',$idUsuarioLogueado)
            ->where('postulation_state','Aceptada')->get();

            $count =count($userProgram);
           
            if ($count == 0) {
                $userProgram = null;
            }else{
                $userProgram = $userProgram[0];
                $program = Program::find($userProgram->program_id);
            }
           $user = user::find($idUsuarioLogueado);
           
           
           
        }else{

        }
       
       

        return view('check.check', compact('userProgram', 'user', 'program'));
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
        
        
        flash('Estado de postulación cambiado con éxito', 'success');
        return redirect()->back(); 

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
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\check  $check
     * @return \Illuminate\Http\Response
     */
    public function edit(check $check)
    {
        //
    }

   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\check  $check
     * @return \Illuminate\Http\Response
     */
    public function destroy(check $check)
    {
        //
    }
}
