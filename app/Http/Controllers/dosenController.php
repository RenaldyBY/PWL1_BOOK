<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dosenController extends Controller
{
    public function index(){
        $data = ["Layung","giga Chad","Dr,Zakir"];
        return view('dosen',['nama'=> $data]);
    }
}
