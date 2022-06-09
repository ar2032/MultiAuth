<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Auth;
use App\Models\Post;

class DashboardController extends Controller
{
    public function index()
    {
        if(Auth::user()->hasRole('user')){
            $posts = DB::select('select * from office');
            return view('userdash',['posts'=>$posts]);
        }elseif(Auth::user()->hasRole('administrator')){
            $posts = Post::all();
            return view('administratordash',['posts'=>$posts]);
        }elseif(Auth::user()->hasRole('admin')){
         return view('dashboard');
        }
    }
}
