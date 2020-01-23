<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
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
            $data['judul'] = 'Portal Sekpim';
            $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $this->load->view('template/header', $data);
            $this->load->view('admin/index');
            $this->load->view('template/footer');
        } else {
            redirect('home');
        }
    }

    public function notif()
    {
        if ($this->session->userdata('role_id') == 1) {
            $data['judul'] = 'Portal Sekpim';
            $data['admin'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
            $data['notif'] = $this->db->get('kalender_ceramah')->result_array();
            $this->load->view('template/header', $data);
            $this->load->view('admin/notif');
            $this->load->view('template/footer');
        } else {
            redirect('home');
        }
    }

    public function update($id)
    {
        if ($this->session->userdata('role_id') == 1) {
            $this->jadwal_model->update_event(['status_jadwal' => 'Sudah dikonfirmasi'], $id);
            redirect('admin/notif');
        } else {
            redirect('home');
        }
    }
}
