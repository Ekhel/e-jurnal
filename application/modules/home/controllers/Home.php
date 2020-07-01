<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends MX_Controller{
  public function __construct()
	{
			parent::__construct();
	}

  public function index()
  {
    $data['title'] = 'e - Jurnal | Dinas Pendidikan';
    $this->template->load('MasterLayout','Home',$data);
  }
}
