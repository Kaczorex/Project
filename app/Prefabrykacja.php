<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Prefabrykacja extends Model
{
    
        protected $fillable = [
        'company' ,
        'product' ,
        'many' ,   
        'reciveData',
        'notes'  
    ];

        protected $hidden = [
       'remember_token',
    ];
}
