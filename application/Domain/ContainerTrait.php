<?php
namespace App\Domain;

use Illuminate\Container\Container;

trait ContainerTrait
{
    public function buildContainerBindings()
    {
        $container = new Container;

        $container->bind(
            'App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface',
            'App\Domain\Devices\Thermostats\Repositories\ThermostatNestRepository'
        );

        return $container;
    }
}
