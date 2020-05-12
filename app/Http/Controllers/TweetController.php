<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Tweet;

use App\User;

use App\Http\Requests\LinkRequest;

class TweetController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        $tweets = Tweet::paginate(5);
        // $tweets = \App\Tweet::all();
        // $users = $tweets->orderBy('id','desc')->paginate(10);
        return view('index', [
            'Tweets' => $tweets
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $Tweet = new Tweet();
        $Tweet->user_id = $request->user()->id;
        $Tweet->title = $request->title;
        $Tweet->image = $request->image;
        $Tweet->text = $request->text;
        $Tweet->save();
        return redirect('/tweets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $tweet = Tweet::find($id);
        return view('show',[
            "tweet" => $tweet
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $tweet = Tweet::find($id);
        return view('edit',[
            "tweet" => $tweet
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $tweet = Tweet::find($id);
        $tweet->title = $request->title;
        $tweet->image = $request->image;
        $tweet->text = $request->text;
        $tweet->save();
        return redirect('/tweets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tweet = Tweet::find($id);
        $tweet->delete();
        return redirect('/tweets');
    }

    
    public function user($id){
        $user = User::find($id);
        $user->tweets = $user->tweets()->paginate(5);
        return view('user-show', [
            'user' => $user
        ]);
    }
}
