<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jurnal extends CI_model{
  function create($data)
  {
    $this->db->insert('tb_jurnal', $data);
  }
}
