<?php

class Profil_model{
	private $table = 'customer';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllCustomer(){
		$this->db->query('SELECT * FROM '. $this->table);
		return $this->db->resultSet();
	}

	public function getCustomerById($id){
		$this->db->query('SELECT * FROM '. $this->table.' WHERE id_customer=:id_customer');
		$this->db->bind('id_customer',$id);
		return $this->db->single();
	}

	public function tambahDataCustomer($data){
		$query = "INSERT INTO ". $this->table.
				 " VALUES ('',:nama_customer,:username,:password,:tanggal_lahir, :telepon, :alamat)";
		$this->db->query($query);
		$this->db->bind('nama_customer',$data['nama_customer']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('tanggal_lahir',$data['tanggal_lahir']);
		$this->db->bind('telepon',$data['telepon']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function hapusDataCustomer($id){
		$query = "DELETE FROM ". $this->table.
				 " WHERE id_customer=:id_customer";
		$this->db->query($query);
		$this->db->bind('id_customer',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function ubahDataCustomer($data){
		$query = "UPDATE ". $this->table.
				" SET nama_customer=:nama_customer,username=:username,password=:password,tanggal_lahir=:tanggal_lahir, telepon=:telepon, alamat=:alamat".
				" WHERE id_customer=:id_customer";
		$this->db->query($query);
		$this->db->bind('nama_customer',$data['nama_customer']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('tanggal_lahir',$data['tanggal_lahir']);
		$this->db->bind('telepon',$data['telepon']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->bind('id_customer',$data['id_customer']);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function cariDataCustomer(){
		$keyword = $_POST['keyword'];
		$query = 'SELECT * FROM '. $this->table.' WHERE nama LIKE :keyword';
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this->db->resultSet();
	}
}
