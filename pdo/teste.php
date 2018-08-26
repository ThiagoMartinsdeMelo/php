<?php

function somaElementos($numbers = null)
{
	$sum = 0;
	for ($i = 0; $i < count($numbers); $i++) {
		$sum = $sum + $numbers[$i];
	}

	return $sum;
}

$numbers = array(10, 20, 40, 50, 60);

$total = somaElementos($numbers);

echo $total;

