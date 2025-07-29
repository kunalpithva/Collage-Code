<?php

class Person
{
	public $name,$age;
	public function display()
	{
		echo "Name : ".$this->name."<BR>";
		echo "Age : ".$this->age."<BR>";
	}
}
class Employee extends Person
{
	public $employeeId;
	public function displayEmployee()
	{
		echo "Employee Id : ".$this->employeeId."<BR>";
	}
	
}
class TeamLeader extends Employee
{
	public $teamSize;
	public function displayTeamLeader()
	{
		echo "Team Size : ".$this->teamSize."<BR>";
	}
}

$obj=new TeamLeader();
$obj->name="Kunal";
$obj->age=20;
$obj->teamSize=5;
$obj->employeeId=82321;
$obj->display();
$obj->displayTeamLeader();
$obj->displayEmployee();

?><?php

class Person
{
	public $name,$age;
	public function display()
	{
		echo "Name : ".$this->name."<BR>";
		echo "Age : ".$this->age."<BR>";
	}
}
class Employee extends Person
{
	public $employeeId;
	public function displayEmployee()
	{
		echo "Employee Id : ".$this->employeeId."<BR>";
	}
	
}
class TeamLeader extends Employee
{
	public $teamSize;
	public function displayTeamLeader()
	{
		echo "Team Size : ".$this->teamSize."<BR>";
	}
}

$obj=new TeamLeader();
$obj->name="Kunal";
$obj->age=20;
$obj->teamSize=5;
$obj->employeeId=82321;
$obj->display();
$obj->displayTeamLeader();
$obj->displayEmployee();

?>