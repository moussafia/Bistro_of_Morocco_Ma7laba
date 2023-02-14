<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CheckStatus extends Controller
{
    public function index(){
        $role=Auth::user()->status;
        if($role==0){
            return redirect()->route('user');
        }
        else{
           return redirect()->route('dashboard');
        }
        
    }
}
