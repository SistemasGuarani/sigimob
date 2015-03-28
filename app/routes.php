<?php

Route::get('/', 'LoginController@login');

Route::get('/index', 'IndexController@index');

Route::get('/localizar', 'LocalizarController@localizar');

Route::get('/cadastrar', function(){
	$user = new User;

	$user->email = "teste@proesc.com";
	$user->real_name = "Romulo Mendes";
	$user->password = "teste";

	$user->save();

	return "Salvo com sucesso";
});

Route::get('/users', 'UserController@index');