<?php

class Home_model
{

    private $table = 'package_list';
    private $db;

    public function __construct()
    {
        $this->db = new Database;
    }

    public function getPackage()
    {
        $this->db->query('SELECT * FROM ' . $this->table);
        return $this->db->resultSet();
    }
}
