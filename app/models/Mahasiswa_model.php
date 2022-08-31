<?php

class Mahasiswa_model {
	private $table = 'mahasiswa';
	private $db;


	public function __construct()
	{
		$this->db = new database;
	}



	public function getALLMahasiswa()
	{
		$this->db->query('SELECT * FROM ' . $this->table);
		return $this->db->resultset();
	}


	public function getmahasiswaById($id)
	{
		$this->db->query('SELECT * FROM ' . $this->table . ' WHERE Id=:id');
		$this->db->bind('id', $id);
		return $this->db->single();
	}





}