<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Efaktury;
use App\Http\Requests\EfakturyRequest;
use Illuminate\Support\Facades\DB;
class EfakturyController extends Controller
{
    



    public function index(){

    	$efaktury = Efaktury::all();
    	return view('efaktury.index',compact('efaktury'));
    }

    public function create(EfakturyRequest $request){
    	
    	Efaktury::create($request->all());

    	return redirect()->route('efaktury.index');
    }
}
