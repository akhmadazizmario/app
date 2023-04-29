<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_keuangan extends CI_Controller
{

  private $folder = "laporan/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_keuangan'));

    belum_login();
    cek_keuangan();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_keuangan->GetAll()->result_array(),
      'judul' => 'Laporan Keuangan',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'keuangan', $data);
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['cari'])) {
      $data = array(
        'data' => $this->M_keuangan->GetAll()->result_array(),
        'judul' => 'Laporan Keuangan',
      ); //u can use library array
      $this->template->load($this->foldertemplate . 'template', $this->folder . 'keuangan', $data);
    } else if (isset($_POST['cetak'])) {
      $this->load->library('dompdf_gen');

      $data['keuangan'] = $this->M_keuangan->GetAll()->result_array();

      $this->load->view($this->folder . 'lap_keuangan_pdf', $data);

      $paper_size = 'A4';
      $orientation = 'portrait';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("Laporan_Keuangan.pdf", array('Attachment' => 1));
    } else if (isset($_POST['reset'])) {
      redirect('Lap_keuangan', 'refresh');
    }
  }
}
