<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_pengurus extends CI_Controller
{

  private $folder = "laporan/";
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
      'judul' => 'Laporan Data Pengurus',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'pengurus', $data);
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['cari'])) {
      $data = array(
        'data' => $this->M_pengurus->GetAll()->result_array(),
        'judul' => 'Laporan Pengurus',
      ); //u can use library array
      $this->template->load($this->foldertemplate . 'template', $this->folder . 'pengurus', $data);
    } else if (isset($_POST['cetak'])) {
      $this->load->library('dompdf_gen');
      $data['pengurus'] = $this->M_pengurus->GetAll()->result_array();
      $this->load->view($this->folder . 'lap_pengurus_pdf', $data);
      def("DOMPDF_ENABLE_REMOTE", false);
      $paper_size = 'Folio';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);
      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("Laporan_Data_Pengurus.pdf", array('Attachment' => 1));
    } else if (isset($_POST['reset'])) {
      redirect('Lap_pengurus', 'refresh');
    }
  }
}
