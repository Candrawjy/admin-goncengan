<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BannerController extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->library('upload');
		$this->load->model('Banner_M');
		if ($this->session->userdata('email') == NULL) {
			redirect('login');
		}
	}

	public function set_upload_options($newName)
	{
		$config = [
			'upload_path' 	=> './assets/images/banner/',
			'allowed_types' => 'jpg|png|jpeg',
			'max_size'      => 10280,
			'file_name'		=> $newName,
			'overwrite'     => FALSE,
		];

		return $config;
	}

	public function list_data_banner()
	{
		$data['title'] = "List Data Banner";
		$data['banner'] = $this->Banner_M->getDataBanner()->result();

		$this->load->view('partials/header', $data);
		$this->load->view('banner/list-data');
		$this->load->view('partials/footer');
	}

	public function add_data_banner()
	{
		$random = substr(md5(rand()),0,5);

		$this->form_validation->set_rules('nama_banner', 'Nama Banner', 'required|trim');

		if (empty($_FILES['userfile']['name'])) {
			$this->form_validation->set_rules('userfile', 'Foto Banner', 'required');
		}

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');

		$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Tambah Data Banner";

			$this->load->view('partials/header', $data);
			$this->load->view('banner/add-data');
			$this->load->view('partials/footer');
		} else {
			$dataInfo = [];
			$files = $_FILES;
			$filesCount = count($_FILES['userfile']['name']);
			for ($i = 0; $i < $filesCount; $i++) {
				if ($files['userfile']['name'][$i] != '') {
					$_FILES['userfile']['name'] = $files['userfile']['name'][$i];
					$_FILES['userfile']['type'] = $files['userfile']['type'][$i];
					$_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
					$_FILES['userfile']['error'] = $files['userfile']['error'][$i];
					$_FILES['userfile']['size'] = $files['userfile']['size'][$i];

					$oldName = explode('.', $_FILES['userfile']['name']);
					$newName =  str_replace(' ', '-', $oldName[0]) . "_" . $random . '.' . $oldName[1];

					$this->upload->initialize($this->set_upload_options($newName));
					$this->upload->do_upload('userfile');

					$dataInfo[] = $this->upload->data();
				}
			}

			$data = array(
				'nama_banner' => $this->input->post('nama_banner'),
				'foto_banner' => $dataInfo[0]['file_name'],
			);

			$this->Banner_M->add($data);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('data-banner');
			} else {
				$this->session->set_flashdata('success', 'Data Gagal Ditambahkan');
				redirect('data-banner');
			}
		}

	}

	public function edit_data_banner($id)
	{
		$random = substr(md5(rand()),0,5);
		if ($this->input->post('nama_banner')) {
			$this->form_validation->set_rules('nama_banner', 'Nama Banner', 'required|trim');
		}

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
		$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Edit Data Banner";
			$data['banner'] = $this->db->get_where('banner', ['id' => $id])->row_array();

			$this->load->view('partials/header', $data);
			$this->load->view('banner/edit-data');
			$this->load->view('partials/footer');
		} else {
			$foto_banner = $_FILES['foto_banner']['name'] == "" ? "" : explode('.', $_FILES['foto_banner']['name']);
			$foto_banner = $foto_banner == '' ? $this->input->post('tmp_foto_banner') : str_replace(' ', '-', $foto_banner[0]) . "_" . $random . '.' . $foto_banner[1];

			foreach ($_FILES as $key => $value) {
				$oldName = explode('.', $_FILES[$key]['name']);
				if (!empty($value['tmp_name'])) {
					$newName =  str_replace(' ', '-', $oldName[0]) . "_" . $random . '.' . $oldName[1];

					$this->upload->initialize($this->set_upload_options($newName));

					if (!$this->upload->do_upload($key)) {
						echo $this->upload->display_errors();
						die();
					} else {
						$this->upload->data($key);
						if ($key == 'foto_banner') {
							if ($this->input->post('tmp_foto_banner') != "") {
								unlink(FCPATH . 'assets/images/banner/' . $this->input->post('tmp_foto_banner'));
							}
						}
					}
				}
			}

			$data = [
				'nama_banner' => $this->input->post('nama_banner'),
				'foto_banner' => $foto_banner,
			];

			$where = $this->input->post('id');
			$this->Banner_M->edit($where, $data);
			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Diubah');
				redirect('data-banner');
			} else {
				$this->session->set_flashdata('success', 'Tidak ada perubahan');
				redirect('data-banner');
			}
		}
	}

	public function delete_data_banner($id)
	{
		$where = array('id' => $id);
		$getdata = $this->db->select('foto_banner')->get_where('banner', ['id' => $id])->result_array();

		foreach ($getdata as $gd) {
			if ($gd['foto_banner'] != NULL || $gd['foto_banner'] != '') {
				unlink(FCPATH . 'assets/images/banner/' . $gd['foto_banner']);
			}
		}
		$this->Banner_M->delete($where, 'banner');
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
			redirect('data-banner');
		} else {
			$this->session->set_flashdata('error', 'Gagal Menghapus Data');
			redirect('data-banner');
		}
	}

}
