<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_daftar extends CI_Model
{
    private $table = 'data_siswa';
    private $pk    = 'nik_anak';
    private $table2 = 'detail_santri'; //this is table name
    private $pk2 = 'nik_anak';

    public function GetAll()
    {
        $pendidikan =  $this->input->post('pendidikan');
        $tahun_masuk = $this->input->post('tahun_masuk');

        $this->db->order_by($this->pk, 'desc');
        if ($this->input->post('umur') == 1) {
            $this->db->where('umur BETWEEN "7" and "11"');
        }
        if ($this->input->post('umur') == 2) {
            $this->db->where('umur BETWEEN "12" and "14"');
        }
        if ($this->input->post('umur') == 3) {
            $this->db->where('umur BETWEEN "15" and "20"');
        }
        if ($pendidikan) {
            $this->db->where('pendidikan', $pendidikan);
        }
        if ($tahun_masuk) {
            $this->db->where('tahun_masuk', $tahun_masuk);
        }
        return $this->db->get($this->table); //u can use library cidbget
    }

    public function save($data_anak)
    {
        if (!empty($_FILES['foto_anak']['name'])) {
            $upload = $this->_do_uploadimg();
            $data_anak['foto_anak'] = $upload;
        }
        if (!empty($_FILES['scan_ijasah']['name'])) {
            $upload = $this->_do_uploadimg2();
            $data_anak['scan_ijasah'] = $upload;
        }
        if (!empty($_FILES['scan_kk']['name'])) {
            $upload = $this->_do_uploadimg3();
            $data_anak['scan_kk'] = $upload;
        }
        if (!empty($_FILES['scan_akte']['name'])) {
            $upload = $this->_do_uploadimg4();
            $data_anak['scan_akte'] = $upload;
        }
        if (!empty($_FILES['ktp']['name'])) {
            $upload = $this->_do_uploadimg5();
            $data_anak['ktp'] = $upload;
        }

        return $this->db->insert($this->table, $data_anak);
    }

    private function _do_uploadimg()
    {
        unset($config);
        $config['upload_path']    = './upload/foto_anak/';
        $config['allowed_types']  = '.gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'Foto Anak' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('foto_anak');;
        return $this->upload->data('file_name');
    }

    private function _do_uploadimg2()
    {
        unset($config);
        $config['upload_path']    = './upload/scan_ijasah';
        $config['allowed_types']  = '.gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'Scan Ijasah' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('scan_ijasah');
        return $this->upload->data('file_name');
    }

    private function _do_uploadimg3()
    {
        unset($config);
        $config['upload_path']    = './upload/scan_kk';
        $config['allowed_types']  = '.gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'Scan Kartu Keluarga' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('scan_kk');
        return $this->upload->data('file_name');
    }

    private function _do_uploadimg4()
    {
        unset($config);
        $config['upload_path']    = './upload/scan_akte';
        $config['allowed_types']  = '.gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'Scan Kartu Akte Kelahiran' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('scan_akte');
        return $this->upload->data('file_name');
    }

    private function _do_uploadimg5()
    {
        unset($config);
        $config['upload_path']    = './upload/ktp';
        $config['allowed_types']  = '.gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'KTP Orang Tua' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $this->upload->do_upload('ktp');
        return $this->upload->data('file_name');
    }

    public function savedetail($data_detail)
    {
        return $this->db->insert($this->table2, $data_detail);
    }

    public function status_aktif($id)
    {
        $params = [
            'status' => '1',
        ];
        $this->db->where('nik_anak', $id);
        $this->db->update('daftar_santri', $params);
    }

    public function status_tidak_aktif($id)
    {
        $params = [
            'status' => '2',
        ];
        $this->db->where('nik_anak', $id);
        $this->db->update('daftar_santri', $params);
    }

    public function status_belum_diverifikasi($id)
    {
        $params = [
            'status' => '3',
        ];
        $this->db->where('nik_anak', $id);
        $this->db->update('daftar_santri', $params);
    }

    public function status_tidak_diterima($id)
    {
        $params = [
            'status' => '4',
        ];
        $this->db->where('nik_anak', $id);
        $this->db->update('daftar_santri', $params);
    }
}
