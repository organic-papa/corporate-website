<?php

class UserDataTest extends TestCase {

	public function testContactInquiryByKey()
	{
		$this->assertEquals(1, User::entryPathwayByName('fb'));
		$this->assertEquals(2, User::entryPathwayByName('marche'));
		$this->assertEquals(-1, User::entryPathwayByName('invalid name'));
	}
}
