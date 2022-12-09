<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna_M extends CI_Model {

    public function getDataUser()
    {
        $this->db->order_by('user.created_at','DESC');
        $query = $this->db->get('user');
        return $query;
    }

    public function add($post)
    {
        $params['id_role'] = $post['id_role'];
        $params['nama_user'] = $post['nama_user'];
        $params['email_user'] = $post['email_user'];
        $params['password'] = md5($post['password']);
        $params['nohp_user'] = $post['nohp_user'];
        $params['is_active'] = 1;

        $this->db->insert('user', $params);
    }

    public function edit($post)
    {
        if (!empty($post['nama'])) {
            $params['nama'] = $post['nama'];
        }
        if (!empty($post['nim'])) {
            $params['nim'] = $post['nim'];
        }
        if (!empty($post['no_wa'])) {
            $params['no_wa'] = $post['no_wa'];
        }
        if (!empty($post['jenis_kelamin'])) {
            $params['jenis_kelamin'] = $post['jenis_kelamin'];
        }
        if (!empty($post['email'])) {
            $params['email'] = $post['email'];
        }
        if (!empty($post['password'])) {
            $params['password'] = md5($post['password']);
        }

        if ($post['is_active'] == 0) {
            $params['is_active'] = 0;
        } else if ($post['is_active'] == 1) {
            $params['is_active'] = 1;
        }

        if ($post['is_banned'] == 0) {
            $params['is_banned'] = 0;
        } else if ($post['is_banned'] == 1) {
            $params['is_banned'] = 1;
        }

        if ($post['is_admin'] == 0) {
            $params['is_admin'] = 0;
        } else if ($post['is_admin'] == 1) {
            $params['is_admin'] = 1;
        }

        $this->db->where('id', $post['id']);
        $this->db->update('user', $params);
    }

    public function delete($where, $table)
    {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function import_data_pengguna($data)
    {
        return $this->db->insert_batch('user', $data);
    }
   
}