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
        return view('xboxes.show', compact('xbox'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function edit(Xbox $xbox)
    {
        return view ('xboxes.edit', compact('xbox'));
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
        $dataXbox = request()->except('_token');
        $xbox->update($dataXbox);
    return  redirect()->to(url('/xboxes'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Xbox  $xbox
     * @return \Illuminate\Http\Response
     */
    public function destroy(Xbox $xbox)
    {
        $xbox->delete();
        return  redirect()->to(url('/xboxes'));
    }
    public function exportXboxesToCSV(Request $request){
        $fileName = 'xboxes.csv';
        $xboxes = Xbox::all();
    
    
        $headers = array(
            "Content-type"          => "text/csv",
            "Content-Disposition"   => "attachment; fileName=$fileName",
            "Pragma"                => "no-cache",
            "Cache-Control"         => "must-revalidate, post-check=0, pre-check=0",
            "Expires"               =>"0"
    
        );
        $columns = array( 'Marca',  'Modelo',  'accessories',  'Color',  'Descripcion');
    
        $callback =function() use($xboxes, $columns){
            $file = fopen( 'php://output',  'w');
            fputcsv($file, $columns);
    
    
            foreach ($xboxes as $xbox){
            $row[ 'brand']         =  $xbox->brand;
            $row[ 'model']         =  $xbox->model;
            $row[ 'accessories']   =  $xbox->accessories;
            $row[ 'color']         =  $xbox->color;
            $row[ 'description']   =  $xbox->description;
    
            fputcsv($file, array($row['brand'],  $row[ 'model'], $row[ 'accessories'], $row[ 'color'], $row[ 'description'] ));
        }
    
        fclose($file);
    };
    return response()->stream($callback, 200, $headers);
    }
    
}
