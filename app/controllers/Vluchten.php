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
    }
}
