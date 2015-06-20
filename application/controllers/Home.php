<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('homepage');
    }

    public function getitall()
    {
        $data = json_decode(trim(file_get_contents('php://input')));

        var_dump($data->thermostats->nice);
    }
}
