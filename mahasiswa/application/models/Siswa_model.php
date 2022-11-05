<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model {
    public function save() {
        $data = [
            'nama' => $this->input->post('nama'),
            'nim' => $this->input->post('nim'),
            'kelas' => $this->input->post('kelas'),
            'tgl_lahir' => $this->input->post('tgl_lahir'),
            'tmp_lahir' => $this->input->post('tmp_lahir'),
            'alamat' => $this->input->post('alamat'),
            'jk' => $this->input->post('jk'),
            'agama' => $this->input->post('agama')
        ];

        $this->load->view('data_siswa', $data);
    }
}
?>