<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_guru extends CI_Model
{

    private $table = 'data_guru'; //this is table name
    private $pk = 'id_guru'; //this is primary key


    public function __construct()
    {
        parent::__construct();
        //Codeigniter : Write Less Do More
    }

    public function GetAll()
    {
        $jabatan = $this->input->post('jabatan');
        $status = $this->input->post('status');
        $pendidikan = $this->input->post('pendidikan');

        $this->db->join('user', 'user.id_user = data_guru.id_user');
        $this->db->order_by('data_guru.id_user', 'desc');
        if ($pendidikan) {
            $this->db->where('pendidikan', $pendidikan);
        }
        return $this->db->get($this->table); //u can use library cidbget
    }
    public function save($data)
    {
        if (!empty($_FILES['foto_guru']['name'])) {
            $upload = $this->_do_uploadimg();
            $data['foto_guru'] = $upload;
        }
        return $this->db->insert($this->table, $data);
    }

    private function _do_uploadimg()
    {
        unset($config);
        $config['upload_path']    = './upload/foto_guru/';
        $config['allowed_types']  = '.gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'Foto guru' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_guru')) {
            $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
            redirect('guru/tambah', 'refresh');
        }
        return $this->upload->data('file_name');
    }

    public function GetById($id)
    {
        $this->db->join('user', 'user.id_user = data_guru.id_user');
        $this->db->where($this->pk, $id); //u can use cidbwhere
        return $this->db->get($this->table)->row_array();
    }

    public function update($id, $data)
    {
        if (!empty($_FILES['foto_guru']['name'])) {
            $upload = $this->_do_uploadimg_update();
            $data['foto_guru'] = $upload;
            $file_img = './upload/foto_guru/' . $this->input->post('old_img');
            unlink($file_img);
        }
        $this->db->where($this->pk, $id);
        return $this->db->update($this->table, $data);
    }

    private function _do_uploadimg_update()
    {
        unset($config);
        $config['upload_path']    = './upload/foto_guru/';
        $config['allowed_types']  = '.gif|jpg|png|jpeg';
        $config['max_size']       = 2048;
        $config['file_name']      = 'Foto guru' . date('ymd') . '-' . substr(md5(rand()), 0, 10);

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        if (!$this->upload->do_upload('foto_guru')) {
            $this->session->set_flashdata('error', $this->upload->display_errors('', ''));
            redirect('guru/edit/' . $this->input->post('nik_guru'), 'refresh');
        }
        return $this->upload->data('file_name');
    }

    public function delete($id)
    {
        $data = $this->M_guru->GetAll($id)->row();
        if ($data->foto_guru != null) {
            $file_img = './upload/foto_guru/' . $data->foto_guru;
            unlink($file_img);
        }
        $this->db->where($this->pk, $id);
        $this->db->delete($this->table);
    }

    function cek_id($code, $id = null)
    {
        $this->db->from('data_guru');
        $this->db->where('id_guru', $code);
        if ($id != null) {
            $this->db->where('id_guru !=', $id);
        }
        $query = $this->db->get();
        return $query;
    }
}
