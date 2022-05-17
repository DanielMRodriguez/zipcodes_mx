<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImportData extends Controller
{
    //

    public function import(Request $request)
    {
        return dd(request()->file("file"));
    }


    
    public function index(Request $request)
    {
        return dd(request()->file("file"));
    }
}
