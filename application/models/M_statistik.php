<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_statistik extends CI_Model
{

  public function __construct()
  {
    parent::__construct();
    //Codeigniter : Write Less Do More
  }

  // SURATMASUK
  public function januari()
  {
    $bulan = 1;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function februari()
  {
    $bulan = 2;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function maret()
  {
    $bulan = 3;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function april()
  {
    $bulan = 4;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function mei()
  {
    $bulan = 5;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function juni()
  {
    $bulan = 6;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function juli()
  {
    $bulan = 7;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function agustus()
  {
    $bulan = 8;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function september()
  {
    $bulan = 9;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function oktober()
  {
    $bulan = 10;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function november()
  {
    $bulan = 11;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function desember()
  {
    $bulan = 12;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_masuk');
    $this->db->where('MONTH(tgl_terima)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }
  // END SURAT MASUK

  // SURAT KELUAR
  public function sjanuari()
  {
    $bulan = 1;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function sfebruari()
  {
    $bulan = 2;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function smaret()
  {
    $bulan = 3;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function sapril()
  {
    $bulan = 4;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function smei()
  {
    $bulan = 5;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function sjuni()
  {
    $bulan = 6;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function sjuli()
  {
    $bulan = 7;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function sagustus()
  {
    $bulan = 8;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function sseptember()
  {
    $bulan = 9;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function soktober()
  {
    $bulan = 10;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function snovember()
  {
    $bulan = 11;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }

  public function sdesember()
  {
    $bulan = 12;
    // $tahun = $this->input->post('tahun');
    $this->db->from('surat_keluar');
    $this->db->where('MONTH(tgl_surat_kel)', $bulan);
    // if ($tahun) {
    //   $this->db->where('YEAR(tgl_terima)',$tahun);
    // } else {
    //   $this->db->where('YEAR(tgl_terima)',date('Y'));
    // }
    $query = $this->db->get();
    return $query;
  }
  // END SURAT KELUAR

  // JADWAL AGENDA
  public function jjanuari()
  {
    $bulan = 1;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jfebruari()
  {
    $bulan = 2;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jmaret()
  {
    $bulan = 3;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function japril()
  {
    $bulan = 4;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jmei()
  {
    $bulan = 5;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jjuni()
  {
    $bulan = 6;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jjuli()
  {
    $bulan = 7;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jagustus()
  {
    $bulan = 8;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jseptember()
  {
    $bulan = 9;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function joktober()
  {
    $bulan = 10;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jnovember()
  {
    $bulan = 11;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }

  public function jdesember()
  {
    $bulan = 12;
    $tahun = $this->input->post('jtahun');
    $this->db->from('agenda');
    $this->db->where('MONTH(tgl_agenda)', $bulan);
    if ($tahun) {
      $this->db->where('YEAR(tgl_agenda)', $tahun);
    } else {
      $this->db->where('YEAR(tgl_agenda)', date('Y'));
    }
    $query = $this->db->get();
    return $query;
  }
  // END JADWAL AGENDA

  // START ANAK
  public function tujuhbelas()
  {
    $tahun = 2017;
    $this->db->from('data_siswa');
    $this->db->where('tahun_masuk', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function delapanbelas()
  {
    $tahun = 2018;
    $this->db->from('data_siswa');
    $this->db->where('tahun_masuk', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function sembilanbelas()
  {
    $tahun = 2019;
    $this->db->from('data_siswa');
    $this->db->where('tahun_masuk', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function sekarang()
  {
    $tahun = date('Y');
    $this->db->from('data_siswa');
    $this->db->where('tahun_masuk', $tahun);
    $query = $this->db->get();
    return $query;
  }
  // END ANAK

  // START DONATUR KATEGORI UANG
  public function dujanuari()
  {
    $bulan = 1;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dufebruari()
  {
    $bulan = 2;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dumaret()
  {
    $bulan = 3;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function duapril()
  {
    $bulan = 4;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dumei()
  {
    $bulan = 5;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dujuni()
  {
    $bulan = 6;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dujuli()
  {
    $bulan = 7;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function duagustus()
  {
    $bulan = 8;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function duseptember()
  {
    $bulan = 9;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function duoktober()
  {
    $bulan = 10;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dunovember()
  {
    $bulan = 11;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dudesember()
  {
    $bulan = 12;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 1);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }
  // END DONATUR KATEGORI UANG

  // START DONATUR KATEGORI Logistik
  public function dljanuari()
  {
    $bulan = 1;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dlfebruari()
  {
    $bulan = 2;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dlmaret()
  {
    $bulan = 3;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dlapril()
  {
    $bulan = 4;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dlmei()
  {
    $bulan = 5;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dljuni()
  {
    $bulan = 6;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dljuli()
  {
    $bulan = 7;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dlagustus()
  {
    $bulan = 8;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dlseptember()
  {
    $bulan = 9;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dloktober()
  {
    $bulan = 10;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dlnovember()
  {
    $bulan = 11;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }

  public function dldesember()
  {
    $bulan = 12;
    $tahun = date('Y');
    $this->db->from('data_donatur');
    $this->db->where('kategori', 2);
    $this->db->where('MONTH(tgl_donatur)', $bulan);
    $this->db->where('YEAR(tgl_donatur)', $tahun);
    $query = $this->db->get();
    return $query;
  }
  // END DONATUR KATEGORI LOGISTIK

  // START STATISTIK PEMASUKAN KEUANGAN PERBULAN
  public function get_pemasukanperbulan()
  {
    $this->db->from('keuangan');
    $this->db->select_sum('pemasukan');
    $this->db->where('type', 1);
    $this->db->where('month(tgl_keuangan)', date('m'));
    $query = $this->db->get();
    return $query;
  }

  public function get_pemasukanperbulanlalu()
  {
    $this->db->from('keuangan');
    $this->db->select_sum('pemasukan');
    $this->db->where('type', 1);
    $this->db->where('month(tgl_keuangan)', date('m') - 1);
    $query = $this->db->get();
    return $query;
  }
  // END STATISTIK PEMASUKAN KEUANGAN PERBULAN

  // START STATISTIK PENGELUARAN KEUANGAN PERBULAN
  public function get_pengeluaranperbulan()
  {
    $this->db->from('keuangan');
    $this->db->select_sum('pengeluaran');
    $this->db->where('type', 2);
    $this->db->where('month(tgl_keuangan)', date('m'));
    $query = $this->db->get();
    return $query;
  }

  public function get_pengeluaranperbulanlalu()
  {
    $this->db->from('keuangan');
    $this->db->select_sum('pengeluaran');
    $this->db->where('type', 2);
    $this->db->where('month(tgl_keuangan)', date('m') - 1);
    $query = $this->db->get();
    return $query;
  }
  // END STATISTIK PENGELUARAN KEUANGAN PERBULAN

}
