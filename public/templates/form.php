<?php require_once 'conn.php';
$connection = new Connection('registros_forms','novouser','');
$data = $connection->getAll('linguagens');
?>

<form id="formulario" method="POST" action="registrar.php">
	<div id="caixas-texto">
		<label for="id_nome">Nome:<input type="text" name="nome" class= "input-data1" id="id_nome" autocomplete="off" required/></label>
		<label for="id_endereco">Endereco:<input type="text" name="endereco" class= "input-data1" id="id_endereco" autocomplete="off" required/></label>
	</div>
	<fieldset id="linguagem"><legend>Linguagens</legend>	
	<?php foreach($data as $row){
		echo '<label>'. $row['nome'] .'<input type="checkbox" name="linguagem' . $row['nome'] . '" value=' . $row['id'] . '"></label>';
	} ?>
	</fieldset>
	<fieldset id="idioma"><legend>Idiomas</legend>
	<?php 
	$data = $connection->getAll('idioma');

	foreach($data as $row){
		echo '<label>'. $row['nome'] .'<input type="checkbox" name="idioma' . $row['nome'] . '" value=' . $row['id'] . '"></label>';
	} ?>
	</fieldset>
	<p><label for="id_objetivo" >Seu Objetivo:</label></p>
	<textarea id="id_objetivo" name="objetivo" class= "input-data1" placeholder="Digite aqui seu objetivo" ></textarea>
	
	<button type="submit">Enviar</button>
</form>