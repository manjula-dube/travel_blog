<?php


class Comment extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'comments';

	public function isValid(){
		if(Post::find($this->postid))
			if(strlen($this->name) > 0 && strlen($this->comment))
			{
				return true;
			}
		return false;
	}	

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */

}