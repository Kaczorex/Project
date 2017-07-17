<?php

namespace App\Http\Controllers;

use App\Http\Requests\TransportByDateRequest;
use App\Http\Requests\TransportRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Transport;
use App\Roles;
use Carbon\Carbon;

use Illuminate\Support\Facades\Auth;

class TransportController extends Controller
{


    public function index() {

        // dd();


    	$date = date('Y-m-d');

        $dt =  Carbon::now()->formatLocalized('%A');

        $event=DB::table('event_transports')->Where('date',$date)->first();
        if($event==null){
            $event = (object)['event'=>' ',
            'date'=>'2017-07-10'];
            
        }
        $transports = Transport::Where('delivry_date',$date)->orderBy('id','asc')->get();

        return view('transport.index',compact('transports','dt','date','event'));

    }
    public function byDate(TransportByDateRequest $request){

        $date = $request->input('delivry_date');

        $dt =  Carbon::createFromFormat('Y-m-d',$date)->formatLocalized('%A');
        $event=DB::table('event_transports')->Where('date',$date)->first();
        if($event==null){
            $event = (object)['event'=>' ',
            'date'=>'2017-07-10'];
            
        }
        
        $transports = Transport::Where('delivry_date',$date)->orderBy('id','asc')->get();

        return view('transport.index',compact('transports','dt','date','event'));

    }
    public function create(TransportRequest $request){

        Transport::createDef($request);

        return redirect()->route('transport.index');

    }
    public function edit(Transport $id){

        if((Auth::user()->hasAnyRole('Administrator'))||(Auth::user()->hasAnyRole('Dyrektor logistyki'))||(Auth::user()->hasAnyRole('Logistyka')))
         return view('transport.edit',compact('transport','id','delivry_date_glob'));
     elseif(Auth::user()->id != $id->user_id)
        return redirect()->route('transport.index');


    return view('transport.edit',compact('transport','id','delivry_date_glob'));

}
public function update(TransportRequest $id){


    Transport::find($id->id)->update($id->all());


    return redirect()->route('transport.index');


}
public function assign($date){

  

    $transports = Transport::Where('delivry_date',$date)->orderBy('id','desc')->get();

    return view('transport.assign.assign',compact('transports'));
}
public function assignUpdate(TransportByDateRequest $id){

   
  Transport::find($id->id)->update(['driver'=> $id->driver]);
  
  $date=$id->delivry_date;

  return redirect()->route('transport.assign',[$date]);

}
}
