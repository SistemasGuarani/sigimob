<?php

class LoginController extends BaseController {

	public function login()
	{
		return View::make('layouts.login');
	}

}