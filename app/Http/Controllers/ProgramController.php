<?php

namespace App\Http\Controllers;

use App\Models\Program;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\Category;
use App\Models\StaffPrograms;
use App\Models\User;
use App\Models\UserProgram;
// use DragonCode\Contracts\Cashier\Auth\Auth;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

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
        $staff = User::where('role_id' , 2)->orwhere('role_id',1)->get();
     
        return view('programs.create',compact('categories' , 'staff'));
    }


    public function showAllPrograms(){
        $programs = Program::where('state' , 'open_to_postulated')->get();

        return view('programs.all' , compact('programs'));

    }


    public function management(){

        $user = Auth::user()->id;

        $staffPrograms = DB::table('staff_programs')
                        ->join('programs' , 'staff_programs.program_id' , '=' , 'programs.id')
                        ->where('staff_programs.user_id' , $user)
                        ->get([
                            'programs.name as name' , 'programs.place_event as place_event' , 'programs.state as state',
                             'staff_programs.user_id as staffUserId' , 'programs.program_image as program_image' , 'programs.id as id'
                        ])->groupBy('state');
                        
        

        return view('programs.management', compact('staffPrograms'));
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
            'duo' => $request->duo == 'on' ? true : false,
            'turn' => $request->turn == 'on' ? true : false,
            'state' => $request->state,
            'program_image' => $nombreimagen,
            'category_id' => $request->category_id
        ]
        );

        $program->save();

        /**
         * Se busca en un bucle un total de 100 usuarios staff, se crea la relacion
         * con la tabla staff programs por cada uno
         */
        for ($i=1; $i < 100; $i++) {
            $txt = 'staff_id_' . $i;
            if ($request[$txt]) {
                $staffProgram = StaffPrograms::create([
                    'user_id' => $request[$txt],
                    'program_id' => $program->id
                ]);
                $staffProgram->save();
            }
        }

        $usersAdmin = User::where('role_id' , 1)->get();

        foreach ($usersAdmin as $el) {
            $newStaffAdmin = StaffPrograms::create([
                'user_id' => $el->id,
                'program_id' => $program->id
            ]);
            $newStaffAdmin->save();
        }

        flash('Programa creado con éxito' , 'success');
        return redirect()->route('programs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Program  $program
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

        $program = Program::find($id);

        return json_encode($program);
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




    public function inscription($id){
        $program = Program::find($id);
        
        $userProgram = UserProgram::where('user_id' , Auth::user()->id)
        ->where('program_id' , $id)
        ->first();
        
        
        


        return view('programs.info' , compact('program' , 'userProgram'));
    }



    public function myInscriptions(){
        $id = Auth::user()->id;
        $programs = DB::table('user_programs')
                    ->where('user_id' , $id)
                    ->join('programs' , 'programs.id' , '=' , 'user_programs.program_id')
                    ->get([
                        'user_programs.user_id as user_id' , 'programs.id as program_id' , 'user_programs.program_id as pr', 
                        'programs.name as program_name' , 'programs.place_event as program_place_event', 'programs.program_image as program_image',
                        'user_programs.postulation_state as postulation_state'
                    ]);
        
        // UserProgram::where('user_id' , $id)->get();
        
        // dd($programs);

        return view('programs.myInscription' , compact('programs'));
    }





    public function inscribe(Request $request){
        
        if($request->duo_id !== null && $request->turn !== null){
            $userProgramInscription = UserProgramController::userProgramInscription($request->user_id, $request->program_id);
            $userProgramInscription2 = UserProgramController::userProgramInscription( '', $request->program_id, $request->duo_id);
            if ($userProgramInscription == false && $userProgramInscription2 == false) {
                $user = User::where('id' , $request->user_id)->first();
                $duo = User::where('dni' , $request->duo_id)->first();
                if ($user->id !== $duo->id) {
                    $turns = UserProgramController::verifyTurn($request->turn, $request->program_id);
                    if ($turns) {
                        $userProgram1 = UserProgram::create([
                            'user_id' => $request->user_id,
                            'program_id' => $request->program_id,
                            'duo_id' => $duo->id,
                            'turn' => $request->turn
                        ]);
                        $userProgram1->save();
                        $userProgram2 = UserProgram::create([
                            'user_id' => $duo->id,
                            'program_id' => $request->program_id,
                            'duo_id' => $request->user_id,
                            'turn' => $request->turn
                        ]);
                        $userProgram2->save();
                        flash('Se ha registrado con éxito. Ahora deberá esperar a que acepten su postulación. Será informad@ via Email. Gracias.' , 'success');
                        return redirect()->back();
                    }else{
                        flash('El turno seleccionado se encuentra ocupado. Pruebe con otro' , 'error');
                        return redirect()->back();
                    }
                }else{
                    flash('No puede ser su propio duo', 'error');
                    return redirect()->back();
                }


            }else{
                flash('Puede que su dupla no se encuentre registrada en el sistema. O puede que ya esté inscripto en el programa.', 'error');
                return redirect()->back();
            }
        }elseif ($request->turn !== null) {
            $userProgramInscription = UserProgramController::userProgramInscription($request->user_id, $request->program_id);
            if ($userProgramInscription == false) {
                $turn = UserProgramController::verifyTurn($request->turn, $request->program_id);
                if ($turn) {
                    $userProgram1 = UserProgram::create([
                        'user_id' => $request->user_id,
                        'program_id' => $request->program_id,
                        'turn' => $request->turn
                    ]);
                    $userProgram1->save();
                    
                    flash('Se ha registrado con éxito. Ahora deberá esperar a que acepten su postulación. Será informad@ via Email. Gracias.' , 'success');
                    return redirect()->back();
                }else{
                    flash('El turno seleccionado se encuentra ocupado. Pruebe con otro' , 'error');
                    return redirect()->back();
                }
            }else{
                flash('Usted ya está inscripto en el programa', 'error');
                return redirect()->back();
            }
        }elseif ($request->duo_id !== null) {
            $userProgramInscription = UserProgramController::userProgramInscription($request->user_id, $request->program_id);
            $userProgramInscription2 = UserProgramController::userProgramInscription( '', $request->program_id, $request->duo_id);
            if ($userProgramInscription == false && $userProgramInscription2 == false) {
                $user = User::where('id' , $request->user_id)->first();
                $duo = User::where('dni' , $request->duo_id)->first();
                if ($user->id !== $duo->id) {

                    $cant = UserProgramController::verifyCount($request->program_id);
                    if ($cant) {

                      
                        
                        $userProgram1 = UserProgram::create([
                            'user_id' => $request->user_id,
                            'program_id' => $request->program_id,
                            'duo_id' => $duo->id
                        ]);
                        $userProgram1->save();

                        $userProgram2 = UserProgram::create([
                            'user_id' => $duo->id,
                            'program_id' => $request->program_id,
                            'duo_id' =>  $request->user_id
                        ]);
                        $userProgram2->save();

                        flash('Se ha registrado con éxito. Ahora deberá esperar a que acepten su postulación. Será informad@ via Email. Gracias.' , 'success');
                        return redirect()->back();
                    }else{
                        flash('Ya se han registrado muchas personas. Pruebe con otro programa. Disculpe las molestias' , 'warning');
                        return redirect()->back();
                    }

                }else{
                    flash('No puede ser su propio duo', 'error');
                    return redirect()->back();
                }


            }else{
                flash('Puede que su dupla no se encuentre registrada en el sistema. O puede que ya esté inscripto en el programa.', 'error');
                return redirect()->back();
            }
        }else{
            $userProgramInscription = UserProgramController::userProgramInscription($request->user_id, $request->program_id);
            if ($userProgramInscription == false) {
                    $cant = UserProgramController::verifyCountWithoutTurn($request->program_id);
                    if ($cant) {
                        $userProgram1 = UserProgram::create([
                            'user_id' => $request->user_id,
                            'program_id' => $request->program_id,
                            'duo_id' => null
                        ]);
                        $userProgram1->save();
                        flash('Se ha registrado con éxito. Ahora deberá esperar a que acepten su postulación. Será informad@ via Email. Gracias.' , 'success');
                        return redirect()->back();
                    }else{
                        flash('Ya se han registrado muchas personas. Pruebe con otro programa. Disculpe las molestias' , 'warning');
                        return redirect()->back();
                    }

            }else{
                flash('Ustes ya está inscripto en el programa.', 'error');
                return redirect()->back();
            }
        }




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
            'duo' => $request->duo == 'on' ? true : false,
            'turn' => $request->turn == 'on' ? true : false,
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
