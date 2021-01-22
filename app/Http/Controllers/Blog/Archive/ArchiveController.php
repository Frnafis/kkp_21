<?php

namespace App\Http\Controllers\Blog\Archive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Arsip;

class ArchiveController extends Controller
{
    public function indexNews()
    {
        $arsip = Arsip::orderBy("created_at", "desc")->get();
        $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
    	return view('core.component.archive.news.index', ["arsip" => $arsip, "arsip_foot" => $arsip_foot]);
    }

    public function indexPopular()
    {
        $arsip = Arsip::orderBy("dilihat", "desc")->get();
        $arsip_foot = Arsip::orderBy("created_at", "desc")->get();
    	return view('core.component.archive.popular.index',["arsip"=>$arsip, "arsip_foot"=>$arsip_foot]);
    }
}
