<?php


class User extends Eloquent
{
	public function set_password($string)
	{
		$this->set_attribute('password', Hash::make($string));
	}

}