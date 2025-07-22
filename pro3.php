<?php

class Product
{
    public $name,$price,$quantity,$category;

    public function __construct($name,$price,$quantity,$category)
    {
        $this->name = $name;
        $this->price = $price;
        $this->quantity = $quantity;
        $this->category = $category; 
    }
    public function getProductInfo()
    {
        echo "Product Name: " . $this->name;
        echo "<br>Price: " .$this->price;
        echo "<br>Quantity: " .$this->quantity;
        echo "<br>Category: " .$this->category;
    }
    public function updateQuantity($amount)
    {
        $this->quantity = $this->quantity + $amount;
    }
    public function isInStock()
    {
        if($this->quantity>0)
        {
            echo "<br>In Stock";
        }
        else
        {
            echo "<br>Not In Stock";
        }
    }
    public function applyDiscount($percent)
    {
        $this->price=$this->price-($this->price*$percent)/100;
        echo "<br>Disconted Price : $this->price";
    }
    public function restock($amount)
    {
        $this->quantity = $this->quantity+$amount;
        echo "<br>Restored : $this->quantity";
    }
}
$obj=new Product("Brush",50,75,"A");
$obj->getProductInfo();
$obj->updateQuantity(5);
$obj->isInStock();
$obj->applyDiscount(10);
$obj->restock(20);

?>