<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Alasan_masuk_panti extends CI_Controller
{

  private $folder = "alasan_masuk_panti/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_alasan_masuk_panti'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_alasan_masuk_panti->GetAll()->result_array(),
      'judul' => 'Data Alasan Masuk Pesantren',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
      'alasan_masuk_panti' => $this->M_alasan_masuk_panti->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function save()
  {
    $data = array( //fungsi array disini adalah untuk mengumpulkan data
      'alasan' => $this->input->post('alasan'),
    );
    if ($this->M_alasan_masuk_panti->cek_alasan($this->input->post('alasan'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "Nama <b>$data[alasan]</b> sudah ada, silahkan ganti dengan yang berbeda");
      redirect('alasan_masuk_panti/tambah', 'refresh');
    } else {
      $this->M_alasan_masuk_panti->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('alasan_masuk_panti', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_alasan_masuk_panti->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'alasan' => $this->input->post('alasan'),
    );
    $this->M_alasan_masuk_panti->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('alasan_masuk_panti', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_alasan_masuk_panti->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('alasan_masuk_panti', 'refresh');
  }
}
