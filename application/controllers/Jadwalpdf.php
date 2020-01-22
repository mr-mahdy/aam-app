<?php
ob_start();
class Jadwalpdf extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('jadwal_model');
        $this->load->library('pdf');
        $this->jadwal_model->autodelete();
    }

    public function index($id)
    {
        $data = $this->jadwal_model->getEventById($id);

        // intance object dan memberikan pengaturan halaman PDF
        $pdf = new FPDF('l', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(300, 7, 'AAM AMIRUDDIN OFFICIAL', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(300, 7, 'Formulir Rencana Penjadwalan Ceramah', 0, 1, 'C');

        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 12);

        $pdf->Cell(80, 6, 'Nama Penanggungjawab : ', 0, 0);
        $pdf->Cell(50, 6, $data['nama'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Nomor telp dan WA : ', 0, 0);
        $pdf->Cell(50, 6, $data['telp'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Nama Lembaga : ', 0, 0);
        $pdf->Cell(50, 6, $data['nama_lembaga'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Hari dan tanggal : ', 0, 0);
        $pdf->Cell(50, 6, date('l, d F Y', strtotime($data['tanggal_mulai'])), 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Waktu : ', 0, 0);
        $pdf->Cell(50, 6, $data['waktu'], 0, 1);
        // . ", Pukul : " . date('H', strtotime($data['tanggal_mulai']))
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Lokasi : ', 0, 0);
        $pdf->Cell(200, 6, $data['lokasi'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Jenis Acara : ', 0, 0);
        $pdf->Cell(50, 6, $data['jenis_acara'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Sifat Acara : ', 0, 0);
        $pdf->Cell(50, 6, $data['sifat_acara'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Perkiraan Jumlah jamaah : ', 0, 0);
        $pdf->Cell(50, 6, 'dewasa (pria) = ' . $data['jml_pria'], 0, 1);
        $pdf->Cell(80, 6, '', 0, 0);
        $pdf->Cell(50, 6, 'dewasa (wanita) = ' . $data['jml_wanita'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Tamu tokoh yang diundang : ', 0, 0);
        $pdf->Cell(50, 6, $data['tamu'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Gambaran karakteristik jamaah : ', 0, 0);
        $pdf->Cell(50, 6, $data['karakteristik'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Saran tema/judul materi : ', 0, 0);
        $pdf->Cell(50, 6, $data['saran_tema'], 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);

        $pdf->Output();
    }
}
