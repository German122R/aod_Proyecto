<?php

namespace App\Http\Controllers;

use App\Models\Printer;
use Illuminate\Http\Request;

class PrinterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $printers = Printer:: all();
        return view ('printers.index', compact('printers'));
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
        return view('printers.index');
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
}
