<?php

namespace App\Http\Controllers\RH;

use App\Models\RH\branchs;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BranchsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('RH/branch/index');
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
     * @param  \App\Models\RH\branchs  $branchs
     * @return \Illuminate\Http\Response
     */
    public function show(branchs $branchs)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RH\branchs  $branchs
     * @return \Illuminate\Http\Response
     */
    public function edit(branchs $branchs)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RH\branchs  $branchs
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, branchs $branchs)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RH\branchs  $branchs
     * @return \Illuminate\Http\Response
     */
    public function destroy(branchs $branchs)
    {
        //
    }
}
