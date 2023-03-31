<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Donatur extends CI_Controller
{

  private $folder = "donatur/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_donatur', 'M_keuangan'));
    belum_login();
    //array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_donatur->GetAll()->result_array(),
      'judul' => 'Data Donatur',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
      'donatur' => $this->M_donatur->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function save()
  {
    $saldo_akhir = $this->M_keuangan->jumlah()->saldo;
    $data = array( //fungsi array disini adalah untuk mengumpulkan data
      'tgl_donatur' => $this->input->post('tgl_donatur'),
      'nama_donatur' => $this->input->post('nama_donatur'),
      'alamat_donatur' => $this->input->post('alamat_donatur'),
      'no_hp_donatur' => $this->input->post('no_hp_donatur'),
      'kategori' => $this->input->post('kategori'),
      'keterangan' => $this->input->post('keterangan'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    if ($this->input->post('kategori') == '1') {
      $keuangan = array( //fungsi array disini adalah untuk mengumpulkan data
        'tgl_keuangan' => Date('Y-m-d'),
        'keterangan' => 'Donasi dari ' . $this->input->post('nama_donatur'),
        'jumlah_uang' => $this->input->post('keterangan'),
        'type' => '1',
        'pemasukan' => $this->input->post('keterangan'),
        'saldo' => ($saldo_akhir + $this->input->post('keterangan')),
        'id_user' => $this->fungsi->user_login()->id_user,
      );
      $this->M_keuangan->save($keuangan);
    }
    if ($this->M_donatur->cek_id($this->input->post('id_donatur'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "ID <b>$data[id_donatur]</b> sudah dipakai donatur lain, silahkan ganti dengan yang berbeda");
      redirect('donatur/tambah', 'refresh');
    } else {
      if ($this->input->post('tgl_donatur') > date('Y-m-d')) {
        $this->session->set_flashdata('error', "Anda memasukkan tanggal yang lebih dari tanggal sekarang.");
        redirect('donatur/tambah', 'refresh');
      }
      $this->M_donatur->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('donatur', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_donatur->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
      'donatur' => $this->M_donatur->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function detail()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_donatur->GetById($id), //menampilkan data anak dari model berdasarkan id
      'judul' => 'detail data',
      'donatur' => $this->M_donatur->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
  }


  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'tgl_donatur' => $this->input->post('tgl_donatur'),
      'nama_donatur' => $this->input->post('nama_donatur'),
      'alamat_donatur' => $this->input->post('alamat_donatur'),
      'no_hp_donatur' => $this->input->post('no_hp_donatur'),
      'kategori' => $this->input->post('kategori'),
      'keterangan' => $this->input->post('keterangan'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    $this->M_donatur->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('donatur', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_donatur->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('donatur', 'refresh');
  }
}
