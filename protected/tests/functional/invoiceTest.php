<?php

class invoiceTest extends WebTestCase
{
	public $fixtures=array(
		'invoices'=>'invoice',
	);

	public function testShow()
	{
		$this->open('?r=invoice/view&id=1');
	}

	public function testCreate()
	{
		$this->open('?r=invoice/create');
	}

	public function testUpdate()
	{
		$this->open('?r=invoice/update&id=1');
	}

	public function testDelete()
	{
		$this->open('?r=invoice/view&id=1');
	}

	public function testList()
	{
		$this->open('?r=invoice/index');
	}

	public function testAdmin()
	{
		$this->open('?r=invoice/admin');
	}
}
