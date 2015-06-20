<?php
namespace App\Domain\Devices\Thermostats;

class Thermostat extends \CI_Model
{
    public $temperature;

    public function __construct()
    {
        parent::__construct();
    }

    public function save()
    {
        $this->db->insert('thermo_temp', $this);
    }
}
