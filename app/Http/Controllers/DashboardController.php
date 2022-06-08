<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
             return view('userdash');
        }elseif(Auth::user()->hasRole('administrator')){
             return view('administratordash');
        }elseif(Auth::user()->hasRole('admin')){
         return view('dashboard');
        }
    }
}