<?php
class Vehicle 
{
	public $brand,$model;
	
	public function vehicleDetails($brand,$model)
	{
		echo "Car Brand : ".$this->brand=$brand."<br>";
		echo "Car Model : ".$this->model=$model."<br>";
	}
}
class Car extends Vehicle
{
	public $fuelType;
	
	public function show($fuelType)
	{
		echo "Car FuleType : ".$this->fuelType=$fuelType;
	}
}

$obj=new Car();
$obj->vehicleDetails("Toyota","Camery");
$obj->show("Petrol");
?>