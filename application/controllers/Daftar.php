 <?php
    defined('BASEPATH') or exit('No direct script access allowed');

    class Daftar extends CI_Controller
    {

        public function __construct()
        {
            parent::__construct();
            $this->load->model(array('M_daftar', 'M_pengaturan'));
            //Codeigniter : Write Less Do More
        }

        public function siswabaru()
        {
            $data = array(
                'judul' => 'Pendaftaran',
                'user' => $this->M_daftar->GetAll(),
                'footer' => $this->M_pengaturan->GetAll()->result_array(),
            );
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/daftar/index', $data);
            $this->load->view('frontend/footer', $data);
        }

        // function ImgThumbs($file_name)
        // {
        //     $config = array(
        //         // Large Image
        //         array(
        //             'image_library' => 'GD2',
        //             'source_image'  => './assets/images/' . $file_name,
        //             'maintain_ratio' => FALSE,
        //             'width'         => 730,
        //             'height'        => 534,
        //             'new_image'     => './assets/images/large/' . $file_name
        //         ),
        // Medium Image
        //         array(
        //             'image_library' => 'GD2',
        //             'source_image'  => './assets/images/' . $file_name,
        //             'maintain_ratio' => FALSE,
        //             'width'         => 350,
        //             'height'        => 256,
        //             'new_image'     => './assets/images/medium/' . $file_name
        //         ),
        //         // Small Image
        //         array(
        //             'image_library' => 'GD2',
        //             'source_image'  => './assets/images/' . $file_name,
        //             'maintain_ratio' => FALSE,
        //             'width'         => 100,
        //             'height'        => 72,
        //             'new_image'     => './assets/images/small/' . $file_name,
        //         )
        //     );
        //     $this->load->library('image_lib', $config[0]);
        //     foreach ($config as $item) {
        //         $this->image_lib->initialize($item);
        //         if (!$this->image_lib->resize()) {
        //             return false;
        //         }
        //         $this->image_lib->clear();
        //     }
        // }

        public function saveAnak()
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

            $data_detail = array( //Fungsi array disini adalah untuk mengumpulkan data
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
            $this->session->set_flashdata('success', 'Berhasil mendaftar, untuk informasi selanjutnya akan diberitahu melalui whatsapp group.');
            redirect('daftar/pesan', 'refresh');
        }

        public function pesan()
        {
            $data = array(
                'judul' => 'Pendaftaran',
                'user' => $this->M_daftar->GetAll(),
                'footer' => $this->M_pengaturan->GetAll()->result_array(),
                'data' => $this->M_pengaturan->GetAll()->result_array(),
            );
            $this->load->view('frontend/header', $data);
            $this->load->view('frontend/daftar/flash', $data);
            $this->load->view('frontend/footer', $data);
        }
    }
