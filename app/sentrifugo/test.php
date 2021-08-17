<?php
use PHPUnit\Framework\TestCase;

class testGet extends TestCase
{
	public function testgetPHPVersion()
	{
	  $this->assertStringContainsString("5.3", getPHPVersion());
	}
}
?>