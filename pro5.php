<?php
class TemperatureConverter 
{
	public static function celsiusToFahrenheit($celsius) 
	{
		echo "Celsius to Fahrenheit : ".(9/5 * $celsius)."<br>";
	}
	public static function fahrenheitToCelsius($fahrenheit)
	{
		echo "Fahrenheit to Celsius : ".($fahrenheit - 32) * 5/9;
	}
}
$obj=new TemperatureConverter();
$obj->celsiusToFahrenheit(50);
$obj->fahrenheitToCelsius(100);
?>