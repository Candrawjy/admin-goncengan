<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Banner_M extends CI_Model
{
    public function getDataBanner()
    {
        $this->db->select('*');
        $this->db->from('banner');
        $this->db->order_by('created_at','DESC');
        $query = $this->db->get();
        return $query;
    }

	public function add($data)
	{
		$this->db->insert('banner', $data);
	}

	public function edit($where, $data)
	{
		$this->db->where('id', $where);
		$this->db->update('banner', $data);
	}

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}