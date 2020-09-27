<?php 

class Animal{
public $family;
public $food;

function __construct($family,$food)
 {
 	$this->family = $family;
 	$this->food = $food;
 } 

 function decl()
 {
 	echo "animal is {$this->family} and food is {$this->food}";
 }
}
class cat extends Animal{
	public function msg(){
		echo "<br>";
		echo $this->food;
	}
}
 $a = new cat("Cat","Milk");


 $a->decl();
 $a->msg();

?>