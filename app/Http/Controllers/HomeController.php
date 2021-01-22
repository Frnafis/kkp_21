<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Arsip;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $arsip = Arsip::all();
        $dosen = User::where("role", "dosen")->get();
        $mahasiswa = User::where("role", "mahasiswa")->get();
        $admin = User::where("role", "admin")->get();
        return view('dashboard.home',["arsip"=>count($arsip),"dosen"=>count($dosen),"mahasiswa"=>count($mahasiswa),"admin"=>count($admin)]);
    }
}
