<?php

namespace App\Http\Controllers;

use App\production;
use Illuminate\Http\Request;
use App\Http\Requests\ProductionRequest;
use Illuminate\Support\Facades\Storage;


class ProductionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // dd(Storage::disk('Productions')->allFiles());


        $img = Storage::disk('productions')->url('8/2.png"');


        $products = Production::all();
        return view('production.index',compact('products','img'));
    }
    public function file()
    {

       Storage::disk('productions')->put('file.txt', 'Contents');

       return '<img src="'.Storage::disk('productions')->url('7/2.png').'">';
       // return Storage::disk('local')->url('Productions/8/2.png');


   }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProductionRequest $request)
    {
       
       $create=Production::create($request->all());

       $request->file('file')->store('Productions/'.$create->id);

       return redirect()->route('production.index');

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
     * @param  \App\production  $production
     * @return \Illuminate\Http\Response
     */
    public function show(production $production)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\production  $production
     * @return \Illuminate\Http\Response
     */
    public function edit(production $production)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\production  $production
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, production $production)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\production  $production
     * @return \Illuminate\Http\Response
     */
    public function destroy(production $production)
    {
        //
    }
}
