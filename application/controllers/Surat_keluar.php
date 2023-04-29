<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_keluar extends CI_Controller
{

  private $folder = "surat_keluar/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_surat_keluar'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_surat_keluar->GetAll()->result_array(),
      'judul' => 'Data Surat Keluar',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
      'surat_keluar' => $this->M_surat_keluar->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function save()
  {
    $data = array( //fungsi array disini adalah untuk mengumpulkan data
      'nomor_surat_kel' => $this->input->post('nomor_surat_kel'),
      'tgl_surat_kel' => $this->input->post('tgl_surat_kel'),
      'tujuan' => $this->input->post('tujuan'),
      'perihal' => $this->input->post('perihal'),
      'pengirim' => $this->input->post('pengirim'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    if ($this->M_surat_keluar->cek_no_surat($this->input->post('nomor_surat_kel'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "Nomor <b>$data[nomor_surat_kel]</b> sudah dipakai surat lain, silahkan ganti dengan yang berbeda");
      redirect('surat_keluar/tambah', 'refresh');
    }
    if ($this->input->post('tgl_surat_kel') > date('Y-m-d')) {
      $this->session->set_flashdata('error', "Anda memasukkan tanggal yang lebih dari tanggal sekarang.");
      redirect('surat_keluar/tambah', 'refresh');
    } else {
      $this->M_surat_keluar->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('surat_keluar', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_surat_keluar->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
      'inventaris' => $this->M_surat_keluar->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function detail()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_surat_keluar->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Detail Data',
      'surat_masuk' => $this->M_surat_keluar->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'nomor_surat_kel' => $this->input->post('nomor_surat_kel'),
      'tgl_surat_kel' => $this->input->post('tgl_surat_kel'),
      'tujuan' => $this->input->post('tujuan'),
      'perihal' => $this->input->post('perihal'),
      'pengirim' => $this->input->post('pengirim'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    $this->M_surat_keluar->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('surat_keluar', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_surat_keluar->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('surat_keluar', 'refresh');
  }
}
