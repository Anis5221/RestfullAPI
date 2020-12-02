<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    
    public function view(){

        return view('auth\register');
    }

    public function insert (Request $r){

        return User::create($r->all());
    }
}
