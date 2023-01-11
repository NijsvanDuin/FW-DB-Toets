<?php

class Vluchten extends Controller
{

    private $vluchtModel;


    public function __construct()
    {
        $this->vluchtModel = $this->model('Vlucht');
    }

    public function index()
    {
        $result = $this->vluchtModel->getVlucht();
        // if ($result) {
        //     $instrecteurNaam = $result[0]->INNA;
        // } else {
        //     $instrecteurNaam = '';
        // }
        // var_dump($result);
        $rows = '';
        $idsToCreate = '';

        foreach ($result as $info) {
            $rows .= "
            <tr>
            <td>$info->Voornaam $info->Achternaam</td>
            <td>$info->Adres</td>
            <td>$info->Email</td>
            <td>$info->Bestemming</td>
            <td>$info->Vertrekdatum</td>
            <td>$info->Vertrektijd</td>
            <td><a href='" . URLROOT . "/vluchten/updateVlucht/{$info->insId}'><img src='" . URLROOT . "/img/b_help.png' alt='topic'></a></td>
            <td><a href='" . URLROOT . "/vluchten/deleteVlucht/{$info->insId}'><img src='" . URLROOT . "/img/b_report.png' alt='topic'></a></td>
            </tr>";
            $idsToCreate .= "
            $info->pasId, $info->conId, $info->vluId, $info->insId,
            ";
        }

        $data = [
            'title' => "Overzicht Vlucht-Booking",
            'rows' => $rows
        ];
        $this->view('vlucht/index', $data);
    }
    public function addVlucht()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] == 'POST') {
                $result = $this->vluchtModel->addVlucht($_POST);
                // var_dump($_POST);
                $_POST = filter_input_array(INPUT_POST, FILTER_SANITIZE_FULL_SPECIAL_CHARS);
                $result = $this->vluchtModel->addVlucht($_POST);

                echo "<p>De nieuwe kilometerstand is toegevoegd</p>";
                header('Refresh:5; url=' . URLROOT . '/vlucht/index/');
            }
            $this->view('vlucht/addVlucht');
        } catch (PDOException $ex) {
            error_log("<p>De nieuwe  is niet toegevoegd, probeer het opnieuw</p>", 0);
            die('ERROR : Failed to get all Vluchts from database in class VluchtsModel method getVluchtsUseSp!  ' . $ex->getMessage());
        }
    }
}
