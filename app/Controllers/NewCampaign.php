<?php

namespace App\Controllers;

class NewCampaign extends BaseController
{
    public function index()
    {
        $this->data['page_header']['logo'] = "megaphone-new.svg";
        $this->data['page_header']['name'] = "Nova Campanha";
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        echo view('pages/newCampaign/new-campaign', $this->data);
        echo view('templates/footer');
    }
}
