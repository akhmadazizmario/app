<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Galeri extends CI_Controller
{

    private $folder = "galeri/";
    private $foldertemplate = "template/";

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do Moree
        $this->load->model(array('M_user', 'M_galeri'));
        belum_login();
    }

    public function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->M_galeri->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('galeri/read', 'refresh');
    }

    function read()
    {
        $data = array(
            'data' => $this->M_galeri->GetAll()->result_array(),
            'judul' => 'Data Berita',
        ); //u can use library array
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
    }

    function tambah()
    {
        $data = array(
            'judul' => 'Tambah Data'
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
    }

    public function save()
    {
        $data = array( //fungsi array disini adalah untuk mengumpulkan data

            'judul' => $this->input->post('judul'), //u can use library cipost
        );

        $this->M_galeri->save($data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('galeri/read', 'refresh');
    }

    public function edit()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_galeri->GetById($id), //menampilkan data user dari model berdasarkan id
            'judul' => 'Edit Data'
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
    }
    public function update()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'id_galeri' => $id,
            'judul' => $this->input->post('judul'), //u can use library cipost
        );
        $this->M_galeri->update($id, $data);
        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('galeri/read', 'refresh');
    }
}
