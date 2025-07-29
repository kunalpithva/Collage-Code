<?php

	abstract class car
	{
		abstract function name();
	}
	class modle extends car
	{
		public function name()
		{
			echo "BMW Car";
		}
	}
	$obj=new modle();
	$obj->name();

?>	