<?php

class HomeController {
	//Render home.php
	public function home(){
		echo \Template::instance()->render('home.php');
	}
	//Render register.php
	public function register(){
		echo \Template::instance()->render('register.php');
	}
}

?>