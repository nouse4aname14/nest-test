<?php
use GuzzleHttp\Client;

defined('BASEPATH') OR exit('No direct script access allowed');

class Devices extends CI_Controller {

    public $test;

    public function __construct()
    {
        parent::__construct();
        $this->test = $this->container['App\Domain\Test'];
    }

    public function index()
    {
        var_dump('hello');
        $this->test->run();

        $client = new Client([
            'base_uri' => 'https://developer-api.nest.com/devices?auth=c.QrSgngGo0e4ZKBNruMMGCvO3IILvRiJBuEhARmNfxy2uisuKGiR65HgYuIgwv5L5iOh0nH0OHGMma0tpErw0iIlqqzFNj7jYZayvOlFSxnnmuk8kkzoj5y7o2dlHAxPuwTiY5msakQe4SU13'
        ]);
        $response = $client->get('/');
        var_dump($response);

    }

    public function listAll()
    {
        var_dump('listing');
    }
}
