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
        // intance object dan memberikan pengaturan halaman PDF
        $pdf = new FPDF('l', 'mm', 'A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial', 'B', 16);
        // mencetak string 
        $pdf->Cell(300, 7, 'AAM AMIRUDDIN OFFICIAL', 0, 1, 'C');
        $pdf->SetFont('Arial', 'B', 14);
        $pdf->Cell(300, 7, 'Surat Konfirmasi Kesediaan', 0, 1, 'C');
        $pdf->Cell(300, 7, '(confirmation Letter)', 0, 1, 'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10, 7, '', 0, 1);
        $pdf->Cell(10, 7, '', 0, 1);

        $pdf->SetFont('Arial', 'B', 12);

        $pdf->Cell(80, 6, 'Nama Lengkap : ', 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Alamat : ', 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'No telp : ', 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Email : ', 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Nama Lembaga : ', 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Jabatan : ', 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);
        $pdf->Cell(80, 6, 'Susunan Acara : ', 0, 1);
        $pdf->Cell(10, 4, '', 0, 1);

        $pdf->Output();
    }
}
