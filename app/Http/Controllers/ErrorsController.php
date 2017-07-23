<?php

namespace App\Http\Controllers;

use App\errors;
use Illuminate\Http\Request;

class ErrorsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function noPermissions()
    {
            return view('errors.noPermissions');
        
    }


  
}
