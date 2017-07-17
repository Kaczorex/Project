<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Pz;
use App\Http\Requests\PzRequest;

class PzController extends Controller
{
    


	public function index(){
		$pz= Pz::all();
		return view('pz.index',compact('pz'));
	}

	public function create(PzRequest $request){
		Pz::createPz($request);
		return redirect()->route('pz.index');
	}

}
