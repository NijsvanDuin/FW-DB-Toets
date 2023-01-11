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
        $data = '';
        $this->view('vlucht/index', $data);
    }
}
