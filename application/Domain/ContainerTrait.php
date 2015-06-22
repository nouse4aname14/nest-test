<?php
namespace App\Domain;

use Illuminate\Container\Container;
use MongoClient;

/**
 * Class ContainerTrait
 * @package App\Domain
 */
trait ContainerTrait
{
    /**
     * Set application container bindings.
     *
     * @return Container
     */
    public function buildContainerBindings()
    {
        $container = new Container();

        $container->bind(
            'App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface',
            'App\Domain\Devices\Thermostats\Repositories\ThermostatNestRepository'
        );

        $container->instance('MongoClient', new MongoClient("mongodb://localhost:27017"));

        return $container;
    }
}
