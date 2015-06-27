<?php
use App\Domain\Traits\HttpResponseTrait;

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Class Thermostat
 */
class Thermostat extends CI_Controller
{
    /**
     * @var
     */
    public $thermostatRepo;

    use HttpResponseTrait;

    /**
     *
     */
    public function __construct()
    {
        parent::__construct();
        $this->thermostatRepo = $this->container['App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface'];
    }

    /**
     *
     */
    public function index()
    {
        $data = $this->thermostatRepo->findFirst();
        $this->load->view('thermostat', $data);
    }

    /**
     * @param int $limit
     * @return array|MongoCollection
     */
    private function temperatureHistory($limit = 0)
    {
        $db = new MongoClient();
        $temperatures = $db->selectCollection('testproj', 'temerature_history');

        if ($limit > 0) {
            $cursor = $temperatures->find()->limit($limit);
        } else {
            $cursor = $temperatures->find();
        }

        $temperatures = [];
        foreach ($cursor as $document) {
            $temperatures[] = [
                $document['created_at'],
                $document["ambient_temperature_f"]
            ];
        }

        return $temperatures;
    }

    /**
     * @param int $limit
     * @return string
     */
    private function getTemperatureHistory($limit = 0)
    {
        return json_encode($this->temperatureHistory($limit));
    }

    /**
     * @param int $limit
     */
    public function outPutTemperatureHistory($limit = 0)
    {
        echo $this->toJson($this->temperatureHistory($limit));
    }

    /**
     * @param $thermostatId
     * @param $temperature
     */
    public function changeTemperature($thermostatId, $temperature)
    {
        try {
            echo $this->toJson($this->thermostatRepo->changeTemperature((int) $temperature, $thermostatId));
        } catch (InvalidArgumentException $e) {
            echo $this->respondWithError($e->getMessage(), 400);
        }
    }

    /**
     * Get current thermometer reading.
     */
    public function getCurrentReading()
    {
        echo $this->toJson($this->thermostatRepo->findFirst());
    }
}
