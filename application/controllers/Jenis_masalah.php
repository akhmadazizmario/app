<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_masalah extends CI_Controller
{

  private $folder = "jenis_masalah/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_jenis_masalah'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_jenis_masalah->GetAll()->result_array(),
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
      'id_jenis_masalah' => $this->input->post('id_jenis_masalah'),
      'jenis_masalah' => $this->input->post('jenis_masalah'),
    );
    if ($this->M_jenis_masalah->cek_jenis_masalah($this->input->post('jenis_masalah'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "Nama <b>$data[jenis_masalah]</b> sudah ada, silahkan ganti dengan yang berbeda");
      redirect('jenis_masalah/tambah', 'refresh');
    } else {
      $this->M_jenis_masalah->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('jenis_masalah', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_jenis_masalah->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
      'jenis_masalah' => $this->M_jenis_masalah->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'jenis_masalah' => $this->input->post('jenis_masalah'),
    );
    $this->M_jenis_masalah->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('jenis_masalah', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_jenis_masalah->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('jenis_masalah', 'refresh');
  }
}
