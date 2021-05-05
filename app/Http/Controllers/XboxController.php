<?php

namespace App\Http\Controllers;

use App\Models\Xbox;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\XboxExport;
use App\Imports\XboxesImport;
use Maatwebsite\Excel\Facades\Excel;


class XboxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $consolas = Xbox:: all();
        return view ('xboxes.index', compact('consolas'));
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
        return redirect()->to(url('/xboxes'));
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
    public function chart(){

        $xboxes = Xbox::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Minute(created_at)"))
        ->pluck('count');
    
        $xboxes2 = Xbox::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('games', ([0, 10]))
        ->groupBy(\DB::raw("games"))
        ->pluck('count');
    
    return view('xboxes.chart')
    ->with('xboxes', $xboxes)
    ->with('xboxes2', $xboxes2);
    }
    public function cards(){
        $xboxes = Xbox:: all();
        return view ('xboxes.cards', compact('xboxes'));
    }

    public function exportToXlsx(){
        return Excel::download(new XboxExport,'xboxes.xlsx' );
        }

          
        public function import(){
            return view('xboxes.import' );
            }
        
        public function importData(Request $request){
            Excel::import(new XboxesImport, request()->file('excel'));
            return redirect()->to(url('xboxes'));
        }
        
}
