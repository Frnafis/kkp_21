<?php

namespace App\Http\Controllers\Blog\Content;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Arsip;
use Auth;

class ContentController extends Controller
{
    public function index($judul){
        $stat = true;
        if (Auth::user()){
            $arsip = Arsip::where("judul",$judul)->first();
            $arsip->dilihat += 1;
            $arsip->save();
            if (isset($arsip)){
                $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
                return view("core.component.archive.content.index",["arsip_foot"=>$arsip_foot, "arsip" => $arsip, "stat" => $stat]);
            }else{
                return redirect("/");
            }
        }else{
            $stat = false;
            $arsip_foot = Arsip::orderBy("created_at", "desc")->take(4)->get();
            return view("core.component.archive.content.index",["arsip_foot"=>$arsip_foot,"stat"=>$stat]);
        }
    }
    public function download($filename){
        $file = public_path()."/assets/arsip/".$filename;
        $headers = array('Content-Type: application/pdf');
        return response()->download($file,$filename,$headers);
    }
}
