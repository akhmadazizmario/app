<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{

  private $folder = "user/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();
    $this->load->model(array('M_user'));
    belum_login();
    //ARRAY
  }

  public function view($id)
  {
    $query = $this->M_user->get($id);
    if ($query->num_rows() > 0) {
      $user = $query->row();
      $data = array(
        'judul' => 'Profil',
        'subpage' => 'Edit',
        'row' => $user,
        // 'bagian' => $this->M_bagian->get(),
      );
      $this->template->load($this->foldertemplate . 'template', $this->folder . 'profil', $data);
    } else {
      $this->session->set_flashdata('error', "Data tidak ditemukan");
      redirect('profil/view/' . $this->fungsi->user_login()->id_user, 'refresh');
    }
  }

  public function process()
  {
    $post = $this->input->post(null, TRUE);
    if (isset($_POST['Edit'])) {
      $this->M_user->edit($post);
    }
    if ($this->db->affected_rows() > 0) {
      $this->session->set_flashdata('success', 'Data berhasil disimpan');
    }
    redirect('profil/view/' . $this->fungsi->user_login()->id_user);
  }

  public function update()
  {
    $username = $this->fungsi->user_login()->nama;
    $password = md5($this->input->post('sandi_lama'));
    $post = $this->input->post(null, TRUE);
    $user = $this->db->get_where('user', ['nama' => $username])->row_array();
    // jika usernya ada
    if ($user) {
      // cek password
      if ($password == $user['password']) {
        if ($this->input->post('sandi_baru') != $this->input->post('konf_password')) {
          $this->session->set_flashdata('error', 'Sandi baru dan konfirmasi sandi baru tidak sama');
          redirect('profil/view/' . $this->fungsi->user_login()->id_user);
        } elseif (isset($_POST['Edit'])) {
          $this->M_user->ubah_password($post);
        }
        $url = site_url('auth/logout');
        $this->session->set_flashdata('success', "Password berhasil diupdate <br/> Anda akan diarahkan keluar <meta http-equiv='refresh' content='5;url=$url'>");
        redirect('profil/view/' . $this->fungsi->user_login()->id_user);
      } else {
        $this->session->set_flashdata('error', 'Sandi Lama tidak sama dengan yang ada didatabase');
        redirect('profil/view/' . $this->fungsi->user_login()->id_user);
      }
    } else {
      $this->session->set_flashdata('error', 'Data error tidak terdaftar');
      redirect('profil/view/' . $this->fungsi->user_login()->id_user);
    }
  }
}
