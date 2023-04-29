<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_surat_keluar extends CI_Controller
{

  private $folder = "laporan/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_surat_keluar'));
    belum_login();
    //Array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_surat_keluar->GetAll()->result_array(),
      'judul' => 'Laporan Surat keluar',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'surat_keluar', $data);
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['cari'])) {
      $data = array(
        'data' => $this->M_surat_keluar->GetAll()->result_array(),
        'judul' => 'Laporan Surat keluar',
      ); //u can use library array
      $this->template->load($this->foldertemplate . 'template', $this->folder . 'surat_keluar', $data);
    } else if (isset($_POST['cetak'])) {
      $this->load->library('dompdf_gen');

      $data['surat_keluar'] = $this->M_surat_keluar->GetAll()->result_array();

      $this->load->view($this->folder . 'lap_surat_keluar', $data);

      $paper_size = 'Folio';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);

      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("Laporan_surat_keluar.pdf", array('Attachment' => 1));
    } else if (isset($_POST['reset'])) {
      redirect('Lap_surat_keluar', 'refresh');
    }
  }
}
