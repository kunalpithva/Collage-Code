<?php

	interface pay
	{
		public function payNow();
	}
	class axix implements pay
	{
		public $amount;
		public function payNow()
		{
			echo "Payment Successfull by Axix Bank of ".$this->amount;
		}
	}
	$obj=new axix();
	$obj->amount=10000;
	$obj->payNow();

?>