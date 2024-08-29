<?php

class List_model
{

    private $table = 'order_list';
    private $db;


    public function __construct()
    {
        $this->db = new Database;
    }



    public function getList()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }

    public function getOrderById($id)
    {

        $this->db->query('SELECT * FROM ' . $this->table . ' WHERE no=:id');
        $this->db->bind('id', $id);

        return $this->db->single();
    }

    public function tambahDataOrder($data)
    {
        $query = "INSERT INTO order_list
        VALUES 
        ('', :nama, :hp, :tanggal, :jmh_peserta, :jmh_hari, :nama_package, :harga_package, :total_harga)";
        $this->db->query($query);
        $this->db->bind('nama', $data['nama']);
        $this->db->bind('hp', $data['hp']);
        $this->db->bind('tanggal', $data['tanggal']);
        $this->db->bind('jmh_peserta', $data['jmh_peserta']);
        $this->db->bind('jmh_hari', $data['jmh_hari']);
        $this->db->bind('nama_package', $data['nama_package']);
        $this->db->bind('harga_package', $data['harga_package']);
        $this->db->bind('total_harga', $data['total_harga']);

        $this->db->execute();

        return $this->db->rowCount();
    }
}
