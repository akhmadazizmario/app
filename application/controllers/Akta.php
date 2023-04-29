<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Akta extends CI_Controller
{

  private $folder = "akta/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_akta'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_akta->GetAll()->result_array(),
      'judul' => 'Data Jenis Masalah',
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
      'akta' => $this->input->post('akta'),
    );
    if ($this->M_akta->cek_akta($this->input->post('akta'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "Nama <b>$data[akta]</b> sudah ada, silahkan ganti dengan yang berbeda");
      redirect('akta/tambah', 'refresh');
    } else {
      $this->M_akta->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('akta', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_akta->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'akta' => $this->input->post('akta'),
    );
    $this->M_akta->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('akta', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_akta->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('akta', 'refresh');
  }
}
