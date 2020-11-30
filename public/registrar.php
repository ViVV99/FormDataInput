<?php
if(isset($_POST)){
	require_once 'conn.php';
	$connection = new Connection('registros_forms','novouser','');
	$keys = array_keys($_POST);
	foreach ($keys as $key){
		if(substr($key, 0,9) == 'linguagem'){
			$connection->putLinguagem();
			//todo
		}

		if(substr($key, 0,6) == 'idioma'){
			$connection->putIdioma();
			//todo
		}	
	}
	
}