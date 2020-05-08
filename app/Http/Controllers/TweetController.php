<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Tweet;
use App\Http\Requests\TweetRequest;

class TweetController extends Controller
{
    public function submit(TweetRequest $request){
        $Tweet = new Tweet();
        $Tweet->title = $request->title;
        $Tweet->image = $request->image;
        $Tweet->text = $request->text;
        $Tweet->save();
        return redirect('/');
    }
}
