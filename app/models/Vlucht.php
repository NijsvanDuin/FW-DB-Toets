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
        try {
            $sql = "CALL readBooking();";
            $this->db->query("$sql");
            $result = $this->db->resultSet();
            return $result ?? [];
        } catch (PDOException $ex) {
            error_log("ERROR : Failed to get all Vluchts from database in class VluchtModel method getVluchtUseSp!", 0);
            die('ERROR : Failed to get all Vluchts from database in class VluchtsModel method getVluchtsUseSp! ' . $ex->getMessage());
        }
    }
    public function addVlucht($post)
    {
        try {
            $sql = "CALL createBooking(:adres, 
                                        :woonplaats, 
                                        :postcode, 
                                        :email,
                                         :mobiel, 
                                        :voornaam, 
                                        :achternaam, 
                                        :geboortedatum, 
                                        :vluchtnummer, 
                                        :oorsprong, 
                                        :gate,
                                        :bestemming, 
                                        :vertrekdatum, 
                                        :vertrektijd);
            ";
            $this->db->query($sql);
            $this->db->bind(':adres', $post['adres'], PDO::PARAM_STR);
            $this->db->bind(':woonplaats', $post['woonplaats'], PDO::PARAM_STR);
            $this->db->bind(':postcode', $post['postcode'], PDO::PARAM_STR);
            $this->db->bind(':email', $post['email'], PDO::PARAM_STR);
            $this->db->bind(':mobiel', $post['mobiel'], PDO::PARAM_INT);
            $this->db->bind(':voornaam', $post['voornaam'], PDO::PARAM_STR);
            $this->db->bind(':achternaam', $post['achternaam'], PDO::PARAM_STR);
            $this->db->bind(':geboortedatum', $post['geboortedatum'], PDO::PARAM_STR);
            $this->db->bind(':vluchtnummer', $post['vluchtnummer'], PDO::PARAM_INT);
            $this->db->bind(':oorsprong', $post['oorsprong'], PDO::PARAM_STR);
            $this->db->bind(':gate', $post['gate'], PDO::PARAM_STR);
            $this->db->bind(':bestemming', $post['bestemming'], PDO::PARAM_STR);
            $this->db->bind(':vertrekdatum', $post['vertrekdatum'], PDO::PARAM_STR);
            $this->db->bind(':vertrektijd', $post['vertrektijd'], PDO::PARAM_STR);
            $result = $this->db->resultSet();
            return $result ?? [];
        } catch (PDOException $ex) {
            $ex;
        }
    }
}
