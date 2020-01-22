<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_model');
        $this->jadwal_model->autodelete();
    }
    public function index()
    {
        if ($this->session->userdata('role_id') == 1) {
            redirect('admin');
        } else {
            $data['judul'] = 'Portal Website Aam Amiruddin Official';
            $this->load->view('template/header', $data);
            $this->load->view('home/index');
            $this->load->view('template/footer');
        }
    }
}
