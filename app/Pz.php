<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Pz extends Model
{
    


static function createPz($request){

DB::table('pzs')->insert([
	'producer'=>$request['producer'],
	'invoice'=>$request['invoice'],
	'start_date'=>$request['start_date'],
	'user_id'=>Auth::user()->id,
	]);


}

}
