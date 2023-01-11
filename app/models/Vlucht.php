<?php

class Wagenpark
{
    private $db;
    public function __construct()
    {
        $this->db = new Database();
    }
}
