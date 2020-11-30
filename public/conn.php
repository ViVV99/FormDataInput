<?php

class Connection{
	
	protected $conn;
	public function __construct($db, $user, $pass = ''){
		$this->conn = new PDO('mysql:host=localhost;dbname='. $db, $user, $pass);
	}

	public function getAll($tabela)
	{
		$resp = $this->conn->query('SELECT * FROM ' . $tabela);
		$data = array();
		while($rows = $resp->fetch(PDO::FETCH_ASSOC)){
			array_push($data, $rows);
		}
		return $data;
		
	}

	public function putOnPessoa($nome, $endereco, $objetivo){
		try{
			$resp = $this->conn->prepare('Insert into pessoa values (null,:nome,:endereco,:objetivo');
			$resp->bindValues(array(':nome'=>$nome,':endereco'=>$endereco,':objetivo'=>$objetivo))
			$resp->execute();
			return $this->conn->lastInsertId();
		}catch(PDOException $e){
			$this->conn->rollback();
		}

	}


	public function putIdioma($id, $idioma){

	}

	public function putLinguagem($id, $idioma){
		
	}

}