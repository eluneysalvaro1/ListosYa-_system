<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;

class ProgramController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $programs = Program::orderBy('start_date','asc')->paginate(5);
        $categories=Category::all();
        return view('programs.index', compact('programs','categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        $categories=Category::all();
        return view('programs.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $ruta = public_path("/images/programs/");
        if($request->hasFile("program_image")){
            $program_image = $request->file("program_image");
            $nombreimagen = Str::slug($request->name).".". $program_image->guessExtension();
            $ruta = public_path("/images/programs/");
            $program_image->move($ruta,$nombreimagen);
        }else{
            $nombreimagen = "none.jpg";
        }
        
        
        
        $program = Program::create([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date,
            'start_time' => $request->start_time,
            'finish_time' => $request->finish_time,
            'volunteer_limit' =>$request->volunteer_limit,
            'place_event' => $request->place_event,
            'program_points' => $request->program_points,
            'state' => $request->state,
            'program_image' => $nombreimagen,
            'category_id' => $request->category_id
        ]
        );
        
        $program->save();
        flash('Programa creado con éxito' , 'success');
        return redirect()->route('programs.index');
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

    public function edit($id)
    {
        $program= Program::find($id);
        return view("programs.edit",compact("program"));
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
       $program = Program::find($id);

        $program->update([
            'name' => $request->name,
            'start_date' => $request->start_date,
            'finish_date' => $request->finish_date,
            'start_time' => $request->start_time,
            'finish_time' => $request->finish_time,
            'volunteer_limit' =>$request->volunteer_limit,
            'place_event' => $request->place_event,
            'program_points' => $request->program_points,
            'state' => $request->state,
        ]);

        $program->save();
        flash('Programa editado con éxito' , 'success');
        return redirect()->route('programs.index');
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
