<?php

class Admin_model{
	private $table = 'admin';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllAdmin(){
		$this->db->query('SELECT * FROM '. $this->table);
		return $this->db->resultSet();
	}

	public function getAdminById($id){
		$this->db->query('SELECT * FROM '. $this->table.' WHERE id_admin=:id_admin');
		$this->db->bind('id_admin',$id);
		return $this->db->single();
	}

	public function tambahDataAdmin($data){
		$query = "INSERT INTO ". $this->table.
				 " VALUES ('',:nama_admin,:username,:password, :telepon, :alamat)";
		$this->db->query($query);
		$this->db->bind('nama_admin',$data['nama_admin']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('telepon',$data['telepon']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function hapusDataAdmin($id){
		$query = "DELETE FROM ". $this->table.
				 " WHERE id_admin=:id_admin";
		$this->db->query($query);
		$this->db->bind('id_admin',$id);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function ubahDataAdmin($data){
		$query = "UPDATE ". $this->table.
				" SET nama_admin=:nama_admin,username=:username,password=:password, telepon=:telepon, alamat=:alamat".
				" WHERE id_admin=:id_admin";
		$this->db->query($query);
		$this->db->bind('nama_admin',$data['nama_admin']);
		$this->db->bind('username',$data['username']);
		$this->db->bind('password',$data['password']);
		$this->db->bind('telepon',$data['telepon']);
		$this->db->bind('alamat',$data['alamat']);
		$this->db->bind('id_admin',$data['id_admin']);
		$this->db->execute();
		return $this->db->rowCount();
	}	

	public function cariDataAdmin(){
		$keyword = $_POST['keyword'];
		$query = 'SELECT * FROM '. $this->table.' WHERE nama LIKE :keyword';
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this->db->resultSet();
	}

    public function getAdminByUsername($result) {
        $query = "SELECT * FROM `admin` WHERE username = :username";
        $this->db->query($query);
        $this->db->bind('username', $result['username']);
        return $this->db->single();
    }
}
