<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pengaturan extends CI_Controller
{
    private $folder = "pengaturan/";
    private $foldertemplate = "template/";

    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
        $this->load->model(array('M_user', 'M_pengaturan'));
        belum_login();
        //array berhubungan dengan database, array di sini untuk meload lebih dari satu model
        //Codeigniter : Write Less Do More
    }

    function index()
    {
        $data = array(
            'data' => $this->M_pengaturan->GetAll()->result_array(),
            'judul' => 'Data Pengaturan',
        ); //u can use library array
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
    }

    public function edit()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_pengaturan->GetById($id), //menampilkan data user dari model berdasarkan id
            'judul' => 'Edit Data'
        );
        $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
    }
    public function update()
    {
        $id = $this->uri->segment(3);
        $data = array(
            'id_pengaturan' => $id,
            'no_hp' => $this->input->post('no_hp'), //u can use library cipost
            'email' => $this->input->post('email'),
            'pendaftaran_awal' => $this->input->post('pendaftaran_awal'),
            'batas_akhir' => $this->input->post('batas_akhir'),
            'periode' => $this->input->post('periode'),
            'whatsapp' => $this->input->post('whatsapp'),
            'nama_kepala_ponpes' => $this->input->post('nama_kepala_ponpes'),
            'fasilitas' => $this->input->post('fasilitas'),
            'instagram' => $this->input->post('instagram'),
            'facebook' => $this->input->post('facebook'),
            'youtube' => $this->input->post('youtube'),
            'link_grup_whatsapp' => $this->input->post('link_grup_whatsapp')
        );
        $this->M_pengaturan->update($id, $data);
        $this->session->set_flashdata('success', 'Data berhasil diubah');
        redirect('pengaturan', 'refresh');
    }
}
