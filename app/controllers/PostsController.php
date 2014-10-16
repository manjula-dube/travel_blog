<?php

class PostsController extends BaseController{

	function show($postID){
		if($post = Post::find($postID)){
			$comments = Comment::where('postid','=',$postID)->get();
			return View::make('viewpost',['post'=>$post, 'comments'=>$comments]);
		}
		
		return Redirect::to('/');
	}
	function edit($postID){
		//Only Admin Should See This OR The user himself.
		return "Trying to edit post ID ".$postID;
	}
	function create(){
		if(Auth::check())
			return View::make('admin.admin');
		else
			return Redirect::to('/login');
	}
	function store() {
		$post = new Post;
		$post->title = Input :: get ('title');
		$post->body = Input :: get ('body');
		$post->save();

		$allPosts = DB::table('posts')->get();

		return "Added";

	}

}