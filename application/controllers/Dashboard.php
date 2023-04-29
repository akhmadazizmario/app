<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

  private $folder = "dashboard/";
  private $foldertemplate = "template/";

  public function __construct()
  {
    parent::__construct();
    belum_login();
    $this->load->model(array('M_pengurus', 'M_anak', 'M_donatur', 'M_keuangan', 'M_surat_masuk', 'M_surat_keluar', 'M_inventaris', 'M_buku_tamu', 'M_user'));
    //Codeigniter : Write Less Do Moree
  }

  function index()
  {
    $getSuratMasuk = $this->M_surat_masuk->getSuratMasuk()->result();
    $data = array(
      // 'data' => $this->M_buku_tamu->GetAll()->result_array(),
      'judul' => 'Dashboard',
      'pengurus' => $this->M_pengurus->GetAll(),
      'anak' => $this->M_anak->GetAll(),
      'donatur' => $this->M_donatur->GetAll(),
      'saldo_akhir' =>  $this->M_keuangan->jumlah()->saldo,
      'surat_masuk' => $this->M_surat_masuk->GetAll(),
      'surat_keluar' => $this->M_surat_keluar->GetAll(),
      'inventaris' => $this->M_inventaris->GetAll(),
      'buku_tamu' => $this->M_buku_tamu->GetAll(),
      'user' => $this->M_user->GetAll(),
      'get_surat_masuk' => json_encode($getSuratMasuk),
      // statistik surat_masuk
      'januari'  => $this->M_statistik->januari(),
      'februari'  => $this->M_statistik->februari(),
      'maret'  => $this->M_statistik->maret(),
      'april'  => $this->M_statistik->april(),
      'mei'  => $this->M_statistik->mei(),
      'juni'  => $this->M_statistik->juni(),
      'juli'  => $this->M_statistik->juli(),
      'agustus'  => $this->M_statistik->agustus(),
      'september'  => $this->M_statistik->september(),
      'oktober'  => $this->M_statistik->oktober(),
      'november'  => $this->M_statistik->november(),
      'desember'  => $this->M_statistik->desember(),
      // statistik surat_keluar
      'sjanuari'  => $this->M_statistik->sjanuari(),
      'sfebruari'  => $this->M_statistik->sfebruari(),
      'smaret'  => $this->M_statistik->smaret(),
      'sapril'  => $this->M_statistik->sapril(),
      'smei'  => $this->M_statistik->smei(),
      'sjuni'  => $this->M_statistik->sjuni(),
      'sjuli'  => $this->M_statistik->sjuli(),
      'sagustus'  => $this->M_statistik->sagustus(),
      'sseptember'  => $this->M_statistik->sseptember(),
      'soktober'  => $this->M_statistik->soktober(),
      'snovember'  => $this->M_statistik->snovember(),
      'sdesember'  => $this->M_statistik->sdesember(),
      // Anak Masuk Panti
      'tujuhbelas' => $this->M_statistik->tujuhbelas(),
      'delapanbelas' => $this->M_statistik->delapanbelas(),
      'sembilanbelas' => $this->M_statistik->sembilanbelas(),
      'sekarang' => $this->M_statistik->sekarang(),
      // statistik donatur Uang
      'dujanuari'  => $this->M_statistik->dujanuari(),
      'dufebruari'  => $this->M_statistik->dufebruari(),
      'dumaret'  => $this->M_statistik->dumaret(),
      'duapril'  => $this->M_statistik->duapril(),
      'dumei'  => $this->M_statistik->dumei(),
      'dujuni'  => $this->M_statistik->dujuni(),
      'dujuli'  => $this->M_statistik->dujuli(),
      'duagustus'  => $this->M_statistik->duagustus(),
      'duseptember'  => $this->M_statistik->duseptember(),
      'duoktober'  => $this->M_statistik->duoktober(),
      'dunovember'  => $this->M_statistik->dunovember(),
      'dudesember'  => $this->M_statistik->dudesember(),
      // statistik donatur Logistik
      'dljanuari'  => $this->M_statistik->dljanuari(),
      'dlfebruari'  => $this->M_statistik->dlfebruari(),
      'dlmaret'  => $this->M_statistik->dlmaret(),
      'dlapril'  => $this->M_statistik->dlapril(),
      'dlmei'  => $this->M_statistik->dlmei(),
      'dljuni'  => $this->M_statistik->dljuni(),
      'dljuli'  => $this->M_statistik->dljuli(),
      'dlagustus'  => $this->M_statistik->dlagustus(),
      'dlseptember'  => $this->M_statistik->dlseptember(),
      'dloktober'  => $this->M_statistik->dloktober(),
      'dlnovember'  => $this->M_statistik->dlnovember(),
      'dldesember'  => $this->M_statistik->dldesember(),
      // Pemasukan perbulan ini
      'perbulan' => $this->M_statistik->get_pemasukanperbulan()->result_array(),
      'perbulan_lalu' => $this->M_statistik->get_pemasukanperbulanlalu()->result_array(),
      // Pengeluaran perbulan ini
      'pperbulan' => $this->M_statistik->get_pengeluaranperbulan()->result_array(),
      'pperbulan_lalu' => $this->M_statistik->get_pengeluaranperbulanlalu()->result_array(),
    );
    //  var_dump($getSuratMasuk); die();
    $this->template->load($this->foldertemplate . 'template', $this->folder . 'dashboard', $data);
  }
}
