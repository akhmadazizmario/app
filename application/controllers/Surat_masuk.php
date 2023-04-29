<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Surat_masuk extends CI_Controller
{

  private $folder = "surat_masuk/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_surat_masuk'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_surat_masuk->GetAll()->result_array(),
      'judul' => 'Data Surat Masuk',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
      'surat_masuk' => $this->M_surat_masuk->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function save()
  {
    $data = array( //fungsi array disini adalah untuk mengumpulkan data
      'tgl_terima' => $this->input->post('tgl_terima'),
      'nomor_surat' => $this->input->post('nomor_surat'),
      'tgl_surat' => $this->input->post('tgl_terima'),
      'pengirim' => $this->input->post('pengirim'),
      'penerima' => $this->input->post('penerima'),
      'perihal' => $this->input->post('perihal'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    if ($this->M_surat_masuk->cek_no_surat($this->input->post('nomor_surat'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "Nomor <b>$data[nomor_surat]</b> sudah dipakai surat lain, silahkan ganti dengan yang berbeda");
      redirect('surat_masuk/tambah', 'refresh');
    }
    if ($this->input->post('tgl_terima') > date('Y-m-d')) {
      $this->session->set_flashdata('error', "Anda memasukkan tanggal yang lebih dari tanggal sekarang.");
      redirect('surat_masuk/tambah', 'refresh');
    } else {
      $this->M_surat_masuk->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('surat_masuk', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_surat_masuk->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
      'inventaris' => $this->M_surat_masuk->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function detail()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_surat_masuk->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Detail Data',
      'surat_masuk' => $this->M_surat_masuk->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'tgl_terima' => $this->input->post('tgl_terima'),
      'nomor_surat' => $this->input->post('nomor_surat'),
      'tgl_surat' => $this->input->post('tgl_terima'),
      'pengirim' => $this->input->post('pengirim'),
      'penerima' => $this->input->post('penerima'),
      'perihal' => $this->input->post('perihal'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    $this->M_surat_masuk->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('surat_masuk', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_surat_masuk->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('surat_masuk', 'refresh');
  }
}
