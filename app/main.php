<?php
/*
	Developer: Joshua Pack
*/

class main
{
	private $mysql;
	public $user;
	public $error;

	public function __construct() 
	{
		// make from global MySQL
		$this->mysql = $GLOBALS['mysql'];
		$this->error = '';
	}

	// returns an array of scripts
	public function addCSS ()
	{
		$CSSArray = array_diff(scandir($GLOBALS['basedir'] . '/css/'), array('..', '.'));
		return $CSSArray;
	}

	// input array of files
	// returns bool
	public function printCSSArray($arr)
	{
		foreach ($arr as $file) {
			if(substr($file, -4) === '.css')
				print '<link rel="stylesheet" type="text/css" href="' . '/css/' . $file . '" />'."\n";
		}
		return true;
	}

	// executes addCSS and printCSSArray
	// returns bool
	public function printCSS ()
	{
		if ($this->printCSSArray($this->addCSS())) {
			return true;
		} else {
			return false;
		}
	}

	// returns an array of scripts
	public function addJS ()
	{
		$JSArray = array_diff(scandir($GLOBALS['basedir'] . '/js/'), array('..', '.'));
		return $JSArray;
	}

	// input array of files
	// returns bool
	public function printJSArray($arr)
	{
		foreach ($arr as $file) {
			if(substr($file, -3) === '.js')
				print '<script type="text/javascript" src="' . '/js/' . $file . '"></script>'."\n";
		}
		return true;
	}

	// executes addJS and printJSArray
	// returns bool
	public function printJS ()
	{
		if ($this->printJSArray($this->addJS())) {
			return true;
		} else {
			return false;
		}
	}

	public function passwordEncrypt ($password)
	{
		return password_hash($password, PASSWORD_DEFAULT, array("cost" => 10));
	}

	public function passwordCheck ($password, $hash)
	{
		return password_verify($password, $hash);
	}

	public function getUser ($email, $password)
	{
		return true;
	}

	public function setUser ($email, $password)
	{
		$password = $this->passwordEncrypt($password);
		$userExists = false;
		$theUser = $this->mysql->query("SELECT * FROM `user` WHERE `email` = '" . $email . "' LIMIT 1;");
		if ($theUser->num_rows > 0) $userExists = true;

		if (!$userExists) {
			$this->mysql->query("INSERT INTO `user` (`email`, `password`) VALUES ('".$email."', '".$password."')");
			return true;
		} else {
			$this->error = 'Email address already registered';
			return false;
		}
	}

	public function loginUser ($email, $password)
	{
		return true;
	}
}