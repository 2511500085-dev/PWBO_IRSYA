<?php

class About extends controllers {
    public function index($nama = 'kuromi', $pekerjaan = 'bonekaa lucuuu')
    {
        $data['nama'] = $nama;
        $data['pekerjaan'] = $pekerjaan;
        $data['judul'] = 'about me';
        $this->view('templates/header', $data);
        $this->view('about/index', $data);
        $this->view('templates/footer');
    }
    public function page()
    {   
        $data['judul'] = 'pages';
        $this->view('templates/header', $data);
        $this->view('About/page');
        $this->view('templates/footer');
    }
}