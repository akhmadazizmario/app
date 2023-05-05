<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Utama extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model(array('M_user', 'M_blog', 'M_galeri', 'M_pengaturan', 'M_brosur'));
        //Codeigniter : Write Less Do MoreE
    }

    function index()
    {
        $data = array(
            'data' => $this->M_pengaturan->GetAll()->result_array(),
            'blog' => $this->M_blog->get_latest_blogs()->result_array(),
            'brosur' => $this->M_brosur->GetAll()->result_array(),
            'footer' => $this->M_pengaturan->GetAll()->result_array(),
            'judul' => 'Data Pengaturan',
        );
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/index', $data);
        $this->load->view('frontend/footer', $data);
    }
    function tentangKami()
    {
        $data['judul'] = 'Tentang kami';
        $data = array(
            'data' => $this->M_pengaturan->GetAll()->result_array(),
            'footer' => $this->M_pengaturan->GetAll()->result_array(),
            'judul' => 'Halaman Tentang Kami',
        );
        $data['footer'] = $this->M_pengaturan->GetAll()->result_array();
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/tentangkami', $data);
        $this->load->view('frontend/footer', $data);
    }
    function blog()
    {

        $data = array(
            'data' => $this->M_blog->GetAll()->result_array(),
            'footer' => $this->M_pengaturan->GetAll()->result_array(),
            'judul' => 'Halaman Berita',
        ); //u can use library array
        if ($this->input->post('keyword')) {
            $data['data'] = $this->M_blog->cariDataBlog();
        }
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/blog/index', $data);
        $this->load->view('frontend/footer', $data);
    }

    public function detail()
    {
        $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
        $data = array(
            'row' => $this->M_blog->GetById($id), //menampilkan data pengurus dari model berdasarkan id
            'footer' => $this->M_pengaturan->GetAll()->result_array(),
            'judul' => 'Detail Post'
        );
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/blog/detail', $data);
        $this->load->view('frontend/footer', $data);
    }

    function galeri()
    {
        $data = array(
            'data' => $this->M_galeri->GetAll()->result_array(),
            'footer' => $this->M_pengaturan->GetAll()->result_array(),
            'judul' => 'Data Gallery',
        ); //u can use library array
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/galeri/index', $data);
        $this->load->view('frontend/footer', $data);
    }

    function kesulitanMendaftar()
    {
        $data = array(
            'footer' => $this->M_pengaturan->GetAll()->result_array(),
            'judul' => 'Kesulitan Mendaftar',
        ); //u can use library array
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/blank', $data);
        $this->load->view('frontend/footer', $data);
    }

    function tataCaraMendaftar()
    {
        $data = array(
            'footer' => $this->M_pengaturan->GetAll()->result_array(),
            'judul' => 'Tata Cara Mendaftar',
        ); //u can use library array
        $this->load->view('frontend/header', $data);
        $this->load->view('frontend/tatacara_daftar', $data);
        $this->load->view('frontend/footer', $data);
    }

    // public function brosur()
    // {
    //     $data = array(
    //         'brosur' => $this->M_brosur->GetAll()->result_array(),
    //         'judul' => 'Data Pengaturan',
    //     );
    //     $this->load->view('frontend/brosur.php', $data);
    // }
}
