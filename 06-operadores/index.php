<?php
	
	//Operadores aritmeticos
	$numero1 = 55;
	$numero2 = 33;

	echo 'Suma: '.($numero1 + $numero2).'</br>';
	echo 'Resta: '.($numero1 - $numero2).'</br>';
	echo 'Mutiplicacion: '.($numero1 * $numero2).'</br>';
	echo 'División: '.($numero1 / $numero2).'</br>';
	echo 'Resto: '.($numero1 % $numero2).'</br>';

	//Operadores de incremento y decremento
	$year = 2019;
	echo '<h1>'.$year.'</h1>';

	//Incremento
	$year++;
	echo '<h1>'.$year.'</h1>';
	$year = 2019;
	$year = $year + 1;
	echo '<h1>'.$year.'</h1>';
	//Pre-incremento
	$year = 2019;
	++$year;
	echo '<h1>'.$year.'</h1>';
	$year = 2019;
	$year = 1 + $year;
	echo '<h1>'.$year.'</h1>';

	//Decremento
	$year = 2019;
	$year--;
	echo '<h1>'.$year.'</h1>';
	$year = 2019;
	$year = $year - 1;
	echo '<h1>'.$year.'</h1>';
	//Pre-decremento
	$year = 2019;
	--$year;
	echo '<h1>'.$year.'</h1>';
	$year = 2019;
	$year = 1 - $year;
	echo '<h1>'.$year.'</h1></br>';

	//Operadores de asignacion
	$edad = 55;
	echo $edad.'</br></br>';

	echo ($edad+=5).'</br>';

	$edad = 55;
	echo ($edad-=5).'</br>';

	$edad = 55;
	echo ($edad*=5).'</br>';

	$edad = 55;
	echo ($edad/=5).'</br>';

?>