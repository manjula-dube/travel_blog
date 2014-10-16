<?php

class CommentsController extends BaseController{

	function store() {

		$comment = new Comment;
		$comment->postid = Input :: get ('postid');
		$comment->name = Input :: get ('name');
		$comment->comment = Input :: get ('comment');
		if($comment->isValid()){
			$comment->save();
			$response = $comment;
			$response->status = "success";
			return $comment;
		}
		return ["error" => $comment->errors,"status"=>"failed"];

		//Redirect::route('posts.index');
	}

}