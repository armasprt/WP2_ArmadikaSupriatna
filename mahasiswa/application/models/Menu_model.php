<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu_model extends CI_Model{
    private $_table = "tabel_menu";

    public $kode_menu;
    public $nama_menu;
    public $harga_menu;
    public $image = NULL;

    public function rules() {
        return [
            ['field' => 'nama_menu',
            'label' => 'Nama Menu',
            'rules' => 'required'],

            ['field' => 'harga_menu',
            'label' => 'Harga Menu',
            'rules' => 'required']
        ];
    }

    public function getAll(){
        return $this->db->get($this->_table)->result();
    }

    public function getId($id) {
        return $this->db->get_where($this->_table, ["kode_menu" => $id])->row();
    }

    public function save() {
        $post = $this->input->post();
        $this->nama_menu = $post["nama_menu"];
        $this->harga_menu = $post["harga_menu"];
        return $this->db->insert($this->_table, $this);
    }

    public function update() {
        $post = $this->input->post();
        $this->kode_menu = $post["id"];
        $this->nama_menu = $post["nama_menu"];
        $this->harga_menu = $post["harga_menu"];
        return $this->db->update($this->_table, $this, array('kode_menu' => $post['id']));
    }

    public function delete($id) {
        return $this->db->delete($this->_table, array('kode_menu' => $id));
    }
}
?>