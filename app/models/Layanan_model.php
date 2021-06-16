<?php

class Layanan_model{
	private $table = 'layanan';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllLayanan(){
		$this->db->query('SELECT * FROM '. $this->table);
		return $this->db->resultSet();
	}

	public function getLayananById($id){
		$this->db->query('SELECT * FROM '. $this->table.' WHERE id_layanan=:id_layanan');
		$this->db->bind('id_layanan',$id);
		return $this->db->single();
	}

	public function tambahDataLayanan($data){
		$query = "INSERT INTO ". $this->table.
				 " VALUES ('',:nama_layanan,:deskripsi,:harga)";
		$this->db->query($query);
		$this->db->bind('nama_layanan',$data['nama_layanan']);
		$this->db->bind('deskripsi',$data['deskripsi']);
		$this->db->bind('harga',$data['harga']);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function hapusDataLayanan($id){
		$query = "DELETE FROM ". $this->table.
				 " WHERE id_layanan=:id_layanan";
		$this->db->query($query);
		$this->db->bind('id_layanan',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function ubahDataLayanan($data){
		$query = "UPDATE ". $this->table.
				" SET nama_layanan=:nama_layanan,deskripsi=:deskripsi,harga=:harga".
				" WHERE id_layanan=:id_layanan";
		$this->db->query($query);
		$this->db->bind('nama_layanan',$data['nama_layanan']);
		$this->db->bind('deskripsi',$data['deskripsi']);
		$this->db->bind('harga',$data['harga']);
		$this->db->bind('id_layanan',$data['id_layanan']);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function cariDataLayanan(){
		$keyword = $_POST['keyword'];
		$query = 'SELECT * FROM '. $this->table.' WHERE nama_layanan LIKE :keyword';
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this->db->resultSet();
	}
}
