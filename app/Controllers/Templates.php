<?php

namespace App\Controllers;

class Templates extends BaseController
{
    protected function getDataMenuBar($selected = "Adicionar Template SMS") {
        $menu['Adicionar Template SMS'] = ['url' => '/templates/sms', 'class' => ''];
        $menu['Adicionar Template Email'] = ['url' => '/templates/email', 'class' => ''];

        $menu[$selected]['class'] = 'active';

        return $menu;
    }

    public function index() {
        $this->sms();
    }

    public function sms() {
        $this->data['page_header']['logo'] = "templates.svg";
        $this->data['page_header']['name'] = "Templates";
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        $this->data['menu'] = $this->getDataMenuBar('Adicionar Template SMS');
        echo view('pages/templates/sms', $this->data);
        echo view('templates/footer');
    }

    public function email() {
        $this->data['page_header']['logo'] = "templates.svg";
        $this->data['page_header']['name'] = "Templates";
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        $this->data['menu'] = $this->getDataMenuBar('Adicionar Template Email');
        echo view('pages/templates/email', $this->data);
        echo view('templates/footer');
    }
}
