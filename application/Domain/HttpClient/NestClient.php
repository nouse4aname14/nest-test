<?php
namespace App\Domain\HttpClient;

use GuzzleHttp\Client as GuzzleClient;
use GuzzleHttp\Exception\ClientException;

class NestClient
{
    public $baseUrl = 'https://developer-api.nest.com/';

    public $client;

    public $auth = '?auth=c.QrSgngGo0e4ZKBNruMMGCvO3IILvRiJBuEhARmNfxy2uisuKGiR65HgYuIgwv5L5iOh0nH0OHGMma0tpErw0iIlqqzFNj7jYZayvOlFSxnnmuk8kkzoj5y7o2dlHAxPuwTiY5msakQe4SU13';

    public function __construct(GuzzleClient $client)
    {
        $this->client = $client;
    }

    public function getAllDevices()
    {
        try {
            $response = $this->toObject($this->client->get($this->makeUri('devices'))->getBody());
        } catch(ClientException $e) {
            $response = $this->respondWithError($e->getMessage(), 404);
        }

        return $response;
    }

    public function getAllThermostats()
    {
        try {
            $response = $this->toArray($this->client->get($this->makeUri('devices/thermostats'))->getBody()->getContents());
        } catch(ClientException $e) {
            $response = $this->respondWithError($e->getMessage(), 404);
        }

        return $response;
    }

    public function getFirstThermostat()
    {
        $devices = $this->getAllThermostats();
        reset($devices);
        return $devices[key($devices)];
    }

    public function makeUri($option = '')
    {
        return $this->baseUrl . $option . $this->auth;
    }

    protected function respondWithError($message,  $errorCode)
    {
        http_response_code($errorCode);
        return json_encode([
            'error' => [
                'http_code' => http_response_code(),
                'message' => $message,
            ]
        ]);
    }

    protected function toArray($data)
    {
        return json_decode($data, true);
    }

    protected function toObject($data)
    {
        return json_decode($data);
    }
}
