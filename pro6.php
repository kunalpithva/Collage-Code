<?php
class Book 
{
	public $title,$author,$year;
	
	public function setTitle($title)
	{
		$this->title=$title;
		return $this;
	}
	public function setAuthor($author)
	{
		$this->author=$author;
		return $this;
	}
	public function setYear($year)
	{
		$this->year=$year;
		return $this;
	}
	public function getDetails()
	{
		echo "Book Title : ".$this->title."<br>";
		echo "Book Author : ".$this->author."<br>";
		echo "Book Year : ".$this->year;
	}
}
$obj=new Book();
$obj->setTitle("Harry Poter")->setAuthor("John Michel")->setYear(2002)->getDetails();
?>