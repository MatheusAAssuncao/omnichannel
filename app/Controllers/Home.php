<?php

namespace App\Controllers;

use App\Libraries\Mongo\MongoConnection;
use MongoDB\BSON\Regex;

class Home extends BaseController
{
    public function index()
    {
        $data['mongo'] = $this->_insertMongoData();
        echo view('welcome_message', $data);
    }

    protected function _insertMongoData() {
        $_mongoAdmin = new MongoConnection('admin');
        $_mongoAdmin->setCollection('datakeys')->drop();
        $_mongo = new MongoConnection();
        $_mongo->setCollection('users')->drop();
        // $_mongo->setCollection('users');

        $_mongo->collection->insertOne([
            'name' => 'Matheus',
            'enc_code_number' => 123, 
            'endereco' => 'Rua Santa Lúcia, 249', 
            'enc_documento' => '123456789'
        ]);
        
        $_mongo->collection->insertMany([
            [
                'name' => 'Julia',
                'enc_code_number' => 321,
                'endereco' => [
                    'rua' => 'Dolores Duran',
                    'enc_cep' => '13473661',
                    'estado' => [
                        'enc_sigla' => 'SP',
                        'cidade' => 'Americana'
                    ]
                ],
                'enc_documento' => '123456789'
            ],
            [
                'name' => 'João',
                'enc_code_number' => '951',
                'endereco' => 'Rua Pando Tando, nº 300',
                'enc_documento' => '852147963'
            ],
            [
                'name' => 'João',
                'enc_code_number' => '9511',
                'endereco' => 'Rua Pando Tando, nº 3000',
                'enc_documento' => '123456'
            ],
        ]);

        $_mongo->setCollection('users')->updateMany(
            ['endereco.rua' => 'Dolores Duran'],
            ['$set' => ['endereco.enc_cep' => '1234567']]
        );

        return json_encode($_mongo->collection->find(
            // ['name' => new Regex('^jul', 'i')], ['projection' => ['_id' => 0]]
            ['enc_documento' => '123456789'], ['projection' => ['_id' => 0]]
            // ['endereco.estado.enc_sigla' => 'SP', 'endereco.estado.cidade' => 'Americana'], ['projection' => ['_id' => 0]]
        ), JSON_PRETTY_PRINT);
    }
}
