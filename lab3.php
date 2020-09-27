<?php
interface shape{
	public function getArea();
}

class square implements shape{
	private $width;
	public function __construct($width){
		$this->width = $width;
	}
	public function getArea()
	{
		return $this->width * $this->width;
	}
}

class circle implements shape{
	private $radius;
	public function __construct($radius)
	{
		$this->radius = $radius;
	}
	public function getArea()
	{
		return $this->radius * $this->radius * 3.14;
	}
}
function calcArea(shape $shape)
{
	return $shape->getArea();
}

echo "The area of square is ".calcArea(new square(5));
echo "<br>";
echo "The area of circle is ".calcArea(new circle(7));
?>