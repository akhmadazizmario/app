<?php
  function sudah_login()
  {
    $ci =& get_instance();
    $user_session = $ci->session->userdata('nama');
    if($user_session){
      redirect('dashboard');
    }
  }

  function belum_login()
  {
    $ci =& get_instance();
    $user_session = $ci->session->userdata('nama');
    if(!$user_session){
      redirect('auth');
    }
  }

  function cek_admin()
  {
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->role != 0) {
      redirect('dashboard');
    }
  }

  function cek_keuangan()
  {
    $ci =& get_instance();
    $ci->load->library('fungsi');
    if ($ci->fungsi->user_login()->role == 2 && $ci->fungsi->user_login()->role == 0) {
      redirect('dashboard');
    }
  }

  function hitung_umur($tanggal_lahir){
  	$birthDate = new DateTime($tanggal_lahir);
  	$today = new DateTime("today");
  	if ($birthDate > $today) {
  	    exit("0 tahun 0 bulan 0 hari");
  	}
  	$y = $today->diff($birthDate)->y;
  	// $m = $today->diff($birthDate)->m;
  	// $d = $today->diff($birthDate)->d;
  	return $y." tahun ";
  }
  // echo hitung_umur("1980-12-01");

  if( !function_exists('random_bytes') )
  {
      function random_bytes($length = 6)
      {
          $characters = '0123456789abcdefghijklmnopqrstuvwxyz';
          $characters_length = strlen($characters);
          $output = '';
          for ($i = 0; $i < $length; $i++)
              $output .= $characters[rand(0, $characters_length - 1)];

          return $output;
      }
  }
