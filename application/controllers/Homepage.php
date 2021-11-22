<?php
class Homepage extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Barang_model');
        $this->load->Library('form_validation');
        //codeigniter : write less do more
    }
    public function index()
    {
        $data['judul'] = 'judul';
        $data['user'] = $this->Barang_model->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->view('templates/header', $data);
        $this->load->view('templates/sidebar');
        $this->load->view('templates/topbar');
        $this->load->view('home/index');
        $this->load->view('templates/footer');
    }
}
