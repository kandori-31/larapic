<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

use App\Comment;

class CommentController extends Controller
{
    public function store(Request $request,$id){
        $comment = new Comment();
        $comment->user_id = $request->user()->id;
        $comment->tweet_id = $id;
        $comment->text = $request->text;
        $comment->save();
        return back()->withInput();
    }
}
