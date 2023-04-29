<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Guru extends CI_Controller
{

    private $folder = "guru/";
    private $foldertemplate = "template/";

    public function __construct()
    {
        parent::__construct();

        $this->load->model(array('M_user', 'M_guru'));
        belum_login();
        //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = array(
            'data' => $this->M_guru->GetAll()->result_array(),
            'judul' => 'Data guru',
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
            'nik_guru' => $this->input->post('nik_guru'),
            'nama_guru' => $this->input->post('nama_guru'),
            'jk_guru' => $this->input->post('jk_guru'),
            'tempat_lahir_guru' => $this->input->post('tempat_lahir_guru'),
            'tgl_lahir_guru' => $this->input->post('tgl_lahir_guru'),
            'mulai_kerja' => $this->input->post('mulai_kerja'),
            'telp_guru' => $this->input->post('telp_guru'),
            'status' => $this->input->post('status'),
            'pendidikan' => $this->input->post('pendidikan'),
            'id_user' => $this->fungsi->user_login()->id_user,
        );
        if ($this->M_guru->cek_id($this->input->post('id_guru'))->num_rows() > 0) {
            $this->session->set_flashdata('error', "ID <b>$data[id_guru]</b> sudah dipakai pengurus lain, silahkan ganti dengan yang berbeda");
            redirect('guru/tambah', 'refresh');
        } else {
            $this->M_guru->save($data);
            $this->session->set_flashdata('success', 'Data berhasil disimpan');
            redirect('guru', 'refresh');
        }
    }



    public function edit()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_guru->GetById($id), //menampilkan data guru dari model berdasarkan id
            'judul' => 'Edit Data',
            'user' => $this->M_user->GetAll(),
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
    }

    public function detail()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_guru->GetById($id), //menampilkan data guru dari model berdasarkan id
            'judul' => 'Detail Data',
            'user' => $this->M_user->GetAll(),
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
    }

    public function update()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'nik_guru' => $this->input->post('nik_guru'),
            'nama_guru' => $this->input->post('nama_guru'),
            'jk_guru' => $this->input->post('jk_guru'),
            'tempat_lahir_guru' => $this->input->post('tempat_lahir_guru'),
            'tgl_lahir_guru' => $this->input->post('tgl_lahir_guru'),
            'mulai_kerja' => $this->input->post('mulai_kerja'),
            'telp_guru' => $this->input->post('telp_guru'),
            'status' => $this->input->post('status'),
            // 'jabatan' => $this->input->post('jabatan'),
            // 'gol_assatidz' => $this->input->post('gol_assatidz'),
            'pendidikan' => $this->input->post('pendidikan'),
            'id_user' => $this->fungsi->user_login()->id_user,
        );
        $this->M_guru->update($id, $data);
        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('guru', 'refresh');
    }

    public function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->M_guru->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('guru', 'refresh');
    }
}
