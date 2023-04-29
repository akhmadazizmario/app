<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Buku_tamu extends CI_Controller
{

  private $folder = "buku_tamu/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_buku_tamu'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_buku_tamu->GetAll()->result_array(),
      'judul' => 'Data Buku Tamu',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
      'buku_tamu' => $this->M_buku_tamu->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function save()
  {
    $data = array( //fungsi array disini adalah untuk mengumpulkan data
      'nama_tamu' => $this->input->post('nama_tamu'),
      'no_hp_tamu' => $this->input->post('no_hp_tamu'),
      'alamat' => $this->input->post('alamat'),
      'tgl_tamu' => $this->input->post('tgl_tamu'),
      'keperluan' => $this->input->post('keperluan'),
      'penerima_tamu' => $this->input->post('penerima_tamu'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    if ($this->input->post('tgl_tamu') > date('Y-m-d')) {
      $this->session->set_flashdata('error', "Anda memasukkan tanggal yang lebih dari tanggal sekarang.");
      redirect('buku_tamu/tambah', 'refresh');
    }
    $this->M_buku_tamu->save($data);
    $this->session->set_flashdata('success', 'Data berhasil disimpan');
    redirect('buku_tamu', 'refresh');
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_buku_tamu->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
      'donatu' => $this->M_buku_tamu->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function detail()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_buku_tamu->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Detail Data',
      'buku_tamu' => $this->M_buku_tamu->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'nama_tamu' => $this->input->post('nama_tamu'),
      'no_hp_tamu' => $this->input->post('no_hp_tamu'),
      'alamat' => $this->input->post('alamat'),
      'tgl_tamu' => $this->input->post('tgl_tamu'),
      'keperluan' => $this->input->post('keperluan'),
      'penerima_tamu' => $this->input->post('penerima_tamu'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    $this->M_buku_tamu->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('buku_tamu', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_buku_tamu->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('buku_tamu', 'refresh');
  }
}
