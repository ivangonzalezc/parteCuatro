<?php
class FiguraGeometrica
{
	protected $color;
	protected $perimetro;
	protected $superficie;

	public function __construct($color, $perimetro, $superficie)
	{
		$this->color = $color;
		$this->perimetro = $perimetro;
		$this->superficie = $superficie;

	}

	public function GetColor()
	{
	   return $this->color;		
	}

	public function SetColor($aux)
	{
	   $this->color = $aux;
	}

	public function Dibujar()
	{

	}

	protected function CalcularDatos()
	{

	}

	public function ToString()
	{

	}



}


?>