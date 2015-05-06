<?php
/*
	Developer: Joshua Pack
*/

class vendor extends main
{
	private $mysql;
	private $vendorCookie;
	private $cookieTime;

	public function __construct() 
	{
		// not sure why i couldn't inherit parent :(
		$this->mysql = $GLOBALS['mysql'];

		$this->cookieTime = time() + (86400 * 30); // cookieTime defaults to 30 days

		// If cookie exists renew it
		if (isset($_COOKIE['vendorCookie'])) {
			$this->setVendorCookie($_COOKIE['vendorCookie']);
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

	public function deleteVendorCookie ()
	{
		setcookie('vendorCookie', '', time() - 3600);
		$this->vendorCookie = '';
		return true;
	}

	// publisherId int
	// limit int default = 3
	public function getAllZines ($publisherId, $limit = 3) 
	{
		$allZines = $this->mysql->query("SELECT * FROM `zine` WHERE `publisher_id` = '" . $this->mysql->real_escape_string($publisherId) . "' ORDER BY RAND() LIMIT " . $this->mysql->real_escape_string($limit) . ";");

		if ($allZines->num_rows <= 0)
		{
			return false;
		} else {
			return $allZines;
		}
	}

	// zineId int
	public function getZine ($zineId) 
	{
		$theZine = $this->mysql->query("SELECT * FROM `zine` WHERE `id` = '" . $this->mysql->real_escape_string($zineId) . "' LIMIT 1;");

		if ($theZine->num_rows <= 0)
		{
			return false;
		} else {
			return $theZine->fetch_assoc();
		}
	}

	// limit int default = 3
	public function getAllVendors ($limit = 3, $publisherId = 1)
	{
		$allvendors = $this->mysql->query("SELECT * FROM `vendor` WHERE `publisher_id` = '" . $this->mysql->real_escape_string($publisherId) . "' ORDER BY RAND() LIMIT " . $this->mysql->real_escape_string($limit) . ";");

		if ($allvendors->num_rows <= 0)
		{
			return false;
		} else {
			return $allvendors;
		}
	}

	// if id is null look at name
	// id must be int
	// name must be string
	public function getVendor ($id, $url)
	{
		if (($id === null || $id === '') && is_string($url)) {
			$theVendor = $this->mysql->query("SELECT * FROM `vendor` WHERE `url` = '" . $this->mysql->real_escape_string($url) . "' LIMIT 1;");
		} elseif (is_int($id)) {
			$theVendor = $this->mysql->query("SELECT * FROM `vendor` WHERE `id` = '" . $this->mysql->real_escape_string($id) . "' LIMIT 1;");
		} else {
			return false;
		}

		if ($theVendor->num_rows <= 0)
		{
			return false;
		} else {
			return $theVendor->fetch_assoc();
		}
	}

	public function getVendorLocations ($publisherId) {
		if ($allVendors = $this->getAllVendors(25, $publisherId))
		{
			$vendorLocationArray = array();
			$i = 0;
			while ($vendor = $allVendors->fetch_assoc()) {
				$allLocations = $this->mysql->query("SELECT * FROM `locations` WHERE `vendor_id` = '" . $this->mysql->real_escape_string($vendor['id']) . "';");
				if ($allLocations->num_rows > 0) {
					$vendorLocationArray[$i]['vendor'] = $vendor;
					while ($location = $allLocations->fetch_assoc()) {
						$vendorLocationArray[$i]['location'][] = $location;
					}
					$i++;
				}
			}
			if (!empty($vendorLocationArray)) {
				return $vendorLocationArray;
			} else {
				return false;
			}
		} else {
			return false;
		}
	}
}