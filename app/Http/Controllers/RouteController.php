<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RouteController extends Controller
{
    function create(Request $request){
        dd($request->file);
    }
}
