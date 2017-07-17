<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Transport extends Model
{
 protected $fillable = [
 'user_id',
 'address',
 'car',
 'priority',
 'time_of_day',
 'comments',
 'driver',
 'delivry_date',
 'magazine',
 'DD'];
 protected $hidden = [
 'remember_token',
 ];



 static function createDef($request){

  DB::table('transports')->insert([
    'user_id'=> Auth::user()->id,
    'address'=> $request['address'],
    'car'=> $request['car'],
    'priority'=> $request['priority'],
    'time_of_day'=> $request['time_of_day'],
    'comments'=> $request['comments'],
    'driver'=> '0',
    'delivry_date'=> $request['delivry_date'],
    'magazine'=> Auth::user()->magazine,
    'DD'=>$request['DD']
    ]);
}



  static function priority($request){
   switch ($request) {
    case '0':

    return 'Normalny';
    break;
    case '1':

    return 'Priorytet';
    break;
  }
}

  static function timeOfDay($request){
   switch ($request) {
    case '0':
    return 'Cały dzień';
    break;

    case '1':
    return 'Rano';
    break;

    case '2':
    return 'Po południu';
    break;
  }
}

  static function drivers($id){

    if ($id=='0'){
      return '';
    }
    else {
       return Auth::user()->id($id)->name;
    }
  

  }

}
