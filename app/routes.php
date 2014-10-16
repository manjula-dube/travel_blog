<?php

Route::get('/',function()
{
	//return User::all();
	return View::make('hello');
	
});

Route::Resource('users', 'UsersController');
Route::Resource('posts', 'PostsController');
Route::Resource('comments', 'CommentsController');