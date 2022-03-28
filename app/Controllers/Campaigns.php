<?php

namespace App\Controllers;

class Campaigns extends BaseController
{
    public function index()
    {
        $this->data['page_header']['logo'] = "megaphone.svg";
        $this->data['page_header']['name'] = "Campanhas Omni Channel";
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        echo view('pages/campaigns/campaigns', $this->data);
        echo view('templates/footer');
    }
}
