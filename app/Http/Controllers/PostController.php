<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Post;
use App\User;
use App\Category;
use Storage;
class PostController extends Controller
{
    
    public function index(){
        $posts = Post::all()->where('user_id' ,Auth::user()->id);
        return view('posts.index')->withPosts($posts);
    }

    public function create(){
        return view('posts.create');
    }
    public function store(Request $request){

       //for moving image to public folder
        $file = $request->file('image');
        $extension = $file->getClientOriginalExtension();
        $filename = time() . '.' .  $extension;
        $file->move('image' ,$filename);

        $post =  new Post();
        $post->user_id = Auth::user()->id;
        $post->title =$request->input('title'); 
        $post->content =$request->input('content'); 
        $post->image = $filename;
        $post->save();

        $posts = Post::all()->where('user_id' ,Auth::user()->id);
        return redirect()->route('posts.index')->withPosts($posts);
    }

    public function show($id){
        $post = Post::find($id);
        return view('posts.show')->withPost($post);
    }
    public function edit($id){
        $post = Post::find($id);
        return view('posts.edit')->withPost($post);
       
    }
    public function update(Request $request, $id){
        $post = Post::find($id);
        $post->title = $request->input('title');
        $post->content = $request->input('content');
        $file = $request->file('image');
        if ($request->hasFile('image')) {
          
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' .  $extension;
            $file->move('image' ,$filename);
            $post->image = $filename;
        }
        $post->save();
        return view('posts.show')->withPost($post);
    }

    public function destroy($id){
        $post = Post::find($id);
        $post->delete();

        $posts = Post::all()->where('user_id' ,Auth::user()->id);
        return redirect()->route('posts.index')->withPosts($posts);
       
    }

}
