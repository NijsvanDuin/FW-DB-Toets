<?php

class Vlucht
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
    public function getVlucht()
    {
        $this->db->query("SELECT *
                          FROM Instapkaart 
                          WHERE `id` = 1");;
        $result = $this->db->resultSet();
        return $result;
    }
}
