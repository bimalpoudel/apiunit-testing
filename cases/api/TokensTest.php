<?php
/**
 * Generate and Use tokens before actual API is being accessed
 */
class TokenTest extends PHPUnit\Framework\TestCase
{
	private $relay = null;

	public function setup()
	{
		$_GET = array();
		$_POST = array();

		$this->relay = new relay();
		$this->relay->log(true);
	}

	public function testTokenCreate()
	{
		$this->markTestIncomplete();
	}
	
	public function testTokenValidation()
	{
		$this->markTestIncomplete();
	}
}
