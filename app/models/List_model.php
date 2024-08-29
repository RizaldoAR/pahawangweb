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
}
