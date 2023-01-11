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
        $this->db->query("CALL readBooking();");
        $result = $this->db->resultSet();
        return $result;
    }
}
