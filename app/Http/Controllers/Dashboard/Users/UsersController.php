<?php

namespace App\Http\Controllers\Dashboard\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Hash;

class UsersController extends Controller
{
    public function __construct(){
        $this->middleware(function($request, $next){
            $this->user = \Auth::user();
            if ($this->user->role != "admin"){
                return abort("403");
            }
            return $next($request);
        });
        $this->middleware("auth");
    }
    public function lectureIndex()
    {
        $user = User::where("role", "dosen")->get();
    	return view('dashboard.component.users.lecture.index', ["user"=>$user]);
    }

    public function studentIndex()
    {
        $user = User::where("role", "mahasiswa")->get();
    	return view('dashboard.component.users.student.index', ["user" => $user]);
    }
    public function lectureCreate()
    {
    	return view('dashboard.component.users.lecture.create');
    }

    public function studentCreate()
    {
    	return view('dashboard.component.users.student.create');
    }

    public function lectureEdit($id)
    {
        $user = User::find($id);
    	return view('dashboard.component.users.lecture.edit', ["user"=>$user]);
    }

    public function studentEdit($id)
    {
        $user = User::find($id);
    	return view('dashboard.component.users.student.edit',["user"=>$user]);
    }

    public function lectureStore(Request $req){
        User::create([
            "name" => $req->input('fullname'),
            'email' => $req->input("email"),
            "password" => Hash::make($req->input("password")),
            "role" => "dosen",
        ]);
        return redirect()->route("users.lecture");
    }
    public function studentStore(Request $req){
        User::create([
            "name" => $req->input("name"),
            "email" => $req->input("email"),
            "password" => Hash::make($req->input("password")),
            "role" => "mahasiswa"
        ]);
        return redirect()->route("users.student");
    }
    public function lectureUpdate(Request $req, $id){
        $user = User::find($id);
        $user->name = $req->input("name");
        $user->email = $req->input("email");
        $user->password = Hash::make($req->input("password"));
        $user->save();
        return redirect()->route('users.lecture');
    }
    public function lectureDelete($id){
        $user = User::find($id);
        $user->delete();
        return redirect()->route("users.lecture");
    }
    public function studentUpdate(Request $req, $id){
        $user = User::find($id);
        $user->name = $req->input("name");
        $user->email = $req->input("email");
        $user->password = Hash::make($req->input("password"));
        $user->save();
        return redirect()->route("users.student");
    }
    public function studentDelete($id){
        User::find($id)->delete();
        return redirect()->route("users.student");
    }
}
