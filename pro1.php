<?php

	class Student
	{
		public $name,$rollno,$grade,$mark1,$mark2,$mark3,$total,$Percantage;
		
		public function __construct($name,$rollno,$mark1,$mark2,$mark3)
		{
			$this->name=$name;
			$this->rollno=$rollno;
			$this->mark1=$mark1;
			$this->mark2=$mark2;
			$this->mark3=$mark3;
		}
		
		public function getDetails()
		{
			$this->total=$this->mark1+$this->mark2+$this->mark3;
			$this->Percantage=$this->total/3;
			if ($this->Percantage>80)
			{
				$this->grade="A";
			}
			elseif ($this->Percantage>70)
			{
				$this->grade="B";
			}
			elseif ($this->Percantage>60)
			{
				$this->grade="C";
			}
			else
			{
				$this->grade="Fail";
			}
			echo "Name : ".$this->name;
			echo "<br>Roll No. : ".$this->rollno;
			echo "<br>Mark 1 : ".$this->mark1;
			echo "<br>Mark 2: ".$this->mark2;
			echo "<br>Mark 3: ".$this->mark3;
			echo "<br>Total : ".$this->total;
			echo "<br>Percantage : ".($this->Percantage);
			echo "<br>Grade : ".$this->grade;
		}
		public function checkResult()
		{
			if($this->Percantage>40)
			{
				echo "<br>Result : Pass";
			}
			else
			{
				echo "<br>Result : Fail";
			}
		}
	}
	$obj=new Student("Kunal",41,80,87,92);
	$obj->getDetails();
	$obj->checkResult();
?>