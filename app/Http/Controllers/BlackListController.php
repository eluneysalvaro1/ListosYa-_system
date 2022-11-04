<?php

namespace App\Http\Controllers;

use App\Models\BlackList;
use App\Models\UserProgram;
use Illuminate\Http\Request;

class BlackListController extends Controller
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
        $blackList = BlackList::create([
            'user_id' => $request->user_id,
            'motive' => $request->motive,
            'program_id' => $request->program_id,
            'severity' => $request->severity,
            'date' => date('Y-m-d H:i:s'),
        ]);

        $blackList->save();

        $userProgram = UserProgram::where('user_id' ,$request->user_id)
                        ->where('program_id' , $request->program_id)
                        ->first();
        
        $userProgram->qualified = true;
        $userProgram->save();

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
