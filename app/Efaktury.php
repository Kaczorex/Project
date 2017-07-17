<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Efaktury extends Model
{
    

 protected $fillable = [
 'producer',
'nip',
'start_date',
'address'];
 protected $hidden = [
 'remember_token',
 ];


}
