<?php

require_once 'Database.php';
require_once 'User.php';

class UserDAO extends Database
{
	public function __construct()
	{
		parent::__construct();
	}

	public function get($fields = array(), $where = array())
	{
		$usuarios = array();
		$valores = array();

		if (count($fields) == 0) {
			$fields = array('*');
		}

		$sql = "SELECT " . implode(',', $fields) . " FROM usuarios ";

		if (count($where) > 0) {
			$tabelas = array_keys($where);
			$valores = array_values($where);
			$comp = array();

			foreach ($tabelas as $k => $tabela) {
				$comp[] = $tabela . " = ?";
			}

			$sql .= implode(" AND ", $comp);
		}

		$sql = $this->db->prepare($sql);
		$sql->execute($valores);

		print_r($sql);

		if ($sql->rowCount() > 0) {
			foreach ($sql->fetchAll() as $item) {
				$usuarios[] = new User($item);
			}
		}

		return $usuarios;
	}


	public function insert($fields = array())
	{
		if (count($fields) > 0) {

			$questions = array();

			for($q = 0; $q < count(array_keys($fields)); $q++){
				$questions[] = '?';
			}

			$sql = "INSERT INTO usuarios (" . implode(',', array_keys($fields)) . ") VALUES (" . implode(',', $questions) . ")";
			
			$sql = $this->db->prepare($sql);
			$sql->execute(array_values($fields));

		}
	}

}