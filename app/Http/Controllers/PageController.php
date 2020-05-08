<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
class PageController extends Controller
{
    public function getHome(){
         $posts= Post::limit(6)->orderBy('id','DESC')->get();
         return view('pages.home')->withPosts($posts);
    }
    public function getBlog(){  
        return redirect()->route('blogs.index');
   }
}
