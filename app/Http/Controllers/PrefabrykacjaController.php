<?php

namespace App\Http\Controllers;

use App\Http\Requests\PrefabrykacjaRequest;
use App\Http\Requests\PrefabrykacjaIndexRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Prefabrykacja;

class PrefabrykacjaController extends Controller
{
    //

    public function index()
    {
        $today=date('Y-m-d');

        $posts = DB::table('prefabrykacjas')->where('recivedata', $today)->orderBy('id', 'desc')->get();

        return view('prefabrykacja.index', compact('posts'));
    }

    public function store(PrefabrykacjaIndexRequest $request)
    {
        $reciveData = $request->input('reciveData2');
        
        $posts = DB::table('prefabrykacjas')->where('recivedata', $reciveData)->get();

        return view('prefabrykacja.index', compact('posts'));
    }
    public function create(PrefabrykacjaRequest $request)
    {
        $dataFPV=$request->company;
        Prefabrykacja::create($request->all());

        return redirect()->route('prefabrykacja.index');
    }
}
