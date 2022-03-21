<?php

namespace App\Controllers;

class Templates extends BaseController
{
    public function index()
    {
        $this->data['page_header']['logo'] = "templates.svg";
        $this->data['page_header']['name'] = "Templates";
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        echo view('pages/templates', $this->data);
        echo view('templates/footer');
    }
}
