<?php
Class Daftarpdf extends CI_Controller{
    
    function __construct() {
        parent::__construct();
        $this->load->library('pdf');
        $this->load->model('m_santri');
    }
    
    function index(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(270,7,'PONDOK MODERN AL-JAUHAR DURI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(270,7,'NAMA-NAMA SANTRI YANG MENDAFTAR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',6);
        $pdf->Cell(20,6,'No Pendaftaran',1,0);
        $pdf->Cell(30,6,'Nama Lengkap',1,0);
        $pdf->Cell(30,6,'Jenis Kelamin',1,0);
        $pdf->Cell(20,6,'Nomor HP',1,0);
        $pdf->Cell(20,6,'Kota Asal',1,0);
        $pdf->Cell(20,6,'Kabupaten',1,0);
        $pdf->Cell(30,6,'Tempat Lahir',1,0);
        $pdf->Cell(30,6,'Tanggal Lahir',1,0);
        $pdf->Cell(12,6,'Anak ke',1,0);
        $pdf->Cell(40,6,'Alamat Rumah',1,0);
        $pdf->Cell(40,6,'Sekolah Asal',1,0);
        $pdf->Cell(30,6,'Pendidikan Terakhir',1,0);
        $pdf->Cell(30,6,'Program Yang Dituju',1,0);
        $pdf->Cell(40,6,'Nama Lengkap Orang Tua',1,0);
        $pdf->Cell(40,6,'Pekerjaan Orang Tua',1,0);
        $pdf->Cell(20,6,'Nomor HP Orang Tua',1,0);
        $pdf->Cell(40,6,'Alamat Rumah Orang Tua',1,0);
        $pdf->Cell(20,6,'Status Santri',1,1);
        $pdf->SetFont('Arial','',6);
        $santri= $this->m_santri->getAll();
        foreach ($santri as $row){
            $pdf->Cell(20,6,$row->no_pendaftaran,1,0);
            $pdf->Cell(30,6,$row->nama_lengkap,1,0);
            $pdf->Cell(30,6,$row->jenis_kelamin,1,0);
            $pdf->Cell(20,6,$row->nomor_HP,1,0);
            $pdf->Cell(20,6,$row->kota_asal,1,0);
            $pdf->Cell(20,6,$row->kabupaten,1,0);
            $pdf->Cell(30,6,$row->tempat_lahir,1,0);
            $pdf->Cell(30,6,$row->tanggal_lahir,1,0);
            $pdf->Cell(12,6,$row->anak_ke,1,0);
            $pdf->Cell(40,6,$row->alamat_rumah,1,0);
            $pdf->Cell(40,6,$row->sekolah_asal,1,0);
            $pdf->Cell(30,6,$row->pendidikan_terakhir,1,0);
            $pdf->Cell(30,6,$row->program_yang_dituju,1,0);
            $pdf->Cell(40,6,$row->nama_lengkap_ortu,1,0);
            $pdf->Cell(40,6,$row->pekerjaan_ortu,1,0);
            $pdf->Cell(20,6,$row->noHP_ortu,1,0);
            $pdf->Cell(40,6,$row->alamat_rumah_ortu,1,0);
            $pdf->Cell(20,6,$row->status_santri,1,1);
                       
        }
        $pdf->Output();
    }
    public function santripdf(){
        $pdf = new FPDF('l','mm','A4');
        // membuat halaman baru
        $pdf->AddPage();
        // setting jenis font yang akan digunakan
        $pdf->SetFont('Arial','B',16);
        // mencetak string 
        $pdf->Cell(270,7,'PONDOK MODERN AL-JAUHAR DURI',0,1,'C');
        $pdf->SetFont('Arial','B',12);
        $pdf->Cell(270,7,'NAMA-NAMA SANTRI YANG MENDAFTAR',0,1,'C');
        // Memberikan space kebawah agar tidak terlalu rapat
        $pdf->Cell(10,7,'',0,1);
        $pdf->SetFont('Arial','B',8);
        $pdf->Cell(20,6,'No Pendaftaran',1,0);
        $pdf->Cell(30,6,'Nama Lengkap',1,0);
        $pdf->Cell(30,6,'Jenis Kelamin',1,0);
        $pdf->Cell(20,6,'Nomor HP',1,0);
        $pdf->Cell(20,6,'Kota Asal',1,0);
        $pdf->Cell(20,6,'Kabupaten',1,0);
        $pdf->Cell(30,6,'Tempat Lahir',1,0);
        $pdf->Cell(30,6,'Tanggal Lahir',1,0);
        $pdf->Cell(12,6,'Anak ke',1,0);
        $pdf->Cell(40,6,'Alamat Rumah',1,0);
        $pdf->Cell(40,6,'Sekolah Asal',1,0);
        $pdf->Cell(30,6,'Pendidikan Terakhir',1,0);
        $pdf->Cell(30,6,'Program Yang Dituju',1,0);
        $pdf->Cell(40,6,'Nama Lengkap Orang Tua',1,0);
        $pdf->Cell(40,6,'Pekerjaan Orang Tua',1,0);
        $pdf->Cell(20,6,'Nomor HP Orang Tua',1,0);
        $pdf->Cell(40,6,'Alamat Rumah Orang Tua',1,0);
        $pdf->Cell(20,6,'Status Satri',1,1);

        $pdf->SetFont('Arial','',8);
        $santri= $this->m_santri->getAll();
        foreach ($santri as $row){
            $pdf->Cell(20,6,$row->no_pendaftaran,1,0);
            $pdf->Cell(30,6,$row->nama_lengkap,1,0);
            $pdf->Cell(30,6,$row->jenis_kelamin,1,0);
            $pdf->Cell(20,6,$row->nomor_HP,1,0);
            $pdf->Cell(20,6,$row->kota_asal,1,0);
            $pdf->Cell(20,6,$row->kabupaten,1,0);
            $pdf->Cell(30,6,$row->tempat_lahir,1,0);
            $pdf->Cell(30,6,$row->tanggal_lahir,1,0);
            $pdf->Cell(12,6,$row->anak_ke,1,0);
            $pdf->Cell(40,6,$row->alamat_rumah,1,0);
            $pdf->Cell(40,6,$row->sekolah_asal,1,0);
            $pdf->Cell(30,6,$row->pendidikan_terakhir,1,0);
            $pdf->Cell(30,6,$row->program_yang_dituju,1,0);
            $pdf->Cell(40,6,$row->nama_lengkap_ortu,1,0);
            $pdf->Cell(40,6,$row->pekerjaan_ortu,1,0);
            $pdf->Cell(20,6,$row->noHP_ortu,1,0);
            $pdf->Cell(40,6,$row->alamat_rumah_ortu,1,0);
            $pdf->Cell(20,6,$row->status_santri,1,1);
            
        }
        $pdf->Output();

    }
}