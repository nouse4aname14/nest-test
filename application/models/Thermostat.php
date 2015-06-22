<?php
class Thermostat extends CI_Model
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

    public function log()
    {
        //var_dump($this->db);exit;
    }
}

