<?php
 class Rectangulo extends FiguraGeometrica
{
	private $ladoUno;
	private $ladoDos;

	public function __construct($lUno,$lDos)
	{
		$this->ladoUno = $lUno;
		$this->ladoDos = $lDos;
	}

	public function ToString()
	{
		
	}
}

?>