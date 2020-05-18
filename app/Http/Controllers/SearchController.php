<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function index(Request $request){
        $keyword = $request->input('keyword');
        $tweets = DB::table('tweets')
        ->where('text', 'like', '%'.$keyword.'%')
        ->paginate(5);
        return view('search.index',[
            'tweets' => $tweets,
            'keyword' => $keyword,
            ]);
    
    }
}
