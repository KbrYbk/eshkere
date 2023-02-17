<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class tovar extends Controller
{
    public function about(){
        $p=\App\Models\tovar::OrderBy('id','desc')->get();
        return view ('about', ['prod'=>$p]);
    }
}
