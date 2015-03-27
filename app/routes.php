<?php

Route::get('/', 'LoginController@login');

Route::get('/index', 'IndexController@index');

Route::get('/cadastrar', function(){
	$user = new user;

	$user->email = "romulo@proesc.com";
	$user->real_name = "Romulo Mendes";
	$user->password = "coringa";

	$user->save();
	
	return "Salvo com sucesso";
});

Route::get('/users', 'UserController@index');