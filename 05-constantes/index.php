<?php
	//CONSTANTES
	//Es un centenedor de información ue no varia

	define('nombre', 'Juan Pa');
	define('web', 'web.com');

	echo '<h1>'.nombre.'</h1>'; //se imprimen sin signo $
	echo '<h2>'.web.'</h2>';

	//CONSTANTES PREDEFINIDAS ENTRE OTRAS
	echo PHP_OS.'</br>';
	echo PHP_VERSION.'</br>';
	echo PHP_EXTENSION_DIR.'</br>';
	echo __line__.'</br>';
	echo __FILE__.'</br>';
?>