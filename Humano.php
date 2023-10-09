<?php

class Operaciones 
{
	private $valor1;
	private $valor2;	

	/*
	 Get the value of valor1
	 
	public function getValor1()
	{
		return $this->valor1;
	}

	
	 Set the value of valor1
	 
	public function setValor1($valor1): self
	{
		$this->valor1 = $valor1;

		return $this;
	}

	
	 Get the value of valor2
	 
	public function getValor2()
	{
		return $this->valor2;
	}

	
	Set the value of valor2
	 
	public function setValor2($valor2): self
	{
		$this->valor2 = $valor2;

		return $this;
	}
	*/

	public function cargar1($valor1)
	{
		$this->$valor1=$valor1;
		return $valor1;
	}

	public function cargar2($valor2)
	{
		$this->$valor2=$valor2;
		return $valor2;
	}

}

//Clase Suma

class Suma extends Operaciones
{
	public function operacion($valor1,$valor2)
	{
		$valor1 = $valor1;
		$valor2 = $valor2;
		return $valor1 + $valor2;
	}
}

//Clase Resta

class Resta extends Operaciones
{
	public function operacion($valor1,$valor2)
	{
		$valor1 = $valor1;
		$valor2 = $valor2;
		return $valor1 - $valor2;
	}
}

//Clase Multiplicacion

class Multiplicacion extends Operaciones
{
	public function operacion($valor1,$valor2)
	{
		$valor1 = $valor1;
		$valor2 = $valor2;
		return $valor1 * $valor2;
	}
}

//Clase División

class Division extends Operaciones
{
	public function operacion($valor1,$valor2)
	{
		$valor1 = $valor1;
		$valor2 = $valor2;
		return $valor1 / $valor2;
	}
}

?>