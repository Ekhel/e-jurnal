<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Jurnal extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
	}

  public function index()
  {
    $data['title'] = 'Data Rekap Jurnal';
    $this->template->load('Layout','r-jurnal',$data);
  }
}
