<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

	public function __construct()
	{
		parent:: __construct();
		$this->load->model(array('M_user','M_auth'));
	}

	public function index()
	{
		$this->load->view('Login');
	}

	function login()
	{
		$nama = htmlspecialchars($this->input->post('nama',TRUE), ENT_QUOTES);
		$password = htmlspecialchars(md5($this->input->post('password',TRUE)), ENT_QUOTES);
		$user = $this->db->get_where('user', ['nama' => $nama])->row_array();
		// Jika Usernya Ada
		if ($user) {
			// cek password
			if ($user['password'] == $password) {
				$data = array(
					'id_user' => $user['id_user'],
					'nama' => $user['nama'],
					'email' => $user['email'],
					'role' => $user['role'],
					'img_user' => $user['img_user'],
				);
				$this->session->set_userdata($data);
				$this->session->set_flashdata('success', 'Selamat Datang <b> '.$this->session->userdata('nama').'</b>');
				redirect('Dashboard','refresh');
			}else{
				$this->session->set_flashdata('error', 'Login gagal, Password Salah');
				redirect('Auth','refresh');
			}
		} else {
			$this->session->set_flashdata('error', 'Login gagal, Username tidak terdaftar');
			redirect('Auth','refresh');
		}
	}

	public function reset()
	{
		$data = array(
			'page' => 'reset',
		);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
		if ($this->form_validation->run() == FALSE){
		$this->load->view('reset',$data);
			}
	}

	public function reset_process()
	{
		$post = $this->input->post(null, TRUE);
		if (isset($_POST['reset'])) {
			if($this->M_user->cek_email($post['email'])->num_rows() > 0){
				$token = base64_encode(random_bytes(32));
				$user_token = [
					'email' => $post['email'],
					'token' => $token,
					'created_at' => date('Y-m-d H:i:s')
				];

				$this->db->insert('user_token',$user_token);
				//start kirim email
								$config = [
											 'mailtype'  => 'html',
											 'charset'   => 'utf-8',
											 'protocol'  => 'smtp',
											 'smtp_host' => 'ssl://mail.simapanaisyiyah.site',
											 'smtp_user' => '12171226@bsi.ac.id',    // Ganti dengan email gmail kamu
											 'smtp_pass' => 'Veni123!@',      // Password gmail kamu
											 'smtp_port' => 465,
											 'crlf'      => "\r\n",
											 'newline'   => "\r\n"
									 ];
								$this->load->library('email',$config);

								$this->email->from('12171226@bsi.ac.id', 'Admin Simapan Aisyiyah');
								$this->email->to($this->input->post('email'));

				$this->email->subject('Reset Password ! | Simapan Aisyiyah Slawi');
				$this->email->message('Klik link untuk reset : <a href="'.base_url().'auth/change_pswd?email='.$post['email'].'&token='.urlencode($token).'">Reset Password</a>');

				$this->email->send();
				// end kirim email
				$this->session->set_flashdata('success', 'Data berhasil dikirim ke email anda, silahkan cek email anda');
				redirect('auth/reset');
	} else {
		$this->session->set_flashdata('error', "Maaf! Email $post[email] Tidak terdaftar,");
		redirect('auth/reset');
			}
		}
	}

	function logout()
	{
		$params = array('id_user','nama','role','email','img_user');
		$this->session->unset_userdata($params);
		$this->session->sess_destroy();
		redirect('Auth','refresh');
	}
}
