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
        foreach ($result as $info) {
            $rows .= "
            $info->id";
        }

        $data = [
            'title' => "Overzicht Vlucht-Booking",
            'rows' => $rows
        ];
        $this->view('vlucht/index', $data);
    }
}
