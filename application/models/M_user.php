<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_user extends CI_Model
{

  private $table = 'user'; //This is table name
  private $pk = 'id_user'; //this is primary key


  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  function get($id = null)
  {
    $this->db->from('user');
    if ($id != null) {
      $this->db->where('id_user', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function GetAll()
  {
    $this->db->order_by($this->pk, 'desc');
    return $this->db->get($this->table); //u can use library cidbget
  }
  public function save($data)
  {
    if (!empty($_FILES['img_user']['name'])) {
      $upload = $this->_do_uploadimg();
      $data['img_user'] = $upload;
    }
    return $this->db->insert($this->table, $data);
  }

  private function _do_uploadimg()
  {
    unset($config);
    $config['upload_path']    = './upload/img/';
    $config['allowed_types']  = '.gif|jpg|png|jpeg';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Foto User' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('img_user')) {
      $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
      redirect('user/tambah', 'refresh');
    }
    return $this->upload->data('file_name');
  }

  public function GetById($id)
  {
    $this->db->where($this->pk, $id); //u can use cidbwhere
    return $this->db->get($this->table)->row_array();
  }

  public function update($id, $data)
  {
    if (!empty($_FILES['img_user']['name'])) {
      $upload = $this->_do_uploadimg_update();
      $data['img_user'] = $upload;
      $file_img = './upload/img/' . $this->input->post('old_img');
      unlink($file_img);
    }
    $this->db->where($this->pk, $id);
    return $this->db->update($this->table, $data);
  }

  private function _do_uploadimg_update()
  {
    unset($config);
    $config['upload_path']    = './upload/img/';
    $config['allowed_types']  = '.gif|jpg|png|jpeg';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Foto User' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('img_user')) {
      $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
      redirect('user/edit/' . $this->input->post('id_user'), 'refresh');
    }
    return $this->upload->data('file_name');
  }

  public function delete($id)
  {
    $data = $this->M_user->GetAll($id)->row();
    if ($data->img_user != null) {
      $file_img = './upload/img/' . $data->img_user;
      unlink($file_img);
    }
    $this->db->where($this->pk, $id);
    $this->db->delete($this->table);
  }

  function cek_nama($code, $id = null)
  {
    $this->db->from('user');
    $this->db->where('nama', $code);
    if ($id != null) {
      $this->db->where('id_user !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  function cek_email($code, $id = null)
  {
    $this->db->from('user');
    $this->db->where('email', $code);
    if ($id != null) {
      $this->db->where('id_user !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  function cek_token($code, $id = null)
  {
    $this->db->from('user_token');
    $this->db->where('token', $code);
    if ($id != null) {
      $this->db->where('token_id !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function edit($post)
  {
    $params = [
      'id_user' => $post['id_user'],
      'nama' => $post['nama'],
    ];
    if (!empty($_FILES['img_user']['name'])) {
      $upload = $this->_do_uploadimg_update();
      $params['img_user'] = $upload;
      $file_img = './upload/img/' . $this->input->post('old_img');
      unlink($file_img);
    }
    $this->db->where('id_user', $post['id_user']);
    $this->db->update('user', $params);
  }

  public function ubah_password($post)
  {
    if (!empty($post['sandi_baru'] && $post['konf_password'])) {
      $params['password'] = md5($post['sandi_baru']);
    }
    $this->db->where('id_user', $post['id_user']);
    $this->db->update('user', $params);
  }
}
