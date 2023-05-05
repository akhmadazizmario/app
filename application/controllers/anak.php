<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Anak extends CI_Controller
{

  private $folder = "anak/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user', 'M_pengurus', 'M_daftar', 'M_anak', 'M_jenis_masalah', 'M_keadaan_saat_ini', 'M_akta', 'M_alasan_masuk_panti', 'M_jenis_bantuan'));
    belum_login();
    //array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_anak->GetAll()->result_array(),
      'judul' => 'Data Siswa',
    ); //u can use library array
    $this->load->view('anak/read', $data);
    //$this->template->load($this->foldertemplate . 'template',$this->folder . 'read', $data);
  }

  public function tambah()
  {
    $data = array(
      'judul' => 'Tambah Data',
      'user' => $this->M_anak->GetAll(),
      'jenis_masalah' => $this->M_jenis_masalah->GetAll(),
      'keadaan_saat_ini' => $this->M_keadaan_saat_ini->GetAll(),
      'akta' => $this->M_akta->GetAll(),
      'alasan_masuk_panti' => $this->M_alasan_masuk_panti->GetAll(),
      'jenis_bantuan' => $this->M_jenis_bantuan->GetAll()
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'tambah', $data);
  }

  public function saveanak()
  {
    // $config['upload_path'] = './assets/images/'; //path folder
    // $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp';
    // $config['encrypt_name'] = TRUE;
    // $this->upload->initialize($config);

    // if (!empty($_FILES['img_berita']['name'])) {
    //     if ($this->upload->do_upload('img_berita')) {
    //         $img = $this->upload->data_anak();
    //         $this->ImgThumbs($img['file_name']);
    //         $title = $this->input->post('title', TRUE);
    //         $img_berita = $img['file_name'];
    $phone = $this->input->post('no_hp');
    if (substr($phone, 0, 2) !== '62') {
      $phone = '62' . substr($phone, 1);
    }

    $data_anak = array( //fungsi array disini adalah untuk mengumpulkan data 
      'nik_anak' => $this->input->post('nik_anak'),
      'alamat' => $this->input->post('alamat'),
      'no_hp' => $phone,
      'nama_anak' => $this->input->post('nama_anak'), //u can use library cipost
      'jk_anak' => $this->input->post('jk_anak'),
      'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
      'tgl_lahir_anak' => $this->input->post('tgl_lahir_anak'),
      'asal_paud' => $this->input->post('asal_paud'),
      'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung'),
      'nama_bapak_kandung' => $this->input->post('nama_bapak_kandung'),
      'agama' => $this->input->post('agama'),
      'pendidikan' => $this->input->post('pendidikan'),
      'tahun_masuk' => $this->input->post('tahun_masuk'),
      'status' => 4,
      'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
      'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
    );
    $data_detail = array( //fungsi array disini adalah untuk mengumpulkan data
      'nik_anak' => $this->input->post('nik_anak'),
      'jenis_masalah' => $this->input->post('jenis_masalah'), //u can use library cipost
      'keadaan_saat_ini' => $this->input->post('keadaan_saat_ini'),
      'akta' => $this->input->post('akta'),
      'tempat_tinggal' => $this->input->post('tempat_tinggal'),
      'wali' => $this->input->post('wali'),
      'alasan_masuk_panti' => $this->input->post('alasan_masuk_panti'),
      'masuk_dtks' => $this->input->post('masuk_dtks'),
      'jenis_bantuan' => $this->input->post('jenis_bantuan'),
      'tahun_bantuan' => $this->input->post('tahun_bantuan'),
    );
    $this->M_daftar->save($data_anak);
    $this->M_daftar->savedetail($data_detail);
    $this->session->set_flashdata('success', 'Berhasil mendaftar, cek whatsapp kamu untuk pemberitahuan lebih lanjut lagi');
    redirect('anak', 'refresh');
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_anak->GetById($id), //menampilkan data anak dari model berdasarkan id
      'detail' => $this->M_anak->GetById_detail_anak($id),
      'judul' => 'Edit Data',
      'user' => $this->M_user->GetAll(),
      'jenis_masalah' => $this->M_jenis_masalah->GetAll(),
      'keadaan_saat_ini' => $this->M_keadaan_saat_ini->GetAll(),
      'akta' => $this->M_akta->GetAll(),
      'alasan_masuk_panti' => $this->M_alasan_masuk_panti->GetAll(),
      'jenis_bantuan' => $this->M_jenis_bantuan->GetAll()
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'edit', $data);
  }

  public function detail()
  {
    $id = $this->uri->segment(3); /*Uri segment 1 = contorller, 2 = fungsi controller, 3 = id*/
    $data = array(
      'row' => $this->M_anak->GetById($id), //menampilkan data anak dari model berdasarkan id
      'detail' => $this->M_anak->GetById_detail_anak($id),
      'judul' => 'Detail Data',
      'user' => $this->M_user->GetAll(),
      'jenis_masalah' => $this->M_jenis_masalah->GetAll(),
      'keadaan_saat_ini' => $this->M_keadaan_saat_ini->GetAll(),
      'akta' => $this->M_akta->GetAll(),
      'alasan_masuk_panti' => $this->M_alasan_masuk_panti->GetAll(),
      'jenis_bantuan' => $this->M_jenis_bantuan->GetAll()
    );
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'detail', $data);
  }

  public function updateanak()
  {
    $id = $this->uri->segment(3);
    $phone = $this->input->post('no_hp');
    if (substr($phone, 0, 2) !== '62') {
      $phone = '62' . substr($phone, 1);
    }
    $data_anak = array( //fungsi array disini adalah untuk mengumpulkan data
      'nik_anak' => $this->input->post('nik_anak'),
      'nama_anak' => $this->input->post('nama_anak'), //u can use library cipost
      'jk_anak' => $this->input->post('jk_anak'),
      'tempat_lahir_anak' => $this->input->post('tempat_lahir_anak'),
      'tgl_lahir_anak' => $this->input->post('tgl_lahir_anak'),
      'asal_paud' => $this->input->post('asal_paud'),
      'alamat' => $this->input->post('alamat'),
      'nama_ibu_kandung' => $this->input->post('nama_ibu_kandung'),
      'nama_bapak_kandung' => $this->input->post('nama_bapak_kandung'),
      'pekerjaan_ibu' => $this->input->post('pekerjaan_ibu'),
      'pekerjaan_ayah' => $this->input->post('pekerjaan_ayah'),
      'agama' => $this->input->post('agama'),
      'pendidikan' => $this->input->post('pendidikan'),
      'id_kelas' => $this->input->post('id_kelas'),
      'tahun_masuk' => $this->input->post('tahun_masuk'),
      'NISN' => $this->input->post('NISN'),
      'no_hp' => $phone,
      'status' => $this->input->post('status'),
    );

    $data_detail = array( //fungsi array disini adalah untuk mengumpulkan data
      'nik_anak' => $this->input->post('nik_anak'),
      'jenis_masalah' => $this->input->post('jenis_masalah'), //u can use library cipost
      'keadaan_saat_ini' => $this->input->post('keadaan_saat_ini'),
      'akta' => $this->input->post('akta'),
      'tempat_tinggal' => $this->input->post('tempat_tinggal'),
      'wali' => $this->input->post('wali'),
      'alasan_masuk_panti' => $this->input->post('alasan_masuk_panti'),
      'masuk_dtks' => $this->input->post('masuk_dtks'),
      'jenis_bantuan' => $this->input->post('jenis_bantuan'),
      'tahun_bantuan' => $this->input->post('tahun_bantuan'),
    );
    $this->M_anak->update($id, $data_anak);
    $this->M_anak->update_detail($id, $data_detail);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('anak', 'refresh');
  }
  public function updatedetailanak()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'id_detail_anak' => $this->input->post('id_detail_anak'),
      'jenis_masalah' => $this->input->post('jenis_masalah'), //u can use library cipost
      'keadan_saat_ini' => $this->input->post('keadan_saat_ini'),
      'akta' => $this->input->post('akta'),
      'tempat_tinggal' => $this->input->post('tempat_tinggal'),
      'wali' => $this->input->post('wali'),
      'alasan_masuk_panti' => $this->input->post('alasan_masuk_panti'),
      'masuk_dtks' => $this->input->post('masuk_dtks'),
      'jenis_bantuan' => $this->input->post('jenis_bantuan'),
      'tahun_bantuan' => $this->input->post('tahun_bantuan'),
    );
    $this->M_anak->update($id, $data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect('anak', 'refresh');
  }
  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_anak->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect('anak', 'refresh');
  }

  public function cetak()
  {
    $id = $this->uri->segment(3);
    $this->load->library('dompdf_gen');

    $data = array(
      'row' => $this->M_anak->GetById($id), //menampilkan data anak dari model berdasarkan id
      'detail' => $this->M_anak->GetById_detail_anak($id),
      'judul' => 'Detail Data',
      'user' => $this->M_user->GetAll(),
      'jenis_masalah' => $this->M_jenis_masalah->GetAll(),
      'keadaan_saat_ini' => $this->M_keadaan_saat_ini->GetAll(),
      'akta' => $this->M_akta->GetAll(),
      'alasan_masuk_panti' => $this->M_alasan_masuk_panti->GetAll(),
      'jenis_bantuan' => $this->M_jenis_bantuan->GetAll()
    );

    $this->load->view($this->folder . 'lap_detail_anak_pdf', $data);

    $paper_size = 'A4';
    $orientation = 'Potrait';
    $html = $this->output->get_output();
    $this->dompdf->set_paper($paper_size, $orientation);

    $this->dompdf->load_html($html);
    $this->dompdf->render();
    $this->dompdf->stream("Laporan_Detail_Anak.pdf", array('Attachment' => 0));
  }

  public function aktif($id)
  {
    $this->M_anak->status_aktif($this->uri->segment(3));
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect('anak');
  }

  public function tidak_aktif($id)
  {
    $this->M_anak->status_tidak_aktif($this->uri->segment(3));
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect('anak');
  }

  public function alumni($id)
  {
    $this->M_anak->status_alumni($this->uri->segment(3));
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect('anak');
  }

  public function belum_diverifikasi($id)
  {
    $this->M_anak->status_belum_diverifikasi($this->uri->segment(3));
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect('anak');
  }

  public function tidak_diterima($id)
  {
    $this->M_anak->status_tidak_diterima($this->uri->segment(3));
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect('anak');
  }
}
