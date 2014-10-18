<?php

//Route to install 
Route::get('/install',function(){

	if(count(User::where('username','=','admin')->get()))
		return "Already Installed.";

	$user = new User;
	$user->username = "admin";
	$user->password = Hash::make('password');
	$user->save();

	return "Admin created with standard username and password.";
});

Route::get('/',function()
{
	//We are getting the values in decending order since we need to show the latest post at the top the admin posted
    $posts = Post::orderBy('id', 'DESC')->get();
	return View::make('allposts', ['posts' => $posts]);
	
});

Route::get('/create', 'PostsController@create');
Route::get('/login', 'SessionsController@create');
Route::get('/logout', 'SessionsController@destroy');
Route::get('/view/{postid}', 'PostsController@show');

//Route::Resource('users', 'UsersController');
Route::Resource('sessions', 'SessionsController');
Route::Resource('posts', 'PostsController');
Route::Resource('comments', 'CommentsController');