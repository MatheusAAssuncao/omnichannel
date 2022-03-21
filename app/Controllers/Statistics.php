<?php

namespace App\Controllers;

class Statistics extends BaseController
{
    public function index()
    {
        $this->data['page_header']['logo'] = "statistics.svg";
        $this->data['page_header']['name'] = "Estatísticas Omni Channel";
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        echo view('pages/statistics', $this->data);
        echo view('templates/footer');
    }
}
