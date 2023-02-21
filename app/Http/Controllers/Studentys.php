<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Studentys extends Controller
{
    public function stud(){
        $p=\App\Models\Studenty::OrderBy('id','desc')->get();
        return view ('studenty93', ['prod'=>$p]);
    }
}
