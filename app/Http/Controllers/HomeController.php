<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class HomeController extends Controller
{
    public function show_post(Request $request){
         $posts = Post::paginate(4);
         
         return view('home',['posts'=>$posts]);
     }
}
