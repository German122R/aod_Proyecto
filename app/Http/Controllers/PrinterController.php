<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\PrinterExport;
use App\Imports\PrintersImport;
use Maatwebsite\Excel\Facades\Excel;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $impresoras = Printer:: all();
        return view ('printers.index', compact('impresoras'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('printers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $printer = request()->except('_token');
        Printer::insert($printer);
        return redirect()->to(url('/printers'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function show(Printer $printer)
    {
        return view('printers.show', compact('printer'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function edit(Printer $printer)
    {
        return view ('printers.edit', compact('printer'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Printer $printer)
    {
        $dataPrinter = request()->except('_token');
        $printer->update($dataPrinter);
    return  redirect()->to(url('/printers'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Printer  $printer
     * @return \Illuminate\Http\Response
     */
    public function destroy(Printer $printer)
    {
        $printer->delete();
        return  redirect()->to(url('/printers'));
    }

    public function exportPrintersToCSV(Request $request){
        $fileName = 'printers.csv';
        $printers = Printer::all();
    
    
        $headers = array(
            "Content-type"          => "text/csv",
            "Content-Disposition"   => "attachment; fileName=$fileName",
            "Pragma"                => "no-cache",
            "Cache-Control"         => "must-revalidate, post-check=0, pre-check=0",
            "Expires"               =>"0"
    
        );
        $columns = array( 'Marca',  'Modelo',  'accessories',  'Color',  'Descripcion');
    
        $callback =function() use($printers, $columns){
            $file = fopen( 'php://output',  'w');
            fputcsv($file, $columns);
    
    
            foreach ($printers as $printer){
            $row[ 'brand']         =  $printer->brand;
            $row[ 'model']         =  $printer->model;
            $row[ 'accessories']   =  $printer->accessories;
            $row[ 'color']         =  $printer->color;
            $row[ 'description']   =  $printer->description;
    
            fputcsv($file, array($row['brand'],  $row[ 'model'], $row[ 'accessories'], $row[ 'color'], $row[ 'description'] ));
        }
    
        fclose($file);
    };
    return response()->stream($callback, 200, $headers);
    }
    
    public function chart(){

        $printers = Printer::select(\DB::raw("COUNT(*) as count"))
        ->whereYear('created_at', date('Y'))
        ->groupBy(\DB::raw("Minute(created_at)"))
        ->pluck('count');
    
        $printers2 = Printer::select(\DB::raw("COUNT(*) as count"))
        ->whereBetween('pagesperminute', ([0, 10]))
        ->groupBy(\DB::raw("pagesperminute"))
        ->pluck('count');
    
    return view('printers.chart')
    ->with('printers', $printers)
    ->with('printers2', $printers2);
    }
    public function cards(){
        $printers = Printer:: all();
        return view ('printers.cards', compact('printers'));
    }
    
    public function exportToXlsx(){
        return Excel::download(new PrinterExport,'printers.xlsx' );
        }
        
        public function import(){
            return view('printers.import' );
            }
        
        public function importData(Request $request){
            Excel::import(new PrintersImport, request()->file('excel'));
            return redirect()->to(url('printers'));
        }
        
        }

