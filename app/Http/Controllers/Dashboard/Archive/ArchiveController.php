<?php

namespace App\Http\Controllers\Dashboard\Archive;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Arsip;
use Carbon\Carbon;
use Spatie\PdfToImage\Pdf;

class ArchiveController extends Controller
{
    public function __construct()
    {
        $this->middleware(function($request, $next){
            $this->user = \Auth::user();
            if ($this->user->role != "admin"){
                return abort("403");
            }
            return $next($request);
        });
        $this->middleware('auth');
    }

    public function index()
    {
        $arsip = Arsip::all();
        return view('dashboard.component.archive.index', ["arsip" => $arsip]);
    }

    public function create()
    {
        $now = Carbon::now();
        return view('dashboard.component.archive.create',[ "now" => $now->format('Y-m-d')]);
    }

    public function edit($id)
    {
        $arsip = Arsip::find($id);
        return view('dashboard.component.archive.edit', ['arsip'=>$arsip]);
    }

    public function store(Request $req){
        $dokumen = $req->file("dokumen");
        $dokumen->move("assets/arsip", $dokumen->getClientOriginalName());
        $pdf = new Pdf("assets/arsip/".$dokumen->getClientOriginalName());
        $pdf->saveImage("assets/arsip/thumbnail/".pathinfo($dokumen->getClientOriginalName(), PATHINFO_FILENAME).".jpg");
        Arsip::create([
            "judul" => $req->input("judul"),
            "deskripsi" => $req->input("deskripsi"),
            "dokumen" => $dokumen->getClientOriginalName(),
            'kategori' => $req->input("kategori"),
            'dilihat' => 0,
        ]);
        return redirect()->route("archive");
    }
    public function update(Request $req, $id){
        if($req->hasfile("dokumen")){
            $arsip = Arsip::find($id);
            $dokumen = $req->file("dokumen");
            \File::delete('assets/arsip/'.$arsip->dokumen);
            $dokumen->move("assets/arsip", $dokumen->getClientOriginalName());
            $arsip->judul = $req->input("judul");
            $arsip->deskripsi = $req->input("deskripsi");
            $arsip->dokumen = $dokumen->getClientOriginalName();
            $arsip->kategori = $req->input("kategori");
            $arsip->save();
            return redirect()->route('archive');
        }else{
            $arsip = Arsip::find($id);
            $arsip->judul = $req->input("judul");
            $arsip->deskripsi = $req->input("deskripsi");
            $arsip->kategori = $req->input("kategori");
            $arsip->save();
            return redirect()->route("archive");
        }
    }
    public function delete($id){
        Arsip::find($id)->delete();
        return redirect()->route('archive');
    }
}
