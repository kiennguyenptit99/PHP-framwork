<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    //
    public function index(){
        return view("backend/index");
    }
    public function logout(){   // lab7 session middleware
        Auth::logout();            // lab10 Auth & Form Request
        // $request->session()->forget("email");
        return redirect("/login");
    }
}
