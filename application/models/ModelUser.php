<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class ModelUser extends CI_Model {

    public function simpanData($data = null) { 
        $this->db->insert('user', $data); 
    } 
    
    public function cekData($where = null) { 
        return $this->db->get_where('user', $where); 
    } 
    
    public function getUserWhere($where = null) { 
        return $this->db->get_where('user', $where); 
    }
    
    public function cekUserAccess($where = null) { 
        $this->db->select('*'); $this->db->from('access_menu'); 
        $this->db->where($where); 
        return $this->db->get();
    } 
    
    public function getUserLimit() { $this->db->select('*'); 
        $this->db->from('user');
        $this->db->limit(10, 0);
        return $this->db->get(); 
    }
    
    public function joinKategoriBuku($where) { 
        $this->db->from('buku'); 
        $this->db->join('kategori','kategori.id_kategori = buku.id_kategori'); 
        $this->db->where($where); 
        return $this->db->get(); 
    }

}

