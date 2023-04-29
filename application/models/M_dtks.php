<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_dtks extends CI_Model
{

  private $table = 'dtks'; //This is table name
  private $pk = 'id_dtks'; //this is primary key


  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetAll($id = null)
  {
    $this->db->order_by($this->pk, 'desc');
    if ($id != null) {
      $this->db->where('id_dtks', $id);
    }
    return $this->db->get($this->table); //u can use library cidbget
  }
  public function GetById($id)
  {
    $this->db->join('user', 'user.id_user = dtks.id_user');
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
    $data = $this->M_dtks->GetAll($id)->row();

    $this->db->where($this->pk, $id);
    $this->db->delete($this->table);
  }
}
