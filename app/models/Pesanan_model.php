<?php

class Pesanan_model{
	private $table = 'pesanan';
	private $db;

	public function __construct(){
		$this->db = new Database;
	}

	public function getAllPesanan(){
		$this->db->query('SELECT psn.id_pesanan, lyn.nama_layanan, cus.nama_customer, lyn.harga, psn.lunas
                            FROM pesanan psn
                            JOIN layanan lyn
                                ON psn.id_layanan = lyn.id_layanan
                            JOIN customer cus
                                ON psn.id_customer = cus.id_customer');
		return $this->db->resultSet();
	}

	public function getPesananById($id){
		$this->db->query('SELECT psn.id_pesanan, lyn.nama_layanan, cus.nama_customer, lyn.harga, psn.lunas
                            FROM pesanan psn
                            JOIN layanan lyn
                                ON psn.id_layanan = lyn.id_layanan
                            JOIN customer cus
                                ON psn.id_customer = cus.id_customer 
                            WHERE id_pesanan=:id_pesanan');
		$this->db->bind('id_pesanan',$id);
		return $this->db->single();
	}

	public function cariDataPesanan(){
		$keyword = $_POST['keyword'];
		$query = 'SELECT psn.id_pesanan, lyn.nama_layanan, cus.nama_customer, lyn.harga, psn.lunas
                    FROM pesanan psn
                    JOIN layanan lyn
                        ON psn.id_layanan = lyn.id_layanan
                    JOIN customer cus
                        ON psn.id_customer = cus.id_customer 
                    WHERE lyn.nama_layanan LIKE :keyword OR cus.nama_customer LIKE :keyword';
		$this->db->query($query);
		$this->db->bind('keyword',"%$keyword%");
		return $this->db->resultSet();
	}
}
