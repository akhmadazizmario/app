<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_surat_masuk extends CI_Model
{

  private $table = 'surat_masuk'; //This is table name
  private $pk = 'id_surat'; //this is primary key


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
      $this->db->where('id_surat', $id);
    }
    if ($start_date && $end_date) {
      $this->db->where('tgl_terima BETWEEN "' . date('Y-m-d', strtotime($start_date)) . '" and "' . date('Y-m-d', strtotime($end_date)) . '"');
    }
    return $this->db->get($this->table); //u can use library cidbget
  }
  public function GetById($id)
  {
    $this->db->join('user', 'user.id_user = surat_masuk.id_user');
    $this->db->where($this->pk, $id); //u can use cidbwhere
    return $this->db->get($this->table)->row_array();
  }
  public function save($data)
  {
    if (!empty($_FILES['upload_file']['name'])) {
      $upload = $this->_do_uploadfile();
      $data['upload_file'] = $upload;
    }
    return $this->db->insert($this->table, $data);
  }

  private function _do_uploadfile()
  {
    unset($config);
    $config['upload_path']    = './upload/surat_keluar/';
    $config['allowed_types']  = '.doc|docx|pdf|jpeg|jpg|png';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Surat Masuk' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('upload_file')) {
      $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
      redirect('surat_masuk/tambah', 'refresh');
    }
    return $this->upload->data('file_name');
  }

  public function update($id, $data)
  {
    if (!empty($_FILES['upload_file']['name'])) {
      $upload = $this->_do_uploadfile_update();
      $data['upload_file'] = $upload;
      $file_img = './upload/surat_masuk/' . $this->input->post('old_file');
      unlink($file_img);
    }
    $this->db->where($this->pk, $id);
    return $this->db->update($this->table, $data);
  }

  private function _do_uploadfile_update()
  {
    unset($config);
    $config['upload_path']    = './upload/surat_keluar/';
    $config['allowed_types']  = '.doc|docx|pdf|jpg|jpeg|png';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Surat Keluar' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('upload_file')) {
      $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
      redirect('surat_masuk/edit/' . $this->input->post('id_surat'), 'refresh');
    }
    return $this->upload->data('file_name');
  }


  public function delete($id)
  {
    $data = $this->M_surat_masuk->GetAll($id)->row();
    if ($data->upload_file != null) {
      $file_img = './upload/surat_masuk/' . $data->upload_file;
      unlink($file_img);
    }
    $this->db->where($this->pk, $id);
    $this->db->delete($this->table);
  }

  function cek_no_surat($code, $id = null)
  {
    $this->db->from('surat_masuk');
    $this->db->where('nomor_surat', $code);
    if ($id != null) {
      $this->db->where('nomor_surat !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function getSuratMasuk()
  {
    $this->db->select('DATE(tgl_surat) as tanggal', 'COUNT(id_surat) AS jumlah');
    $this->db->group_by('tanggal');
    return $this->db->get('surat_masuk');
  }
}
