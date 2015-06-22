<?php
namespace App\Domain\Devices\Thermostats;

use MongoClient;

/**
 * Class Thermostat
 * @package App\Domain\Devices\Thermostats
 */
class Thermostat
{
    /**
     * Log thermostats temperatures.
     *
     * @param $data
     */
    public function logTemperatures($data)
    {
        $db = new MongoClient();
        $temperatures = $db->selectCollection('testproj', 'temerature_history');
        $temperatures->insert([
            'device_id' => $data['device_id'],
            'name' => $data['name'],
            'temperature_scale' => $data['temperature_scale'],
            'target_temperature_f' => $data['target_temperature_f'],
            'ambient_temperature_f' => $data['ambient_temperature_f'],
            'created_at' => date('Y-m-d H:i:s')
        ]);
    }
}
