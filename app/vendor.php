<?php
/*
	Developer: Joshua Pack
*/

class vendor
{
	private $mysql;
	private $vendorCookie;
	private $cookieTime;

	public function __construct() 
	{
		// make from global MySQL
		$this->mysql = $GLOBALS['mysql'];

		$this->cookieTime = time() + (86400 * 30); // cookieTime defaults to 30 days

		// If cookie exists renew it
		if (isset($_COOKIE['vendor'])) {
			$this->setVendorCookie($_COOKIE['vendor']);
		}
	}

	// returns vendorCookie
	public function getVendorCookie ()
	{
		return $this->vendorCookie;
	}

	// set vendorCookie
	public function setVendorCookie ($newVendorCookie, $cookieTime = 0)
	{
		if ($cookieTime == 0) $cookieTime = $this->cookieTime;
		setcookie('vendorCookie', $newVendorCookie, $cookieTime, "/");
		$this->vendorCookie = $newVendorCookie;
		return true;
	}

	public function deleteVendorCookie () {
		setcookie('vendorCookie', '', time() - 3600);
		$this->vendorCookie = '';
		return true;
	}
}