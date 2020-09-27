<?php
class Phone
{
  public $model;
  public $name;

  function __construct($model,$name)
  {
  	$this->model=$model;
  	$this->name=$name;
  }
  function dec1()
  {
  	echo "the phone model is {$this->model}and the name is {$this->name}";
  }
}

class iphone extends Phone
{
	function msg()
	{
		echo "<br>";
		echo "135000/=";
	}

}
$a =new iphone("iphone","11pro");
$a->dec1();
$a->msg();


?>