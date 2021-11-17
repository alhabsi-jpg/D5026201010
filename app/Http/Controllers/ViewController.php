<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ViewController extends Controller
{
    function uts1(){
        return view('uts');
    }
    function tugas5html(){
        return view('tugas5html');
    }
    function tugas5php(){
        return view('tugas5php');
    }
}
