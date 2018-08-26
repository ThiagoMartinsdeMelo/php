<?php

class User
{
	private $name;
	private $email;
	private $pass;
	private $id;

	public function __construct($array = null)
	{
		$this->name = (isset($array['name']))?$array['name']:'';
		$this->email = (isset($array['email']))?$array['email']:'';
		$this->pass = (isset($array['pass']))?$array['pass']:'';
		$this->id = (isset($array['id']))?$array['id']:'';
	}

	public function getName()
	{
		return $this->name;
	}

	public function getEmail()
	{
		return $this->email;
	}

	public function getId()
	{
		return $this->name;
	}	

}