<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jadwal extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_model');
        $this->load->model('user_model');
        $this->load->library('form_validation');
        $this->jadwal_model->autodelete();
    }

    public function index()
    {
        $data['user'] = $this->user_model->getUserByEmail($this->session->userdata('email'));
        $data['judul'] = 'Penjadwalan Ceramah';
        $this->load->view('template/header', $data);
        $this->load->view('jadwal/index');
        $this->load->view('template/footer');
    }

    public function load()
    {
        $event_data = $this->jadwal_model->fetch_all_event();
        foreach ($event_data->result_array() as $row) {
            if ($row['status_jadwal'] == "Belum dikonfirmasi") {
                $data[] = array(
                    'id' => $row['id'],
                    'title' => $row['nama_lembaga'],
                    'color' => '#ce3232',
                    'start' => $row['tanggal_mulai'],
                    'end' => $row['tanggal_akhir']
                );
            } else {
                $data[] = array(
                    'id' => $row['id'],
                    'title' => $row['nama_lembaga'],
                    'color' => '#00ff00',
                    'start' => $row['tanggal_mulai'],
                    'end' => $row['tanggal_akhir']
                );
            }
        }
        echo json_encode($data);
    }

    public function insert()
    {
        if ($this->session->userdata('role_id') == 2) {
            $this->form_validation->set_rules('nama', 'Nama Penanggungjawab', 'required|trim');
            $this->form_validation->set_rules('telp', 'Telepon / WA', 'required|trim');
            $this->form_validation->set_rules('lembaga', 'Nama Lembaga', 'required|trim');
            $this->form_validation->set_rules('waktu', 'Waktu', 'required|trim');
            $this->form_validation->set_rules('telp', 'Telepon / WA', 'required|trim');
            $this->form_validation->set_rules('jalan', 'Jalan', 'required|trim');
            $this->form_validation->set_rules('jmlPria', 'Jumlah Pria', 'required|trim');
            $this->form_validation->set_rules('jmlWanita', 'Jumlah Wanita', 'required|trim');

            if ($this->form_validation->run() == false) {
                $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show" role="alert">
            Data <strong>tidak lengkap</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
                redirect('jadwal/index');
            } else {
                $jenis = $this->input->post('jenis');
                $sifat = $this->input->post('sifat');
                $tema = $this->input->post('tema');
                if ($jenis == '') {
                    $jenis = $this->input->post('jenis2', true);
                    if ($jenis == '') {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show" role="alert">
                    Data <strong>tidak lengkap</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                        redirect('jadwal/index');
                    }
                }

                if ($sifat == '') {
                    $sifat = $this->input->post('sifat2');
                    if ($sifat == '') {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show" role="alert">
                    Data <strong>tidak lengkap</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                        redirect('jadwal/index');
                    }
                }

                if ($tema == '') {
                    $tema = $this->input->post('tema2', true);
                    if ($tema == '') {
                        $this->session->set_flashdata('pesan', '<div class="alert alert-danger alert-dismissible show" role="alert">
                    Data <strong>tidak lengkap</strong>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                    </div>');
                        redirect('jadwal/index');
                    }
                }

                $jalan = $this->input->post('jalan', true);
                $rt_rw = $this->input->post('rt_rw');
                $kel = $this->input->post('kel', true);
                $kec = $this->input->post('kec', true);
                $kota = $this->input->post('kota', true);
                $prov = $this->input->post('prov', true);
                $negara = $this->input->post('negara', true);

                $lokasi = $jalan . " RT/RW " . $rt_rw . " Kel. " . $kel . " Kec. " .
                    $kec . " Kota " . $kota . " " . $prov . ", " .
                    $negara;

                $data = array(
                    'id' => '',
                    'nama'  => $this->input->post('nama', true),
                    'telp' => $this->input->post('telp', true),
                    'nama_lembaga' => $this->input->post('lembaga', true),
                    'waktu' => $this->input->post('waktu', true),
                    'lokasi' => $lokasi,
                    'jenis_acara' => $jenis,
                    'sifat_acara' => $sifat,
                    'jml_pria' => $this->input->post('jmlPria', true),
                    'jml_wanita' => $this->input->post('jmlWanita', true),
                    'tamu' => $this->input->post('tamu', true),
                    'karakteristik' => $this->input->post('karakter', true),
                    'saran_tema' => $tema,
                    'status_jadwal' => 'Belum dikonfirmasi',
                    'file_cl' => '',
                    'date_created' => date('Y-m-d', time()),
                    'tanggal_mulai' => $this->input->post('start', true),
                    'tanggal_akhir' => $this->input->post('end', true),
                    'id_user' => $this->input->post('id', true)
                );

                $this->jadwal_model->insert_event($data);
                $this->session->set_flashdata('pesan', '<div class="alert alert-success alert-dismissible show" role="alert">
            Jadwal berhasil <strong>ditambahkan</strong>
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
             	<span aria-hidden="true">&times;</span>
            </button>
            </div>');
                $this->session->set_flashdata('berhasil', '<a href="' . base_url('jadwalpdf/index/' . $this->db->insert_id()) . '">Link pdf formulir rencana penjadwalan ceramah<a>');
                redirect('jadwal/index');
            }
        } else {
            redirect('home');
        }
    }

    public function uploadFile()
    {
        if ($this->session->userdata('role_id') == 2) {
            $data = [
                'file_cl' => $this->_uploadFile()
            ];

            $user = $this->user_model->getUserByEmail($this->session->userdata('email'));
            $id = $this->jadwal_model->getIdEvent($user['id']);
            $this->jadwal_model->update_file($data, $id);
            redirect('jadwal/index');
        } else {
            redirect('home');
        }
    }

    private function _uploadFile()
    {
        $config['upload_path'] = './assets/docs';
        $config['allowed_types'] = 'doc|docx|pdf';
        $this->load->library('upload', $config);
        $file = $this->upload->do_upload('cl') . $this->upload->data('file_name');
        return substr($file, 1);
    }


    function delete()
    {
        if ($this->input->post('id')) {
            $this->jadwal_model->delete_event($this->input->post('id'));
        }
    }
}
