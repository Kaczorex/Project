<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    function __construct(){
    	 setlocale(LC_TIME, 'Polish'); // or     setlocale(LC_TIME,"pl_PL.UTF-8");    if are some trouble

    	 //y y i was here :) why you are so suprised? i will code better and better, someday i will the best :) just hire me and we can do better stuff than alone
    }
}
