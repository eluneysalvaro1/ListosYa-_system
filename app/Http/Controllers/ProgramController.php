<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $programs = Program::orderBy('start_date','desc')->paginate(5);

        return view('programs.index', compact('programs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('programs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        if($request->hasFile("program_image")){
            $program_image = $request->file("program_image");
            $nombreimagen = Str::slug($request->name).".". $program_image->guessExtension();
            $ruta = public_path("images/programs/");
            $program_image->move($ruta,$nombreimagen);
            $request->program_image = $nombreimagen;
        }
        dd($request);
        $request->validate([
            'name' => 'required',
            'start_date' => 'required',
            'finish_date' => 'required',
            'start_time' => 'required',
            'finish_time' => 'required',
            'volunteer_limit' => 'required',
            'place_event' => 'required',
            'program_points' => 'required',
            'state' => 'required',
        ]);
        
        Program::create($request->post());

        return redirect()->route('programs.index')->with('success','Programa creado correctamente.');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show(Program $program)
    {
        return view('programs.show',compact('programs'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function edit(Program $program)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Program $program)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function destroy(Program $program)
    {
        $program->delete();
        return redirect()->route('programs.index')->with('success', 'Programa Eliminado');
    }



    public function calendar(){
        $programs = Program::where('state' , 'open_to_postulated')->get();
        return view('programs.calendar' , compact('programs'));
    }


    public function calendarData(){
        $programs = Program::where('state' , 'open_to_postulated')->get();

        return json_encode($programs);
    }


}
