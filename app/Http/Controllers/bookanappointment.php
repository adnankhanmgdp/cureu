<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class bookanappointment extends Controller
{
    //
    function appointment(Request $req)
    {
        return $req->input();
    }
}
