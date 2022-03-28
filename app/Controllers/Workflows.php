<?php

namespace App\Controllers;

class Workflows extends BaseController
{
    public function index()
    {
        $this->data['page_header']['logo'] = "workflows.svg";
        $this->data['page_header']['name'] = "Workflows";
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        echo view('pages/workflows/workflows', $this->data);
        echo view('templates/footer');
    }
}
