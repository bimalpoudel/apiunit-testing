<?php
namespace cases\headers;

use endpoints\endpoints;
use \PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
	private $api_url;

	public function setup()
	{
		$_GET = array();
		$_POST = array();

		$this->api_url = (new endpoints())->protected_page;
	}

	public function testOpenPasswordProtectedPage()
	{
		$this->markTestIncomplete();
	}
}
