<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\URL;
use App\Models\Magazine;

class MagazineController extends Controller
{
    function Create()
    {
    	return view('create');
    }

    public function Update(Request $request)
    {

        $dir = 'Magazine/';
        $path = 'storage' . DIRECTORY_SEPARATOR .'app'. DIRECTORY_SEPARATOR.'public'. DIRECTORY_SEPARATOR. $dir;

            $fornt = $request->front;
            $fornt->move($path, $fornt->getClientOriginalName());
            $front_img = $path.'/'.$fornt->getClientOriginalName();

    	$details = Magazine::create([
    		'name' => $request->name,
    		'image' => $front_img,
    		'price' => $request->price,
    		'frequency' => $request->frequency,
    	]);

    	return redirect('magazinelist')->with('response', 'Your Kyc has been uploaded,please wait for admin approval');

    }

    public function List()
    {
    	$list = Magazine::orderBy('id','DESC')->get();
    	return view('list')->with('lists',$list);
    }
}
