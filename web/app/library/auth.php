<?php

use JeremyKendall\Password\PasswordValidator as Validator;

class Auth {

	protected $username;
	protected $password;
	public $user;


	public function attempt($username, $password)
	{

		if( $this->checkUser($username) ){

			if( $this->checkPassword($username, $password) ){
				return true;
			}
			return false;
		}else{
			return false;
		}

		return false;

	}

	public function checkUser($user)
	{

		if($user){
			return $user;
		}

		return false;

	}

	public function checkPassword($username, $password)
	{

		$validator = new Validator;

		$user = Users::findFirstByUsername($username);

		// Check that password supplied matches the password in the database for that user
        $varified = $validator->isValid($password, $user->password);

        if($varified->isValid()){
        	return true;
        }

        return false;

	}

}
