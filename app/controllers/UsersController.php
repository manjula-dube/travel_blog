<?php

class UsersController extends BaseController{
	function index(){
		//Only Admin Should See This.
		return "List of all Users.";
	}
	function show($username){
		//Only Admin Should See This OR The user himself..
		return "Details of ".$username;
	}
	function edit($username){
		//Only Admin Should See This OR The user himself.
		return "Trying to edit ".$username;
	}
	function create(){
		return View::make('users.signup');
	}
	function store() {

		$validation = Validator::make(Input::all(), User::$rules);

		if($validation->fails()) {
			return Redirect::back()->withInput()->withErrors($validation->messages());
		}

		$user = new User;
		$user->username = Input :: get ('username');
		$user->password = Hash::make(Input :: get ('password'));
		$user->save();

		return "Account Created. You can now login.";
	}

}