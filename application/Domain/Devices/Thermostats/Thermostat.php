<?php
namespace App\Domain\Devices\Thermostats;

use DateTime;
use MongoClient;
use MongoDate;

/**
 * Class Thermostat
 * @package App\Domain\Devices\Thermostats
 */
class Thermostat
{

    /**
     * @var string
     */
    private $db = 'testproj';

    /**
     * @var string
     */
    private $collection = 'temerature_history';

    /**
     * @var MongoClient
     */
    private $mongo;

    /**
     * @param MongoClient $mongo
     */
    public function __construct(MongoClient $mongo)
    {
        $this->mongo = $mongo;
    }

    /**
     * Log thermostats temperatures.
     *
     * @param $data
     */
    public function logTemperatures($data)
    {
        $temperatures = $this->mongo->selectCollection($this->db, $this->collection);
        $temperatures->insert([
            'device_id' => $data['device_id'],
            'name' => $data['name'],
            'temperature_scale' => $data['temperature_scale'],
            'target_temperature_f' => $data['target_temperature_f'],
            'ambient_temperature_f' => $data['ambient_temperature_f'],
            'created_at' => new MongoDate((new DateTime())->getTimestamp())
        ]);
    }

    /**
     * Log updated thermostat temperatures
     *
     * @param $temperature
     * @param $thermostatId
     */
    public function logUpdatedTemperaturesFromId($temperature, $thermostatId)
    {
        $temperatures = $this->mongo->selectCollection($this->db, $this->collection);
        $cursor= $temperatures->find(["device_id" => $thermostatId])->sort(["created_at" => -1])->limit(1);

        foreach ($cursor as $doc) {
            $temperatures->insert([
                'device_id' => $doc['device_id'],
                'name' => $doc['name'],
                'temperature_scale' => $doc['temperature_scale'],
                'target_temperature_f' => $temperature,
                'ambient_temperature_f' => $doc['ambient_temperature_f'],
                'created_at' => new MongoDate((new DateTime())->getTimestamp())
            ]);
        }
    }

    /**
     * Get daily reporting information
     *
     * @todo FIND A BETTER WAY TO DO THIS; TOO TIRED TO THINK;
     *
     * @return mixed
     */
    public function getReportingInformation()
    {
        $collection = $this->mongo->selectCollection($this->db, $this->collection);

        $listOfIds = $collection->distinct("device_id");

        $report = [];

        foreach ($listOfIds as $id) {
            $entries = $collection->find(["device_id" => $id])->sort(["created_at" => -1]);

            foreach ($entries as $entry) {
                $entry['created_at'] = date('Y-m-d', $entry['created_at']->sec);
                $report[$id][] = $entry;
            }

            $dates = [];

            for ($i = 0; $i < count($report[$id]); $i++) {
                if (array_key_exists($report[$id][$i]['created_at'], $dates)) {
                    $dates[$report[$id][$i]['created_at']][] = $report[$id][$i]['target_temperature_f'];
                } else {
                    $dates[] = $report[$id][$i]['created_at'];
                    $dates[$report[$id][$i]['created_at']][] = $report[$id][$i]['target_temperature_f'];
                }

            }

            foreach ($dates as $key => $value) {
                if (is_int($key)) {
                    unset($dates[$key]);
                } else {
                    $dates[$key] = (int) (array_sum($value) / count($value));
                }
            }

            $report[$id]['report']= ['device_name' => $report[$id][0]['name'], 'averageTempByDay' => $dates];
        }

        return $report;
    }
}
