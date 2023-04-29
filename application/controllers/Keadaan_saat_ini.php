<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keadaan_saat_ini extends CI_Controller
{

  private $folder = "keadaan_saat_ini/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_keadaan_saat_ini'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_keadaan_saat_ini->GetAll()->result_array(),
      'judul' => 'Data Keadaan Saat Ini',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function save()
  {
    $data = array( //fungsi array disini adalah untuk mengumpulkan data
      'keadaan' => $this->input->post('keadaan'),
    );
    if ($this->M_keadaan_saat_ini->cek_keadaan($this->input->post('keadaan'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "Nama <b>$data[keadaan]</b> sudah ada, silahkan ganti dengan yang berbeda");
      redirect('Keadaan_saat_ini/tambah', 'refresh');
    } else {
      $this->M_keadaan_saat_ini->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('Keadaan_saat_ini', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_keadaan_saat_ini->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'keadaan' => $this->input->post('keadaan'),
    );
    $this->M_keadaan_saat_ini->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('Keadaan_saat_ini', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_keadaan_saat_ini->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('Keadaan_saat_ini', 'refresh');
  }
}
