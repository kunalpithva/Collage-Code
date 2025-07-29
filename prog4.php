<?php

class Course
{
	protected $courseName;
	public function getCourseDetails()
	{
		echo "Course Price : $100"."<br>";
		echo "Course Mode : Offline"."<br>";
	}
}
class OnlineCourse extends Course
{
	public function getCourseDetails()
	{
		echo "Course Price : $50"."<br>";
		echo "Course Mode : Online"."<br>";
	}
	public function displayName()
	{
		$this->courseName="PHP";
		echo "Course Name : ".$this->courseName."<br>";
	}
}
$c=new Course();
$c->getCourseDetails();

$oc=new OnlineCourse();
$oc->getCourseDetails();
$oc->displayName();
?>