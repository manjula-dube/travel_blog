<?php

class CommentsController extends BaseController{

	function store() {

		$comment = new Comment;
		$comment->postid = Input :: get ('postid');
		$comment->name = Input :: get ('name');
		$comment->comment = Input :: get ('comment');
		if($comment->isValid()){
			$comment->save();
			return $comment;
		}
		return "The comment is not valid";

		//Redirect::route('posts.index');
	}

}