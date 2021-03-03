<?php

namespace App\Http\Controllers;

use App\Models\Xbox;
use Illuminate\Http\Request;

class XboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $xboxes = Xbox:: all();
        return view ('xboxes.index', compact('xboxes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('xboxes.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $xbox = request()->except('_token');
        Xbox::insert($xbox);
        return view('Xboxes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function show(Xbox $xbox)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Xbox $xbox)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Xbox $xbox)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xbox $xbox)
    {
        //
    }
}
