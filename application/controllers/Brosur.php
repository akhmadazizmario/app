<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Brosur extends CI_Controller
{
    private $folder = "brosur/";
    private $foldertemplate = "template/";

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model(array('M_user', 'M_brosur'));
        belum_login();
        //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = array(
            'data' => $this->M_brosur->GetAll()->result_array(),
            'judul' => 'Data Brosur',
        ); //u can use library array
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
    }

    public function edit()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_brosur->GetById($id), //menampilkan data user dari model berdasarkan id
            'judul' => 'Edit Data'
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
    }
    public function update()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'id_brosur' => $id,
        );
        $this->M_brosur->update($id, $data);
        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('brosur', 'refresh');
    }
}
