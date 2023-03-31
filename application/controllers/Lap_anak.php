<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Lap_anak extends CI_Controller
{

  private $folder = "laporan/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_pengurus', 'M_anak', 'M_jenis_masalah', 'M_keadaan_saat_ini', 'M_akta', 'M_alasan_masuk_panti', 'M_jenis_bantuan'));
    belum_login();
    //array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_anak->GetAll()->result_array(),
      'judul' => 'Laporan Data Siswa',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'anak', $data);
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['cari'])) {
      $data = array(
        'data' => $this->M_anak->GetAll()->result_array(),
        'judul' => 'Laporan Data Siswa',
      ); //u can use library array
      $this->template->load($this->foldertemplate . 'template', $this->folder . 'anak', $data);
    } else if (isset($_POST['cetak'])) {
      $this->load->library('dompdf_gen');

      $data['anak'] = $this->M_anak->GetAll()->result_array();

      $this->load->view($this->folder . 'lap_anak_pdf', $data);

      $paper_size = 'Folio';
      $orientation = 'landscape';
      $html = $this->output->get_output();
      $this->dompdf->set_paper($paper_size, $orientation);

      $this->dompdf->load_html($html);
      $this->dompdf->render();
      $this->dompdf->stream("Laporan_Data_Anak.pdf", array('Attachment' => 1));
    } else if (isset($_POST['reset'])) {
      redirect('Lap_anak', 'refresh');
    }
  }
}
