<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Comment;
class CommentController extends Controller
{
    public function store(Request $request)
    {
        $comment = new Comment();
        $post= $request->input('idPost');
        $comment->post_id = $request->input('idPost');
        $comment->user_id = $request->input('idUser');
        $comment->comment = $request->input('comment');
        $comment->save();

        return redirect()->route('blogs.show', $request->input('idPost'));

    }
}
