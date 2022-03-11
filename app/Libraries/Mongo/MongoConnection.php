<?php
 
namespace App\Libraries\Mongo;

use Config\Paths;
use Exception;

class MongoConnection {
    
	protected $_dataBase;
	protected $_conn;
	public $collection;
	public $clientEncryption;

	function __construct(string $dataBase = "") {
		$this->_dataBase = $_ENV['database.default.database'];
		$username = $_ENV['database.default.username'];
		$password = $_ENV['database.default.password'];
		$host = $_ENV['database.default.hostname'];
		$port = $_ENV['database.default.port'];
		$authRequired = $_ENV['database.default.authRequired'];

		if (!empty($dataBase)) {
			$this->_dataBase = $dataBase;
		}

		try {
			if($authRequired) {
				$this->_conn = new Client('mongodb://' . $username . ':' . $password . '@' . $host. ':' . $port);
			} else {
				$this->_conn = new Client('mongodb://' . $host. ':' . $port);
			}
		} catch(Exception $ex) {
			throw new Exception("Couldn\'t _connect to mongodb: " . $ex->getMessage(), 500);
		}

		$this->_configureEncryptionKey();
	}

	/**
	 * 
	 * @param string $value Collection name
	 */
	public function setCollection(string $value, $nullableEncryption = false) {
		if (!$nullableEncryption) {
			$this->collection = $this->_conn->selectCollection($this->_dataBase, $value, [], $this->clientEncryption);
		} else {
			$this->collection = $this->_conn->selectCollection($this->_dataBase, $value, []);
		}
		return $this->collection;
    }

	protected function _configureEncryptionKey() {
		$paths = new Paths();
		$keyfile96bytes = file_get_contents(rtrim($paths->systemDirectory, '\\/ ') . DIRECTORY_SEPARATOR . 'keyfile96bytes');
		$clientEncryptionOpts = [
			'keyVaultNamespace' => 'admin.datakeys',
			'kmsProviders' => [
				'local' => ['key' => $keyfile96bytes],
			],
		];

		$this->clientEncryption = $this->_conn->createClientEncryption($clientEncryptionOpts);
	}
}