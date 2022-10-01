<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Inventaris extends CI_Controller{

  private $folder = "inventaris/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();

    $this->load->model(array('M_user','M_inventaris'));
    belum_login();
    //array berhubungan dengan database, array di sini untuk meload lebih dari satu model
    //Codeigniter : Write Less Do More
  }

  function index()
  {
    $data = array(
      'data' => $this->M_inventaris->GetAll()->result_array(),
      'judul' => 'Data Inventaris',
     ); //u can use library array
    $this->template->load($this->foldertemplate.'template',$this->folder.'read',$data);
  }

  public function tambah()
  {
    $data = array(
        'judul' => 'Tambah Data',
        'inventaris' => $this->M_inventaris->GetAll(),
    );
    $this->template->load($this->foldertemplate.'template',$this->folder.'tambah',$data);
  }

  public function save()
  {
    $data = array( //fungsi array disini adalah untuk mengumpulkan data
      'id_barang' => $this->input->post('id_barang'),
      'nama_barang' => $this->input->post('nama_barang'),
      'identitas_barang' => $this->input->post('identitas_barang'),
      'tgl_terima' => $this->input->post('tgl_terima'),
      'keadaan' => $this->input->post('keadaan'),
      'jumlah' => $this->input->post('jumlah'),
      'asal' => $this->input->post('asal'),
      'id_user' => $this->fungsi->user_login()->id_user,
      );
      if ($this->input->post('tgl_terima') > date ('Y-m-d')) {
        $this->session->set_flashdata('error',"Anda memasukkan tanggal yang lebih dari tanggal sekarang.");
        redirect('inventaris/tambah','refresh');
      }
    $this->M_inventaris->save($data);
    $this->session->set_flashdata('success', 'Data berhasil disimpan');
    redirect ('inventaris','refresh');
  }

  public function edit()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_inventaris->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Edit Data',
      'inventaris' => $this->M_inventaris->GetAll(),
    );
    $this->template->load($this->foldertemplate.'template',$this->folder.'edit',$data);
  }

  public function detail()
  {
    $id = $this->uri->segment(3); //uri segment 1 = contorller, 2 = fungsi controller, 3 = id
    $data = array(
      'row' => $this->M_inventaris->GetById($id), //menampilkan data pengurus dari model berdasarkan id
      'judul' => 'Detail Data',
      'inventaris' => $this->M_inventaris->GetAll(),
    );
    $this->template->load($this->foldertemplate.'template',$this->folder.'detail',$data);
  }

  public function update()
  {
    $id = $this->uri->segment(3);
    $data = array(
      'id_barang' => $this->input->post('id_barang'),
      'nama_barang' => $this->input->post('nama_barang'),
      'identitas_barang' => $this->input->post('identitas_barang'),
      'tgl_terima' => $this->input->post('tgl_terima'),
      'keadaan' => $this->input->post('keadaan'),
      'jumlah' => $this->input->post('jumlah'),
      'asal' => $this->input->post('asal'),
      'id_user' => $this->fungsi->user_login()->id_user,
    );
    $this->M_inventaris->update($id,$data);
    $this->session->set_flashdata('success', 'Data berhasil diubah');
    redirect ('inventaris','refresh');
  }

  public function delete($id)
  {
    $id = $this->uri->segment(3);
    $this->M_inventaris->delete($id);
    $this->session->set_flashdata('success', 'Data berhasil dihapus');
    redirect ('inventaris','refresh');
  }

}
