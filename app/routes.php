<?php

Route::get('/',function()
{
    $posts = Post::all();
	return View::make('allposts', ['posts' => $posts]);
	
});

Route::get('/create', 'PostsController@create');
Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/view/{postid}', 'PostsController@show');
Route::get('/install',function(){

	if(count(User::where('username','=','admin')->get()))
		return "Already Installed.";

	$user = new User;
	$user->username = "admin";
	$user->password = Hash::make('password');
	$user->save();

	return "Admin created with standard username and password.";
});

//Route::Resource('users', 'UsersController');
Route::Resource('sessions', 'SessionsController');
Route::Resource('posts', 'PostsController');
Route::Resource('comments', 'CommentsController');