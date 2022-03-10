<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function test1(){
        
        // $users = User::all()->toArray();
        // dd($users);
        return view("test1");
    }
    // public function test2($a, $b){
    //     return $a."<br/>".$b;
    // }
}
