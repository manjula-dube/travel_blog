<?php

class PostsController extends BaseController{

	function show($postID){
		if($post = Post::find($postID))
			return View::make('viewpost',['post'=>$post]);
		
		return Redirect::to('/');
	}
	function edit($postID){
		//Only Admin Should See This OR The user himself.
		return "Trying to edit post ID ".$postID;
	}
	function create(){
		return View::make('admin.admin');
	}
	function store() {
		$post = new Post;
		$post->tittle = Input :: get ('title');
		$post->body = Input :: get ('body');
		$post->save();

		$allPosts = DB::table('posts')->get();

		//return $allPosts;

		return View::make('admin.allpost');

		//Redirect::route('posts.index');
	}

	function index(){ 
		//Only Admin Should See This.
		return View::make('blog.blog');
	}
/*
	function show(){
		$allPosts = DB::table('posts')->get();
		return $allPosts;
	}

	function edit($postID){
		//Only Admin Should See This OR The user himself.
		return "Trying to edit post ID ".$postID;
	}

	function create(){
		return View::make('admin.admin');
	}

	function store() {
		$post = new Post;
		$post->tittle = Input :: get ('title');
		$post->body = Input :: get ('body');
		$post->save();

		$allPosts = DB::table('posts')->get();

		//return $allPosts;lets do some example

		return View::make('admin.allposts');

		//Redirect::route('posts.index');
	}
*/
}