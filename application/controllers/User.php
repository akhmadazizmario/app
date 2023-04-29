<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

  private $folder = "user/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user'));
    belum_login();
    cek_admin();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_user->GetAll()->result_array(),
      'judul' => 'Data User',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data'
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function save()
  {
    $data = array( //fungsi array disini adalah untuk mengumpulkan data

      'id_user' => $this->input->post('id_user'),
      'nama' => $this->input->post('nama'), //u can use library cipost
      'email' => $this->input->post('email'),
      'password' => md5($this->input->post('password')),
      'role' => $this->input->post('role')
    );
    if ($this->M_user->cek_nama($this->input->post('nama'))->num_rows() > 0) {
      $this->session->set_flashdata('error', "Nama <b>$data[nama]</b> sudah dipakai user lain, silahkan ganti dengan yang berbeda");
      redirect('user/tambah', 'refresh');
    } else {
      $this->M_user->save($data);
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
      redirect('user', 'refresh');
    }
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_user->GetById($id), //menampilkan data user dari model berdasarkan id
      'judul' => 'Edit Data'
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'id_user' => $id,
      'nama' => $this->input->post('nama'), //u can use library cipost
      'email' => $this->input->post('email'),
      'role' => $this->input->post('role')
    );
    if ($this->input->post('password') != $this->input->post('konf_password')) {
      $this->session->set_flashdata('error', 'Password dan konfirmasi password tidak sama');
      redirect('user/edit/' . $id, 'refresh');
    }
    if ($this->input->post('password') != null) {
      $data['password'] = md5($this->input->post('password'));
    }
    $this->M_user->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('user', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_user->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('user', 'refresh');
  }
}
