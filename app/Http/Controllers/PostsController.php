<?php

namespace App\Http\Controllers;

use App\Post;
use Carbon\Carbon;

class PostsController extends Controller {
    function __construct()
    {
        $this->middleware('auth')->except(['index','show']);
    }

    public function index() {
	    $posts = Post::latest();

	    if($month = request('month')){
            $posts->whereMonth('created_at', Carbon::parse($month)->month);
        }

        if($year = request('year')){
            $posts->whereYear('created_at', $year);
        }

        $posts = $posts->get();
		return view('posts.index',[
		    'posts' => $posts,
        ]);
	}
	public function show(Post $post) {


		return view('posts.show',[
		    'post'  => $post,
        ]);
	}
	public function create() {

		return view('posts.create');
	}
    public function store() {

        $this->validate(request(),[
            'title' =>  'required',
            'body'  =>  'required'
        ]);
        Post::create([
            'title' => request('title'),
            'body'  => request('body'),
            'user_id' => auth()->id()
        ]);

        return redirect('/');
    }
}
