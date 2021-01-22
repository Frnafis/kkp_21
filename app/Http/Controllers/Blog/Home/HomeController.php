<?php

namespace App\Http\Controllers\Blog\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Arsip;

class HomeController extends Controller
{
    public function index()
    {
        $arsip = Arsip::orderBy("created_at", "desc")->get();
        $arsip_foot = Arsip::orderBy('created_at', "desc")->take(4)->get();
    	return view('core.welcome',["arsip_foot"=>$arsip_foot, "arsip" =>$arsip]);
    }
}
