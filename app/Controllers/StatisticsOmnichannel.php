<?php

namespace App\Controllers;

class StatisticsOmnichannel extends BaseController
{
    protected function getDataMenuBar($selected = "Campanhas") {
        $menu['Campanhas'] = ['url' => '/statistics-omnichannel/campaigns', 'class' => ''];
        $menu['Workflow'] = ['url' => '/statistics-omnichannel/workflow', 'class' => ''];
        $menu['Clientes'] = ['url' => '/statistics-omnichannel/clientes', 'class' => ''];
        $menu['Unsubscribed'] = ['url' => '/statistics-omnichannel/unsubscribed', 'class' => ''];

        $menu[$selected]['class'] = 'active';

        return $menu;
    }

    public function index()
    {
        $this->campaigns();
    }

    public function campaigns() {
        $this->data['page_header']['logo'] = "statistics.svg";
        $this->data['page_header']['name'] = "Estatísticas Omni Channel";
        $this->data['menu'] = $this->getDataMenuBar('Campanhas');
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        echo view('pages/statistics/omnichannel/campaigns', $this->data);
        echo view('templates/footer');
    }

    public function workflow() {
        $this->data['page_header']['logo'] = "statistics.svg";
        $this->data['page_header']['name'] = "Estatísticas Omni Channel";
        $this->data['data'] = $this->getDataMenuBar('Workflow');
        echo view('templates/header', $this->data);
        echo view('templates/lateral-bar');
        echo view('pages/statistics/omnichannel/campaigns', $this->data);
        echo view('templates/footer');
    }
}
