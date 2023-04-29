<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_jenis_masalah extends CI_Model
{

  private $table = 'jenis_masalah'; //This is table name
  private $pk = 'id_jenis_masalah'; //this is primary key


  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetAll($id = null)
  {
    $this->db->order_by($this->pk, 'desc');
    if ($id != null) {
      $this->db->where('id_jenis_masalah', $id);
    }
    return $this->db->get($this->table); //u can use library cidbget
  }

  public function GetById($id)
  {
    $this->db->where($this->pk, $id); //u can use cidbwhere
    return $this->db->get($this->table)->row_array();
  }

  public function save($data)
  {
    return $this->db->insert($this->table, $data);
  }

  function cek_jenis_masalah($code, $id = null)
  {
    $this->db->from('jenis_masalah');
    $this->db->where('jenis_masalah', $code);
    if ($id != null) {
      $this->db->where('id_jenis_masalah !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function update($id, $data)
  {
    $this->db->where($this->pk, $id);
    return $this->db->update($this->table, $data);
  }

  public function delete($id)
  {
    $data = $this->M_jenis_masalah->GetAll($id)->row();

    $this->db->where($this->pk, $id);
    $this->db->delete($this->table);
  }
}
