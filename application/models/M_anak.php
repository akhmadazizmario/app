<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_anak extends CI_Model
{

  private $table = 'data_siswa';
  private $table2 = 'detail_santri'; //This is table name
  private $pk = 'nik_anak'; //this is primary key
  private $pk2 = 'nik_anak';
  private $id  = 'id_anak';


  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  public function GetAll()
  {
    $pendidikan =  $this->input->post('pendidikan');
    $tahun_masuk = $this->input->post('tahun_masuk');
    $status = $this->input->post('status');;


    $this->db->order_by($this->id, 'desc');
    if ($this->input->post('umur') == 1) {
      $this->db->where('umur BETWEEN "7" and "11"');
    }
    if ($this->input->post('umur') == 2) {
      $this->db->where('umur BETWEEN "12" and "14"');
    }
    if ($this->input->post('umur') == 3) {
      $this->db->where('umur BETWEEN "15" and "20"');
    }
    if ($pendidikan) {
      $this->db->where('pendidikan', $pendidikan);
    }
    if ($tahun_masuk) {
      $this->db->where('tahun_masuk', $tahun_masuk);
    }
    if ($status) {
      $this->db->where('status', $status);
    }
    return $this->db->get($this->table); //u can use library cidbget
  }

  public function GetAlldetail_anak()
  {
    $this->db->order_by($this->pk2, 'desc');
    return $this->db->get($this->table2); //u can use library cidbget
  }

  public function save($data_anak)
  {
    if (!empty($_FILES['foto_anak']['name'])) {
      $upload = $this->_do_uploadimg();
      $data_anak['foto_anak'] = $upload;
    }
    return $this->db->insert($this->table, $data_anak);
  }

  private function _do_uploadimg()
  {
    unset($config);
    $config['upload_path']    = './upload/foto_anak/';
    $config['allowed_types']  = '.gif|jpg|png|jpeg|jfif';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Foto Anak' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('foto_anak')) {
      $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
      redirect('anak/tambah', 'refresh');
    }
    return $this->upload->data('file_name');
  }

  public function savedetail($data_detail)
  {
    return $this->db->insert($this->table2, $data_detail);
  }

  public function GetById($id)
  {

    $this->db->where($this->pk, $id); //u can use cidbwhere
    return $this->db->get($this->table)->row_array();
  }

  public function GetById_detail_anak($id)
  {
    $this->db->where('nik_anak', $id); //u can use cidbwhere
    return $this->db->get($this->table2)->row_array();
  }

  public function update($id, $data_anak)
  {
    if (!empty($_FILES['foto_anak']['name'])) {
      $upload = $this->_do_uploadimg_update();
      $data_anak['foto_anak'] = $upload;
      $file_img = './upload/foto_anak/' . $this->input->post('old_img');
      unlink($file_img);
    }
    if (!empty($_FILES['scan_ijasah']['name'])) {
      $upload = $this->_do_uploadimg2();
      $data_anak['scan_ijasah'] = $upload;
      $file_img = './upload/foto_anak/' . $this->input->post('old_img');
      unlink($file_img);
    }
    if (!empty($_FILES['scan_kk']['name'])) {
      $upload = $this->_do_uploadimg3();
      $data_anak['scan_kk'] = $upload;
      $file_img = './upload/foto_anak/' . $this->input->post('old_img');
      unlink($file_img);
    }
    if (!empty($_FILES['scan_akte']['name'])) {
      $upload = $this->_do_uploadimg4();
      $data_anak['scan_akte'] = $upload;
      $file_img = './upload/foto_anak/' . $this->input->post('old_img');
      unlink($file_img);
    }
    if (!empty($_FILES['ktp']['name'])) {
      $upload = $this->_do_uploadimg5();
      $data_anak['ktp'] = $upload;
      $file_img = './upload/foto_anak/' . $this->input->post('old_img');
      unlink($file_img);
    }
    $this->db->where($this->pk, $id);
    return $this->db->update($this->table, $data_anak);
  }

  public function update_detail($id, $data_detail)
  {
    $this->db->where('nik_anak', $id);
    return $this->db->update($this->table2, $data_detail);
  }

  private function _do_uploadimg_update()
  {
    unset($config);
    $config['upload_path']    = './upload/foto_anak/';
    $config['allowed_types']  = '.gif|jpg|png|jpeg|jfif';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Foto Anak' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    if (!$this->upload->do_upload('foto_anak')) {
      $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
      redirect('anak/edit/' . $this->input->post('nik_anak'), 'refresh');
    }
    return $this->upload->data('file_name');
  }
  private function _do_uploadimg2()
  {
    unset($config);
    $config['upload_path']    = './upload/scan_ijasah';
    $config['allowed_types']  = '.gif|jpg|png|jpeg|jfif|pdf';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Scan Ijasah' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $this->upload->do_upload('scan_ijasah');
    return $this->upload->data('file_name');
  }

  private function _do_uploadimg3()
  {
    unset($config);
    $config['upload_path']    = './upload/scan_kk';
    $config['allowed_types']  = '.gif|jpg|png|jpeg|jfif|pdf';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Scan Kartu Keluarga' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $this->upload->do_upload('scan_kk');
    return $this->upload->data('file_name');
  }

  private function _do_uploadimg4()
  {
    unset($config);
    $config['upload_path']    = './upload/scan_akte';
    $config['allowed_types']  = '.gif|jpg|png|jpeg|jfif|pdf';
    $config['max_size']       = 2048;
    $config['file_name']      = 'Scan Kartu Akte Kelahiran' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $this->upload->do_upload('scan_akte');
    return $this->upload->data('file_name');
  }

  private function _do_uploadimg5()
  {
    unset($config);
    $config['upload_path']    = './upload/ktp';
    $config['allowed_types']  = '.gif|jpg|png|jpeg';
    $config['max_size']       = 2048;
    $config['file_name']      = 'KTP Orang Tua' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

    $this->load->library('upload', $config);
    $this->upload->initialize($config);
    $this->upload->do_upload('ktp');
    return $this->upload->data('file_name');
  }

  public function delete($id)
  {
    $data = $this->M_anak->GetAll($id)->row();
    if ($data->foto_anak != null) {
      $file_img = './upload/foto_anak/' . $data->foto_anak;
      unlink($file_img);
    }
    $this->db->where('nik_anak', $id);
    $this->db->delete('data_siswa');
    $this->db->where('nik_anak', $id);
    $this->db->delete('detail_santri');
  }

  function cek_nik($code, $id = null)
  {
    $this->db->from('data_siswa');
    $this->db->where('nik_anak', $code);
    if ($id != null) {
      $this->db->where('nik_anak !=', $id);
    }
    $query = $this->db->get();
    return $query;
  }

  public function status_aktif($id)
  {
    $params = [
      'status' => '1',
    ];
    $this->db->where('nik_anak', $id);
    $this->db->update('anak', $params);
  }

  public function status_tidak_aktif($id)
  {
    $params = [
      'status' => '2',
    ];
    $this->db->where('nik_anak', $id);
    $this->db->update('anak', $params);
  }

  public function status_alumni($id)
  {
    $params = [
      'status' => '3',
    ];
    $this->db->where('nik_anak', $id);
    $this->db->update('anak', $params);
  }

  public function status_belum_diverifikasi($id)
  {
    $params = [
      'status' => '4',
    ];
    $this->db->where('nik_anak', $id);
    $this->db->update('anak', $params);
  }

  public function status_tidak_diterima($id)
  {
    $params = [
      'status' => '5',
    ];
    $this->db->where('nik_anak', $id);
    $this->db->update('anak', $params);
  }
}
