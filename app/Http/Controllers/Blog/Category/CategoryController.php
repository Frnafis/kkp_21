<?php

namespace App\Http\Controllers\Blog\Category;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Arsip;

class CategoryController extends Controller
{
    public function index()
    {
        $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
    	return view('core.component.category.index',["arsip_foot" => $arsip_foot]);
    }
    public function akutansi(){
        $arsip = Arsip::where("kategori", "Akutansi")->orderBy('created_at', "desc")->get();
        $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
        return view('core.component.category.akutansi.index',["arsip_foot" => $arsip_foot, "arsip" => $arsip]);
    }
    public function ekonomi(){
        $arsip = Arsip::where("kategori", "Ekonomi")->orderBy('created_at', "desc")->get();
        $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
        return view('core.component.category.ekonomi.index',["arsip_foot" => $arsip_foot, "arsip" => $arsip]);
    }
    public function kimia(){
        $arsip = Arsip::where("kategori", "Kimia")->orderBy('created_at', "desc")->get();
        $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
        return view('core.component.category.kimia.index',["arsip_foot" => $arsip_foot, "arsip" => $arsip]);
    }
    public function hukum(){
        $arsip = Arsip::where("kategori", "Hukum")->orderBy('created_at', "desc")->get();
        $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
        return view('core.component.category.hukum.index',["arsip_foot" => $arsip_foot, "arsip" => $arsip]);
    }
    public function elektro(){
        $arsip = Arsip::where("kategori", "Elektro")->orderBy('created_at', "desc")->get();
        $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
        return view('core.component.category.elektro.index',["arsip_foot" => $arsip_foot, "arsip" => $arsip]);
    }
    public function mesin(){
        $arsip = Arsip::where("kategori", "Mesin")->orderBy('created_at', "desc")->get();
        $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
        return view('core.component.category.mesin.index',["arsip_foot" => $arsip_foot, "arsip" => $arsip]);
    }
}
