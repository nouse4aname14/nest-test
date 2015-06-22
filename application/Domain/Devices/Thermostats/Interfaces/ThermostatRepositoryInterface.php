<?php
namespace App\Domain\Devices\Thermostats\Interfaces;

use App\Domain\Interfaces\RepositoryInterface;

/**
 * Interface ThermostatRepositoryInterface
 * @package App\Domain\Devices\Thermostats\Interfaces
 */
interface ThermostatRepositoryInterface extends RepositoryInterface
{
    /**
     * @return mixed
     */
    public function findFirst();

    /**
     * @param $temperature
     * @param $thermostatId
     * @return mixed
     */
    public function changeTemperature($temperature, $thermostatId);

    /**
     * @return mixed
     */
    public function getReportingInformation();
}
