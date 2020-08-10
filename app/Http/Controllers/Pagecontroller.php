<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Magazine;

class Pagecontroller extends Controller
{
    public function Home()
    {
    	$list = Magazine::get();
    	return view('welcome')->with('lists',$list);
    }
}
