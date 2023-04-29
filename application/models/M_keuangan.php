<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_keuangan extends CI_Model
{

  private $table = 'keuangan'; //This is table name
  private $pk = 'id_saldo'; //this is primary key

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
    if ($start_date && $end_date) {
      $this->db->order_by('tgl_keuangan', 'desc');
      $this->db->where('tgl_keuangan BETWEEN "' . date('Y-m-d', strtotime($start_date)) . '" and "' . date('Y-m-d', strtotime($end_date)) . '"');
    }
    if ($kategori) {
      $this->db->where('type', $kategori);
    }
    if ($id != null) {
      $this->db->where('id_saldo', $id);
    }
    return $this->db->get($this->table); //u can use library cidbget
  }

  public function GetById($id)
  {
    $this->db->join('user', 'user.id_user = keuangan.id_user');
    $this->db->where($this->pk, $id); //u can use cidbwhere
    return $this->db->get($this->table)->row_array();
  }
  public function jumlah()
  {
    // $this->db->select('SUM(saldo) as saldo_akhir');
    $this->db->select('saldo');
    $this->db->from('keuangan');
    $this->db->order_by($this->pk, 'desc');
    $this->db->limit(1);
    return $this->db->get()->row();
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
    $data = $this->M_keuangan->GetAll($id)->row();

    $this->db->where($this->pk, $id);
    $this->db->delete($this->table);
  }

  function cek_id($code, $id = null)
  {
    $this->db->from('keuangan');
    $this->db->where('id_saldo', $code);
    if ($id != null) {
      $this->db->where('id_saldo !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }
}
