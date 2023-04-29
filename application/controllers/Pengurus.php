<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengurus extends CI_Controller
{

  private $folder = "pengurus/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_pengurus'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_pengurus->GetAll()->result_array(),
      'judul' => 'Data Pengurus',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
      'user' => $this->M_user->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function save()
  {
    $data = array( //fungsi array disini adalah untuk mengumpulkan data
      'nik_pengurus' => $this->input->post('nik_pengurus'),
      'nama_pengurus' => $this->input->post('nama_pengurus'),
      'jk_pengurus' => $this->input->post('jk_pengurus'),
      'tempat_lahir_pengurus' => $this->input->post('tempat_lahir_pengurus'),
      'tgl_lahir_pengurus' => $this->input->post('tgl_lahir_pengurus'),
      'mulai_kerja' => $this->input->post('mulai_kerja'),
      'telp_pengurus' => $this->input->post('telp_pengurus'),
      'jabatan' => $this->input->post('jabatan'),
      'status' => $this->input->post('status'),
      'pendidikan' => $this->input->post('pendidikan'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    if ($this->M_pengurus->cek_id($this->input->post('id_pengurus'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "ID <b>$data[id_pengurus]</b> sudah dipakai pengurus lain, silahkan ganti dengan yang berbeda");
      redirect('pengurus/tambah', 'refresh');
    } else {
      $this->M_pengurus->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('pengurus', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_pengurus->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
      'user' => $this->M_user->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function detail()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_pengurus->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Detail Data',
      'user' => $this->M_user->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'nik_pengurus' => $this->input->post('nik_pengurus'),
      'nama_pengurus' => $this->input->post('nama_pengurus'),
      'jk_pengurus' => $this->input->post('jk_pengurus'),
      'tempat_lahir_pengurus' => $this->input->post('tempat_lahir_pengurus'),
      'tgl_lahir_pengurus' => $this->input->post('tgl_lahir_pengurus'),
      'mulai_kerja' => $this->input->post('mulai_kerja'),
      'telp_pengurus' => $this->input->post('telp_pengurus'),
      'jabatan' => $this->input->post('jabatan'),
      'status' => $this->input->post('status'),
      'pendidikan' => $this->input->post('pendidikan'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    $this->M_pengurus->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('pengurus', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_pengurus->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('pengurus', 'refresh');
  }
}
