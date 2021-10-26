<?php
class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        //codeigniter : write less do more
    }
    public function index()
    {
        $data['judul'] = 'judul';
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
