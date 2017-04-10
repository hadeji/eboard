<?php

class AccountsController {
	//Get all user data and register account
	public function register_account(){
		$f3 = Base::instance();
		//Get all user data from register form
		$firstname = filter_input(INPUT_POST, 'firstname');
		$lastname = filter_input(INPUT_POST, 'lastname');
		$username = filter_input(INPUT_POST, 'username');
		$email = filter_input(INPUT_POST, 'email');
		$confirm_email = filter_input(INPUT_POST, 'confirm_email');
		$password = filter_input(INPUT_POST, 'password');
		$confirm_password = filter_input(INPUT_POST, 'confirm_password');
		//Check if email matches with confirm_email
		if($email != $confirm_email){
			$f3->set('email_error', "Emails do not match.");
			$email_error = $f3->get("email_error");
			return $email_error;
		}
		//Check if password matches with confirm_password
		if($password != $confirm_password){
			$f3->set('password_error', "Passwords do not match.");
		}

	}
}

?>