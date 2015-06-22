<?php
namespace App\Domain\Devices\Thermostats\Repositories;

use App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface;
use App\Domain\Devices\Thermostats\Thermostat;
use App\Domain\HttpClient\NestClient;

/**
 * Class ThermostatNestRepository
 * @package App\Domain\Devices\Thermostats\Repositories
 */
class ThermostatNestRepository implements ThermostatRepositoryInterface
{
    /**
     * @var NestClient
     */
    public $client;

    /**
     * @var Thermostat
     */
    public $model;

    /**
     * @param NestClient $client
     * @param Thermostat $model
     */
    public function __construct(NestClient $client, Thermostat $model)
    {
        $this->client = $client;
        $this->model = $model;
    }

    /**
     * Get all thermostats from nest.
     *
     * @return mixed|string
     */
    public function getAll()
    {
        $thermostats = $this->client->getAllThermostats();

        foreach ($thermostats as $thermostat) {
            $this->model->logTemperatures($thermostat);
        }

        return $this->client->getAllThermostats();
    }

    /**
     * Get the first thermostat from nest.
     *
     * @return mixed
     */
    public function findFirst()
    {
        $thermostat = $this->client->getFirstThermostat();
        $this->model->logTemperatures($thermostat);
        return $thermostat;
    }

    /**
     * Update a thermostats temperature.
     *
     * @param $temperature
     * @param $thermostatId
     * @return mixed|string
     */
    public function changeTemperature($temperature, $thermostatId)
    {
        $updateThermostatTemperature = $this->client->updateThermostatTemperature($temperature, $thermostatId);
        $this->model->logUpdatedTemperaturesFromId($temperature, $thermostatId);
        return $updateThermostatTemperature;
    }

    /**
     * Get temperature reporting information.
     *
     * @return mixed
     */
    public function getReportingInformation()
    {
        return $this->model->getReportingInformation();
    }
}
