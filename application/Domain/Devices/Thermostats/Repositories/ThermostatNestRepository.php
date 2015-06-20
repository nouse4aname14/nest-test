<?php
namespace App\Domain\Devices\Thermostats\Repositories;

use App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface;
use App\Domain\HttpClient\NestClient;

class ThermostatNestRepository implements ThermostatRepositoryInterface
{
    public $client;

    public function __construct(NestClient $client)
    {
        $this->client = $client;
    }
    public function getAll()
    {
        return $this->client->getAllThermostats();
    }

    public function findFirst()
    {
        return $this->client->getFirstThermostat();
    }
}
