<?php
class Triangulo extends FiguraGeometrica
{
	private $altura;
	private $base;

	public function __construct($a,$b)
	{
		$this->altura = $a;
		$this->base = $b;
	}

	public function ToString()
	{
		echo "Altura: ".$this->altura;
		echo "Base: ".$this->base;
	}
}

?>