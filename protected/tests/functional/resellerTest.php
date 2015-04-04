<?php

class resellerTest extends WebTestCase
{
	public $fixtures=array(
		'resellers'=>'reseller',
	);

	public function testShow()
	{
		$this->open('?r=reseller/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=reseller/create');
	}

	public function testUpdate()
	{
		$this->open('?r=reseller/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=reseller/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=reseller/index');
	}

	public function testAdmin()
	{
		$this->open('?r=reseller/admin');
	}
}
