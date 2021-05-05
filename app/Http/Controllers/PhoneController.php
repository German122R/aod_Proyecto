<?php

namespace App\Http\Controllers;

use App\Models\Phone;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Exports\PhoneExport;
use App\Imports\PhonesImport;
use Maatwebsite\Excel\Facades\Excel;

class PhoneController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $phones = Phone:: all();
        return view ('phones.index', compact('phones'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('phones.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $phone = request()->except('_token');
        Phone::insert($phone);
        return redirect()->to(url('/phones'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function show(Phone $phone)
    {
        return view('phones.show', compact('phone'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function edit(Phone $phone)
    {
        return view ('phones.edit', compact('phone'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Phone $phone)
    {
        $dataPhone = request()->except('_token');
        $phone->update($dataPhone);
    return  redirect()->to(url('/phones'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Phone  $phone
     * @return \Illuminate\Http\Response
     */
    public function destroy(Phone $phone)
    {
        $phone->delete();
        return  redirect()->to(url('/phones'));
    }



public function exportPhonesToCSV(Request $request){
    $fileName = 'phones.csv';
    $phones = Phone::all();


    $headers = array(
        "Content-type"          => "text/csv",
        "Content-Disposition"   => "attachment; fileName=$fileName",
        "Pragma"                => "no-cache",
        "Cache-Control"         => "must-revalidate, post-check=0, pre-check=0",
        "Expires"               =>"0"

    );
    $columns = array( 'Marca',  'Modelo',  'accessories',  'Color',  'Descripcion');

    $callback =function() use($phones, $columns){
        $file = fopen( 'php://output',  'w');
        fputcsv($file, $columns);


        foreach ($phones as $phone){
        $row[ 'brand']         =  $phone->brand;
        $row[ 'model']         =  $phone->model;
        $row[ 'accessories']   =  $phone->accessories;
        $row[ 'color']         =  $phone->color;
        $row[ 'description']   =  $phone->description;

        fputcsv($file, array($row['brand'],  $row[ 'model'], $row[ 'accessories'], $row[ 'color'], $row[ 'description'] ));
    }

    fclose($file);
};
return response()->stream($callback, 200, $headers);
}

public function chart(){

    $phones = Phone::select(\DB::raw("COUNT(*) as count"))
    ->whereYear('created_at', date('Y'))
    ->groupBy(\DB::raw("Day(created_at)"))
    ->pluck('count');

    $phones2 = Phone::select(\DB::raw("COUNT(*) as count"))
    ->whereBetween('chip', ([0, 10]))
    ->groupBy(\DB::raw("chip"))
    ->pluck('count');

return view('phones.chart')
->with('phones', $phones)
->with('phones2', $phones2);
}

public function cards(){
    $phones = Phone:: all();
    return view ('phones.cards', compact('phones'));
}

public function exportToXlsx(){
return Excel::download(new PhoneExport,'phones.xlsx' );
}

public function import(){
    return view('phones.import' );
    }

public function importData(Request $request){
    Excel::import(new PhonesImport, request()->file('excel'));
    return redirect()->to(url('phones'));
}

}