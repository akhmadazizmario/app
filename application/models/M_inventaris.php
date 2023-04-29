<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_inventaris extends CI_Model
{

  private $table = 'inventaris'; //This is table name
  private $pk = 'id_barang'; //this is primary key


  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetAll($id = null)
  {
    $start_date = $this->input->post('tgl_awal');
    $end_date = $this->input->post('tgl_akhir');

    $this->db->order_by($this->pk, 'desc');
    if ($id != null) {
      $this->db->where('id_barang', $id);
    }
    if ($start_date && $end_date) {
      $this->db->where('tgl_terima BETWEEN "' . date('Y-m-d', strtotime($start_date)) . '" and "' . date('Y-m-d', strtotime($end_date)) . '"');
    }
    return $this->db->get($this->table); //u can use library cidbget
  }
  public function GetById($id)
  {
    $this->db->join('user', 'user.id_user = inventaris.id_user');
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
    $data = $this->M_inventaris->GetAll($id)->row();

    $this->db->where($this->pk, $id);
    $this->db->delete($this->table);
  }
}
