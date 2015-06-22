<?php
use App\Domain\Traits\HttpResponseTrait;

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class ThermostatSimulator
 */
class ThermostatSimulator extends CI_Controller
{
    /**
     * @var App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface
     */
    public $thermostatRepo;

    use HttpResponseTrait;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        // Resolve interface implementation from the IOC container.
        $this->thermostatRepo = $this->container['App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface'];
        $this->thermostatRepo->client->isSimulator = true;
    }

    /**
     * Load Nest Simulator Thermostat dashboard.
     *
     * /ThermostatSimulator
     *
     */
    public function index()
    {
        $this->load->view('thermostatSimulator', ['thermostats' => $this->thermostatRepo->getAll()]);
    }

    /**
     * Changes a thermostats temperature.
     *
     * /ThermostatSimulator/changeTemperature/{thermostatId}/{temperature}
     *
     * @param $thermostatId
     * @param $temperature
     */
    public function changeTemperature($thermostatId, $temperature)
    {
        try {
            echo $this->toJson($this->thermostatRepo->changeTemperature((int) $temperature, $thermostatId));
        } catch(InvalidArgumentException $e) {
            echo $this->respondWithError($e->getMessage(), 400);
        }
    }

    /**
     * Get temperature reporting information.
     */
    public function getAllReportingInformation()
    {
        echo $this->toJson($this->thermostatRepo->getReportingInformation());
    }

    /**
     * Get current thermometer reading.
     */
    public function getCurrentReading()
    {
        echo $this->toJson($this->thermostatRepo->getAll());
    }
}
