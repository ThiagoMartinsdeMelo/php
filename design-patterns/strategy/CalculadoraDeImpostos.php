<?php

class CalculadoraDeImpostos
{
	public function calculaICMS(Orcamento $orcamento, Imposto $estrategiaDeImposto)
	{

		$resultado = $estrategiaDeImposto->calcula($orcamento);
		return $resultado;
		
	}
}