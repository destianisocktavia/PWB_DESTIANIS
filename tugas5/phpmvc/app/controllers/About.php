<?php
class About extends Controller
{
    public function index($nama = 'Destianis', $pekerjaan = 'Programmer', $kelas = 'Karyawan')
    {
        $data['judul'] = 'About Me';
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['kelas'] = $kelas;
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {
        $data['judul'] = 'Pages';
        $this->view('templates/header', $data);
        $this->view('about/page');
        $this->view('templates/footer');
    }
}