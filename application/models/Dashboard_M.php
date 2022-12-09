<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard_M extends CI_Model {

    public function data_penawaran()
    {   
        $this->db->select('user.*, penawaran.*');
        $this->db->from('penawaran');
        $this->db->join('user', 'user.id = penawaran.id_user');
        $this->db->order_by('penawaran.created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function data_pesanan()
    {   
        $this->db->select('user.*, pesanan.*');
        $this->db->from('pesanan');
        $this->db->join('user', 'user.id = pesanan.id_user');
        $this->db->order_by('pesanan.created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function data_saldo()
    {   
        $this->db->select('user.*, balance.*');
        $this->db->from('balance');
        $this->db->join('user', 'user.id = balance.id_user');
        $query = $this->db->get();
        return $query;
    }

    public function data_pengguna()
    {   
        $this->db->select('*');
        $this->db->from('user');
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

    public function data_notifikasi()
    {   
        $this->db->select('user.*, notifikasi.*');
        $this->db->from('notifikasi');
        $this->db->join('user', 'user.id = notifikasi.id_user');
        $query = $this->db->get();
        return $query;
    }

    public function data_pesan()
    {   
        $this->db->select('user.*, pesan.*');
        $this->db->from('pesan');
        $this->db->join('user', 'user.id = pesan.id_user');
        $query = $this->db->get();
        return $query;
    }

    // public function getBalance()
    // {
    //     $this->db->select('user.*, pesanan.*, penawaran.*, SUM(pesanan.harga) AS balance');
    //     $this->db->from('pesanan');
    //     $this->db->join('user', 'user.id = pesanan.id_user');
    //     $this->db->join('penawaran', 'penawaran.id = pesanan.id_penawaran');
    //     $this->db->where('pesanan.is_acc', '1');
    //     $this->db->where('pesanan.is_payment', '1');
    //     $this->db->where('pesanan.is_done', '1');
    //     // $this->db->where('penawaran.type', 'bisnis');
    //     $sumbalance = $this->db->get();
    //     if ($sumbalance->num_rows() > 0) {
    //         return $sumbalance->result_array();
    //     } else {
    //         return false;
    //     }
    // }

    public function getBalance()
    {
        $this->db->select('user.*, balance.*, SUM(balance.tax) AS balance');
        $this->db->from('balance');
        $this->db->join('user', 'user.id = balance.id_user');
        $this->db->order_by('balance.created_at','DESC');
        // $this->db->where('balance.id_user', $this->session->userdata('id'));
        $sumbalance = $this->db->get();
        if ($sumbalance->num_rows() > 0) {
            return $sumbalance->result_array();
        } else {
            return false;
        }
    }
}