<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{

    public function index()
    {
        $data['judul'] = 'Penjadwalan Ceramah';
        $this->load->view('template/header', $data);
        $this->load->view('jadwal/index');
        $this->load->view('template/footer');
    }
}