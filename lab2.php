<?php 
class Animal{
	public $family;
	public $food;

	function set_family($family){
		$this->family = $family;
	}
	function set_food($food)
	{
		$this->food = $food;
	}

	function get_family()
	{
		return $this->family;
	}

	function get_food()
	{
		return $this->food;
	}
}

$a = new Animal();
// $b = new Animal();

$a -> set_family("cow");
$a -> set_food("grass");

echo $a->get_family() ." ". $a->get_food();



?>