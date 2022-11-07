<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use App\Models\UserProgram;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlackListController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        $blacklist = DB::table('black_lists')
            ->join('users', 'users.id', '=', 'black_lists.user_id')
            ->join('programs', 'programs.id', '=', 'black_lists.program_id')
            ->orderBy('black_lists.created_at', 'desc')
            ->where('black_lists.created_at', '<>', 'null')
            ->get([
                'black_lists.severity as severity', 'black_lists.motive as motive', 'black_lists.date as date',
                'users.name as userName', 'users.surname as userSurname', 'users.dni as userDni',
                'programs.name as programName', 'users.id as userId', 'programs.id as programId'

            ]);


        return view('blacklist.index', compact('blacklist'));
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

        $userBlack = BlackList::where('user_id', $request->user_id)
            ->where('program_id', $request->program_id)
            ->get();

        if (count($userBlack) > 0) {
           foreach ($userBlack as $el) {
                $el->created_at = null;
                $el->save();
            }
            $blackList = BlackList::create([
                'user_id' => $request->user_id,
                'motive' => $request->motive,
                'program_id' => $request->program_id,
                'severity' => $request->severity,
                'date' => date('Y-m-d H:i:s'),
            ]);

            $blackList->save();

            $userProgram = UserProgram::where('user_id', $request->user_id)
                ->where('program_id', $request->program_id)
                ->first();

            $userProgram->qualified = true;
            $userProgram->save();   
        } else {
            $blackList = BlackList::create([
                'user_id' => $request->user_id,
                'motive' => $request->motive,
                'program_id' => $request->program_id,
                'severity' => $request->severity,
                'date' => date('Y-m-d H:i:s'),
            ]);

            $blackList->save();

            $userProgram = UserProgram::where('user_id', $request->user_id)
                ->where('program_id', $request->program_id)
                ->first();

            $userProgram->qualified = true;
            $userProgram->save();
        }
        flash('Usuario enviado a la blacklist con éxito', 'success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\BlackList  $blackList
     * @return \Illuminate\Http\Response
     */
    public function show(BlackList $blackList)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\BlackList  $blackList
     * @return \Illuminate\Http\Response
     */
    public function edit(BlackList $blackList)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\BlackList  $blackList
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BlackList $blackList)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\BlackList  $blackList
     * @return \Illuminate\Http\Response
     */
    public function destroy(BlackList $blackList)
    {
        //
    }
}
