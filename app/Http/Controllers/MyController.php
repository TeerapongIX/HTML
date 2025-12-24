<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    private $myvalue;
    protected $myvalue2 ;
    public $myval = "";
    //constructor
    //myController
    function __construct(){
    }

    function index(){
        return view('Myview.index');
    }

    function info(){
        return view('Myview.info');
    }

    function calculate(Request $req){
        echo $req->input('mynumber');
        $data['num'] = $req->input('mynumber');
        return view('Myview.calculate', $data);
    }

    
}
