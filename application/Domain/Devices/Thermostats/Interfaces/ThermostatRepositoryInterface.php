<?php
namespace App\Domain\Devices\Thermostats\Interfaces;

use App\Domain\Interfaces\RepositoryInterface;

interface ThermostatRepositoryInterface extends RepositoryInterface
{
    public function findFirst();
}
