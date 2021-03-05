<?php

namespace App\Http\Controllers;

use App\Models\Tv;
use Illuminate\Http\Request;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tvs = Tv:: all();
        return view ('tvs.index', compact('tvs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('tvs.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tv = request()->except('_token');
        Tv::insert($tv);
        return view('tvs.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function show(Tv $tv)
    {
        return view('tvs.show', compact('tv'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function edit(Tv $tv)
    {
        return view ('tvs.edit', compact('tv'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Tv $tv)
    {
        $dataTv = request()->except('_token');
        $tv->update($dataTv);
    return  redirect()->to(url('/tvs'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Tv  $tv
     * @return \Illuminate\Http\Response
     */
    public function destroy(Tv $tv)
    {
        $tv->delete();
        return  redirect()->to(url('/tvs'));
    }
}
