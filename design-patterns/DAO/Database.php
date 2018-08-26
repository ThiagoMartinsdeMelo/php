<?php

class Database
{
	protected $db;

	private $database = "dao";
	private $userdb = "root";
	private $passdb = "";

	public function __construct()
	{
		try{
			$this->db = new PDO("mysql:host=localhost;dbname=". $this->database, $this->userdb, $this->passdb);
			$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		} catch (PDOException $e) {
			die($e->getMessage());
		}
	}
}