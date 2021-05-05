<?php

namespace App\Http\Controllers;

use App\Models\Tv;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\TvExport;
use App\Imports\TvsImport;
use Maatwebsite\Excel\Facades\Excel;

class TvController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teles = Tv:: all();
        return view ('tvs.index', compact('teles'));
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
        return redirect()->to(url('/tvs'));
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
    public function exportTvsToCSV(Request $request){
        $fileName = 'tvs.csv';
        $tvs = Tv::all();
    
    
        $headers = array(
            "Content-type"          => "text/csv",
            "Content-Disposition"   => "attachment; fileName=$fileName",
            "Pragma"                => "no-cache",
            "Cache-Control"         => "must-revalidate, post-check=0, pre-check=0",
            "Expires"               =>"0"
    
        );
        $columns = array( 'Marca',  'Modelo',  'accessories',  'Color',  'Descripcion');
    
        $callback =function() use($tvs, $columns){
            $file = fopen( 'php://output',  'w');
            fputcsv($file, $columns);
    
    
            foreach ($tvs as $tv){
            $row[ 'brand']         =  $tv->brand;
            $row[ 'model']         =  $tv->model;
            $row[ 'accessories']   =  $tv->accessories;
            $row[ 'color']         =  $tv->color;
            $row[ 'description']   =  $tv->description;
    
            fputcsv($file, array($row['brand'],  $row[ 'model'], $row[ 'accessories'], $row[ 'color'], $row[ 'description'] ));
        }
    
        fclose($file);
    };
    return response()->stream($callback, 200, $headers);
    }
    
    public function chart(){

        $tvs = Tv::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Day(created_at)"))
        ->pluck('count');
    
        $tvs2 = Tv::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('control', ([0, 10]))
        ->groupBy(\DB::raw("control"))
        ->pluck('count');
    
    return view('tvs.chart')
    ->with('tvs', $tvs)
    ->with('tvs2', $tvs2);
    }
    
    public function cards(){
        $tvs = Tv:: all();
        return view ('tvs.cards', compact('tvs'));
    }
    public function exportToXlsx(){
        return Excel::download(new TvExport,'tvs.xlsx' );
        }

        public function import(){
            return view('tvs.import' );
            }
        
        public function importData(Request $request){
            Excel::import(new TvsImport, request()->file('excel'));
            return redirect()->to(url('tvs'));
        }
        
        }
    

