<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_donatur extends CI_Model
{

  private $table = 'data_donatur'; //This is table name
  private $pk = 'id_donatur'; //this is primary key


  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetAll($id = null)
  {
    $start_date = $this->input->post('tgl_awal');
    $end_date = $this->input->post('tgl_akhir');
    $kategori = $this->input->post('kategori');

    $this->db->order_by($this->pk, 'desc');
    if ($id != null) {
      $this->db->where('id_donatur', $id);
    }
    if ($start_date && $end_date) {
      $this->db->where('tgl_donatur BETWEEN "' . date('Y-m-d', strtotime($start_date)) . '" and "' . date('Y-m-d', strtotime($end_date)) . '"');
    }
    if ($kategori) {
      $this->db->where('kategori', $kategori);
    }
    return $this->db->get($this->table); //u can use library cidbget
  }
  public function GetById($id)
  {
    $this->db->join('user', 'user.id_user = data_donatur.id_user');
    $this->db->where($this->pk, $id); //u can use cidbwhere
    return $this->db->get($this->table)->row_array();
  }

  public function save($data)
  {
    return $this->db->insert($this->table, $data);
  }

  public function update($id, $data)
  {
    $this->db->where($this->pk, $id);
    return $this->db->update($this->table, $data);
  }

  public function delete($id)
  {
    $data = $this->M_donatur->GetAll($id)->row();

    $this->db->where($this->pk, $id);
    $this->db->delete($this->table);
  }

  function cek_id($code, $id = null)
  {
    $this->db->from('data_donatur');
    $this->db->where('id_donatur', $code);
    if ($id != null) {
      $this->db->where('id_donatur !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }
}
