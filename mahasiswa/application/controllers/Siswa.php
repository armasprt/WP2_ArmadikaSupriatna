<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_COntroller {
    public function __construct()
    {
        parent::__construct();
        $this->load->model("siswa_model");
    }
    public function index() {
        $this->load->view('form_siswa');
    }
    public function cetak() {
        $siswa = $this->siswa_model;
        $siswa->save();
    }
}
?>