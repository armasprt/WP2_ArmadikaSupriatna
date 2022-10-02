<?php
defined('BASEPATH') or exit ('no direct script access allowed');

class web extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->helper('url');
    }

    public function index(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('view_header', $data);
        $this->load->view('view_index', $data);
        $this->load->view('view_footer', $data);
    }

    public function about(){
        $data['judul'] = "Halaman Depan";
        $this->load->view('view_header', $data);
        $this->load->view('view_about', $data);
        $this->load->view('view_footer', $data);
    }
}
?>