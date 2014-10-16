<?php


class Comment extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	public $errors = "";

	public function isValid(){
		if(Post::find($this->postid))
			if(!strlen($this->name) > 0 )
			{
				$this->errors = "Please enter a name.";
				return false;
			}
			if(!strlen($this->comment) > 0)
			{
				$this->errors = "Please enter a comment.";
				return false;
			}
		return true;
	}	

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}