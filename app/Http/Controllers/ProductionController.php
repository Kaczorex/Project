<?php

namespace App\Http\Controllers;

use App\production;
use Illuminate\Http\Request;
use App\Http\Requests\ProductionRequest;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

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
       $files = Storage::disk('local')->allFiles('hide');
       // dd(explode('.', $files[0])[1]);
       $products = Production::orderBy('created_at','desc')->get();
       return view('production.index',compact('products','files'));
   }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(ProductionRequest $request)
    {
        $create=Production::create($request->all());

        $request->file('file')->storeAs('hide/'.$create->id,$request->file('file')->getClientOriginalName());

        return redirect()->route('production.index');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function addFile(ProductionRequest $request,$id)
    {

        if($request->comments){
            $addComentWithTimestamp= Carbon::now('UTC').' ; '.$request->comments;
            dd($addComentWithTimestamp);
            Production::find($id)->update($addComentWithTimestamp);
        }

        if($request->file('file'))
            $request->file('file')->storeAs('hide/'.$id,$request->file('file')->getClientOriginalName());

        return redirect()->route('production.index');
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
