<?php

namespace App\Http\Controllers;

use App\Models\StaffPrograms;
use App\Models\UserProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

        $userProgram = DB::table('user_programs')
                       ->join('users' , 'user_programs.id' , '=' , 'users.id')
                       ->join('users as userDuo' , 'user_programs.duo_id' , '=' , 'userDuo.id')
                       ->get([
                            'users.name as userName' , 'userDuo.name as duoName' , 'user_programs.turn as turn' , 'user_programs.postulation_state as postulation_state' , 
                            'user_programs.asistance as asistance' , 'user_programs.observation as observation' , 'user_programs.user_id as user_id' , 'user_programs.program_id as program_id'
                       ]);

        $usersPrograms = UserProgram::find($id);

        return view('staff.usersProgram', compact('userProgram'));
    }

    public function asistance(Request $request ,$id ){
        $userProgram = UserProgram::where('user_id' , $id)
                        ->where('program_id' , $request->program_id)                
                        ->first();

        if ($userProgram->asistance == null) {
            $userProgram->update([
                'asistance' => true
            ]);
           
            $userProgram->save();
        }elseif ($userProgram->asistance == true) {
            $userProgram->update([
                'asistance' => false
            ]);
            $userProgram->save();
        }elseif ($userProgram->asistance == false) {
            $userProgram->update([
                'asistance' => true
            ]);
            $userProgram->save();
        }
        
        flash('Asistencia cambiada', 'success');
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
