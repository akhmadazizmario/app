<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Keuangan extends CI_Controller
{

  private $folder = "keuangan/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_keuangan'));

    belum_login();
    cek_keuangan();
    //array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $saldo_akhir = $this->M_keuangan->jumlah()->saldo;
    $data = array(
      'data' => $this->M_keuangan->GetAll()->result_array(),
      'judul' => 'Data Keuangan',
    ); //u can use library array
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
      'donatur' => $this->M_keuangan->GetAll(),
      'saldo_akhir' => $this->M_keuangan->jumlah()
    );
    $this->load->view('keuangan/tambah', $data);
  }

  public function save()
  {
    $saldo_akhir = $this->M_keuangan->jumlah()->saldo;
    if ($this->input->post('type') == '1') {
      // code...
      $data = array( //fungsi array disini adalah untuk mengumpulkan data
        'tgl_keuangan' => $this->input->post('tgl_keuangan'),
        'keterangan' => $this->input->post('keterangan'),
        'jumlah_uang' => $this->input->post('jumlah_uang'),
        'type' => $this->input->post('type'),
        'pemasukan' => $this->input->post('jumlah_uang'),
        'saldo' => ($saldo_akhir + $this->input->post('jumlah_uang')),
        'id_user' => $this->fungsi->user_login()->id_user,
      );
      if ($this->M_keuangan->cek_id($this->input->post('id_saldo'))->num_rows() > 0) {
        $this->session->set_flashdata('error', "ID <b>$data[id_saldo]</b> sudah dipakai donatur lain, silahkan ganti dengan yang berbeda");
        redirect('keuangan/tambah', 'refresh');
      } else {
        $this->M_keuangan->save($data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('keuangan', 'refresh');
      }
    } else {
      // code...
      $data = array( //fungsi array disini adalah untuk mengumpulkan data
        'tgl_keuangan' => $this->input->post('tgl_keuangan'),
        'keterangan' => $this->input->post('keterangan'),
        'jumlah_uang' => $this->input->post('jumlah_uang'),
        'type' => $this->input->post('type'),
        'pengeluaran' => $this->input->post('jumlah_uang'),
        'saldo' => ($saldo_akhir - $this->input->post('jumlah_uang')),
        'id_user' => $this->fungsi->user_login()->id_user,
      );
      if ($this->M_keuangan->cek_id($this->input->post('id_saldo'))->num_rows() > 0) {
        $this->session->set_flashdata('error', "ID <b>$data[id_saldo]</b> sudah dipakai donatur lain, silahkan ganti dengan yang berbeda");
        redirect('keuangan/tambah', 'refresh');
      } else {
        $this->M_keuangan->save($data);
        $this->session->set_flashdata('success', 'Data berhasil disimpan');
        redirect('keuangan', 'refresh');
      }
    }
  }
  // public function save()
  // {
  //   $data = array( //fungsi array disini adalah untuk mengumpulkan data
  //     'id_saldo' => $this->input->post('id_saldo'), //u can use library cipost
  //     'tgl_keuangan' => $this->input->post('tgl_keuangan'),
  //     'keterangan' => $this->input->post('keterangan'),
  //     'jumlah_uang' => $this->input->post('jumlah_uang'),
  //     'type' => $this->input->post('type'),
  //     );
  //   if ($this->M_keuangan->cek_id($this->input->post('id_saldo'))->num_rows() > 0) {
  //       $this->session->set_flashdata('error', "ID <b>$data[id_saldo]</b> sudah dipakai donatur lain, silahkan ganti dengan yang berbeda");
  //       redirect('keuangan/tambah','refresh');
  //   }else {
  //   $this->M_keuangan->save($data);
  //   $this->session->set_flashdata('success', 'Data berhasil disimpan');
  //   redirect ('keuangan','refresh');
  //   }
  // }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_keuangan->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
      'donatur' => $this->M_keuangan->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function detail()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_keuangan->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Detail Data',
      'donatur' => $this->M_keuangan->GetAll(),
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'tgl_keuangan' => $this->input->post('tgl_keuangan'),
      'keterangan' => $this->input->post('keterangan'),
      'jumlah_uang' => $this->input->post('jumlah_uang'),
      'type' => $this->input->post('type'),
    );
    $this->M_keuangan->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('keuangan', 'refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_keuangan->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('keuangan', 'refresh');
  }

  // public function export()
  // {
  //   $data['data_keuangan'] = $this->M_keuangan->GetAll()->result();

  //   require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel.php');
  //   require(APPPATH . 'PHPExcel-1.8/Classes/PHPExcel/Writer/Excel2007.php');

  //   $objPHPExcel = new PHPExcel();

  //   $objPHPExcel->getProperties()->setCreator("Veni");
  //   $objPHPExcel->getProperties()->setLastModifiedBy("Veni");
  //   $objPHPExcel->getProperties()->setTitle("Data Keuangan");
  //   $objPHPExcel->getProperties()->setSubject("");
  //   $objPHPExcel->getProperties()->setDescription("");

  //   $objPHPExcel->setActiveSheetIndex(0);

  //   $objPHPExcel->getActiveSheet()->setCellValue('A1', "No");
  //   $objPHPExcel->getActiveSheet()->setCellValue('B1', "Tanggal");
  //   $objPHPExcel->getActiveSheet()->setCellValue('C1', "Keterangan");
  //   $objPHPExcel->getActiveSheet()->setCellValue('D1', "Pengeluaran");
  //   $objPHPExcel->getActiveSheet()->setCellValue('E1', "Pemasukan");
  //   $objPHPExcel->getActiveSheet()->setCellValue('F1', "Saldo");

  //   $baris = 2;
  //   $x = 1;

  //   foreach ($data['data_keuangan'] as $data) {
  //     $objPHPExcel->getActiveSheet()->setCellValue('A' . $baris, $x);
  //     $objPHPExcel->getActiveSheet()->setCellValue('B' . $baris, $data->tgl_keuangan);
  //     $objPHPExcel->getActiveSheet()->setCellValue('C' . $baris, $data->keterangan);
  //     $objPHPExcel->getActiveSheet()->setCellValue('D' . $baris, $data->pengeluaran);
  //     $objPHPExcel->getActiveSheet()->setCellValue('E' . $baris, $data->pemasukan);
  //     $objPHPExcel->getActiveSheet()->setCellValue('F' . $baris, $data->saldo);

  //     $x++;
  //     $baris++;
  //   }

  //   $filename = "Data Keuangan" . date('d-m-Y') . '.xlsx';

  //   $objPHPExcel->getActiveSheet()->setTitle("Data Keuangan");

  //   header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
  //   header('Content-Disposition: attachment;filename="' . $filename . '"');
  //   header('Cache-Control: max-age=0');

  //   $writer = PHPExcel_IOFactory::createwriter($objPHPExcel, 'Excel2007');
  //   $writer->save('php://output');

  //   exit;
  // }
}
