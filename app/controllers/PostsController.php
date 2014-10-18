<?php

class PostsController extends BaseController{

    
	function show($postID){
		if($post = Post::find($postID)){
			$comments = Comment::where('postid','=',$postID)->get();
			return View::make('viewpost',['post'=>$post, 'comments'=>$comments]);
		}
		
		return Redirect::to('/');
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


	   return Redirect::to('/');
	}

}