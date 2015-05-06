<?php
/*
	Developer: Joshua Pack
*/

class publisher extends main
{
	private $mysql;
	private $publisherCookie;
	private $cookieTime;

	public function __construct() 
	{
		// not sure why i couldn't inherit parent :(
		$this->mysql = $GLOBALS['mysql'];

		$this->cookieTime = time() + (86400 * 30); // cookieTime defaults to 30 days

		// If cookie exists renew it
		if (isset($_COOKIE['publisherCookie'])) {
			$this->setPublisherCookie($_COOKIE['publisherCookie']);
		} else {
			$this->setPublisherCookie('1');
		}
	}

	// returns publisherCookie
	public function getPublisherCookie ()
	{
		return $this->publisherCookie;
	}

	// set publisherCookie
	public function setPublisherCookie ($newPublisherCookie, $cookieTime = 0)
	{
		if ($cookieTime == 0) $cookieTime = $this->cookieTime;
		setcookie('publisherCookie', $newPublisherCookie, $cookieTime, "/");
		$this->publisherCookie = $newPublisherCookie;
		return true;
	}

	public function deletePublisherCookie ()
	{
		setcookie('publisherCookie', '', time() - 3600);
		$this->publisherCookie = '';
		return true;
	}

	// limit int default = 3
	public function getAllPublishers ($limit = 3)
	{
		$allpublishers = $this->mysql->query("SELECT * FROM `publisher` ORDER BY RAND() LIMIT " . $this->mysql->real_escape_string($limit) . ";");

		if ($allpublishers->num_rows <= 0)
		{
			return false;
		} else {
			return $allpublishers;
		}
	}
	public function getPublisherByCookie() {
		if (isset($_COOKIE['publisherCookie'])) {
			return $this->getPublisher(intval ($_COOKIE['publisherCookie']));
		} else {
			return $this->getPublisher(1);
		}
	}

	public function getPublisher ($id)
	{
		if (is_int($id)) {
			$thePublisher = $this->mysql->query("SELECT * FROM `publisher` WHERE id = '" . $this->mysql->real_escape_string($id) . "' LIMIT 1;");
		} else {
			return false;
		}

		if ($thePublisher->num_rows <= 0)
		{
			return false;
		} else {
			return $thePublisher->fetch_assoc();
		}
	}
}