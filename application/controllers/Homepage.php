<?php
class Homepage extends CI_Controller
{
 public function index()
 {
 $data['judul']='Halaman Beranda';
 $this->load->view('templates/header',$data);
 $this->load->view('home/index');
 $this->load->view('templates/footer');
Masukkan perintah root
Masukkan nama
database
 }
}
?>