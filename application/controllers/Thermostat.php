<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thermostat extends CI_Controller
{

    public $thermostatRepo;

    public function __construct()
    {
        parent::__construct();
        $this->thermostatRepo = $this->container['App\Domain\Devices\Thermostats\Interfaces\ThermostatRepositoryInterface'];
    }

    public function index()
    {
        $data = $this->thermostatRepo->findFirst();
        $this->load->view('thermostat', $data);
    }
}
