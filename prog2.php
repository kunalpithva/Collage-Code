<?php

class Employee
{
	public $name ,$salary;
	public function display()
	{
		echo "Name : ".$this->name."<br>";
		echo "Salary : ".$this->salary."<br>";
	}
}

class Manager extends Employee
{
	public $department;
	public function displayManager()
	{
		echo "Name : ".$this->name."<br>";
		echo "Salary : ".$this->salary."<br>";
		echo "Department Name : ".$this->department."<br>";
	}
}

class Developer extends Employee
{
	public $programmingLanguage;
	public function displayDeveloper()
	{
		echo "Name : ".$this->name."<br>";
		echo "Salary : ".$this->salary."<br>";
		echo "Programming Language : ".$this->programmingLanguage."<br>";
	}
}

$obj=new Developer();
$obj->name="Zala";
$obj->salary=200000;
$obj->programmingLanguage="C#";
$obj->displayDeveloper();

?>