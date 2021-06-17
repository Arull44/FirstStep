<?php

class Customer_model{
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
				 " VALUES ('',:nama_customer, :email, :telepon, :alamat, :cerita)";
		$this->db->query($query);
		$this->db->bind('nama_customer',$data['nama_customer']);
		$this->db->bind('email',$data['email']);
		$this->db->bind('telepon',$data['telepon']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->bind('cerita',$data['cerita']);
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

	public function cariDataCustomer(){
		$keyword = $_POST['keyword'];
		$query = 'SELECT * FROM '. $this->table.' WHERE nama_customer LIKE :keyword';
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this->db->resultSet();
	}

}
