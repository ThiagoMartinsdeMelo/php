<?php

	require "Imposto.php";
	require 'CalculadoraDeImpostos.php';
	require "Orcamento.php";
	require "ICCC.php";


	$reforma = new Orcamento(500);
	$novoImposto = new ICCC();

	echo $novoImposto->calcula($reforma);