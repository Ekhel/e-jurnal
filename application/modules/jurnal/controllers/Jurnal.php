<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends MX_Controller{
  public function __construct()
	{
      $this->load->model('M_jurnal');
			parent::__construct();
	}

  public function index()
  {
    $data['title'] = 'Data Rekap Jurnal';
    $this->template->load('MasterLayout','r-jurnal',$data);
  }

  public function create()
  {
    $data['title'] = 'Input Buku Kerja';
    $this->template->load('MasterLayout','c-jurnal',$data);
  }

  function create_buku_kerja()
  {
    $nama = $this->input->post('nama');
    $title = $this->input->post('title');
    $deskripsi = $this->input->post('deskripsi');
    $data = $this->input->post('date');

    $data = array(
      'nama'      => $nama,
      'title'     => $title,
      'deskripsi' => $deskripsi,
      'date'      => $data
    );

    if($data){
      $this->M_jurnal->create($data);
      $this->session->set_flashdata("create","
            <div class='ui success message'>
              <i class='close icon'></i>
              <div class='header'>
                Buku Kerja Hari ini Telah Dikirim!
              </div>
            </div>");
      redirect('jurnal');
    }
    else {
      $this->session->set_flashdata("error","
            <div class='ui negative message'>
              <i class='close icon'></i>
              <div class='header'>
                Periksa Inputan Anda!
              </div>
            </div>");
      redirect('jurnal');
    }
  }
}
