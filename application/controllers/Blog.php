<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Blog extends CI_Controller
{
    private $folder = "blog/";
    private $foldertemplate = "template/";

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model(array('M_user', 'M_blog'));
        belum_login();
        //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = array(
            'data' => $this->M_blog->GetAll()->result_array(),
            'judul' => 'Data Berita',
        ); //u can use library array
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
    }

    public function delete($id)
    {
        $id = $this->uri->segment(3);
        $this->M_blog->delete($id);
        $this->session->set_flashdata('success', 'Data berhasil dihapus');
        redirect('blog', 'refresh');
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

            'judul' => $this->input->post('judul'), //u can use library cipost
            'tanggal' => $this->input->post('tanggal'),
            'isi' => $this->input->post('isi')
        );

        $this->M_blog->save($data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('blog', 'refresh');
    }
    public function edit()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_blog->GetById($id), //menampilkan data user dari model berdasarkan id
            'judul' => 'Edit Data'
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
    }
    public function update()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'id_berita' => $id,
            'judul' => $this->input->post('judul'), //u can use library cipost
            'tanggal' => $this->input->post('tanggal'),
            'isi' => $this->input->post('isi')
        );
        $this->M_blog->update($id, $data);
        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('blog', 'refresh');
    }
}
