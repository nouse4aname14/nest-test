<?php
use App\Domain\Traits\HttpResponseTrait;

defined('BASEPATH') OR exit('No direct script access allowed');

class Thermostat extends CI_Controller
{
    public $thermostatRepo;

    use HttpResponseTrait;

    public function __construct()
    {
        parent::__construct();
        $this->thermostatRepo = $this->container['App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface'];
    }

    public function index()
    {
        $data = $this->thermostatRepo->findFirst();
        $data['history'] = $this->getTemperatureHistory(15);
        $this->load->view('thermostat', $data);
    }

    public function temperatureHistory($limit = 0)
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

    public function getTemperatureHistory($limit = 0)
    {
        return json_encode($this->temperatureHistory($limit));
    }

    public function outPutTemperatureHistory($limit = 0)
    {
        echo $this->toJson($this->temperatureHistory($limit));
    }

    public function changeTemperature($thermostatId, $temperature)
    {
        try {
            echo $this->toJson($this->thermostatRepo->changeTemperature((int) $temperature, $thermostatId));
        } catch(InvalidArgumentException $e) {
            echo $this->respondWithError($e->getMessage(), 400);
        }
    }

    public function getCurrentReading()
    {
        echo $this->toJson($this->thermostatRepo->findFirst());
    }
}
