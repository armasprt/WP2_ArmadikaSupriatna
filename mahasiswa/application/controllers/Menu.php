<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller{
    public function __construct()
    {
        parent::__construct();
        $this->load->model("menu_model");
        $this->load->library("form_validation");
    }

    public function index(){
        $this->load->view("view_menu", $data);
    }

    public function add() {
        $menu = $this->menu_model;
        $validation = $this->form_validation;
        $validation->set_rules($menu->rules());

        if ($validation->run()) {
            $menu->save();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
            redirect(site_url('Menu'));
        }

        $this->load->view("form_menu");
    }

    public function edit($id = null) {
        if (!isset($id)) redirect('view_menu');

        $menu = $this->menu_model;
        $validation = $this->form_validation;
        $validation->set_rules($menu->rules());

        if ($validation->run()) {
            $menu->update();
            $this->session->set_flashdata('success', 'Berhasil Disimpan');
            redirect(site_url('Menu'));
        }

        $data['menus'] = $menu->getId($id);
        if (!$data['menus']) show_404();

        $this->load->view("form_edit", $data);
    }

    public function delete($id = null) {
        if (!isset($id)) show_404();

        if ($this->menu_model->delete($id)) {
            redirect(site_url('Menu'));
        }
    }
}
?>