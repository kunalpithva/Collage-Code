<?php
class bank
{
	public $bnname;
	public function bankName()
	{
		$this->bnname="ICICI Bank";
	}
}
class dept extends bank
{
	public $deptname;
	public function deptName($name)
	{
		$this->deptname=$name;
	}
}
class emp extends dept
{
	public $empname;
	public function empName($name)
	{
		$this->empname=$name;
	}
	public function show()
	{
		echo "Bank Name : ".$this->bnname."<br>";
		echo "Department Name : ".$this->deptname."<br>";
		echo "Employee Name : ".$this->empname."<br>";
	}
}
$obj=new emp;
$obj->bankName();
$obj->deptName("Abc");
$obj->empName("Kunal");
$obj->show();
?>