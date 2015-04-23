<?php
/*
	Developer: Joshua Pack
*/

class main
{
	private $mysql;

	public function __construct() 
	{
		// make from global MySQL
		$this->mysql = $GLOBALS['mysql'];
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

	public function getUser ()
	{
		
	}

	public function setUser ()
	{
		
	}
}