<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class production extends Model
{
     protected $fillable = [
 'topic','progress','comments','code'
 ];
 protected $hidden = [
 'remember_token',
 ];
}
