<?php
interface Shape
{
public function getarea();

}
class Square implements Shape
{
	private $width;

	function __construct($width)
	{
		$this->width=$width;
	}

	public function getarea()
	{
	return $this->width * $this->width;
	}
}
class Circle implements Shape
{
	private $radius;

	function __construct($radius)
	{
		$this->radius=$radius;
	}

	public function getarea()
	{
	return ($this->radius * $this->radius)*3.14;
	}
}

function dis(Shape $shape)
{
	return $shape->getarea();
}

echo "area of square is " .dis(new Square(5));
echo "<br>";
echo "area of Circle is " .dis(new Circle(7));
?>