<?php 

class About extends Controller {
    public function index($nama = 'Luthfy', $pekerjaan = 'Pelajar', $umur = 18)
    {
        $data['nama'] = 'Luthfy';
        $data['pekerjaan'] = $pekerjaan;
        $data['umur'] = $umur;
        $data['judul'] = 'About Me';
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




