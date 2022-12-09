<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PenggunaController extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		if ($this->session->userdata('email') == NULL) {
			redirect('login');
		}

		$this->load->model('Pengguna_M');
	}

	function email_user_check()
	{
		$post = $this->input->post(null, TRUE);
		$query = $this->db->query("SELECT * FROM user WHERE email = '$post[email]' AND id != '$post[id]' ");
		if ($query->num_rows() > 0) {
			$this->form_validation->set_message('email_user_check', '{field} ini sudah dipakai, silakan ganti');
			return FALSE;
		} else {
			return TRUE;
		}
	}

	public function list_data_pengguna()
	{
		$data['title'] = 'Data Pengguna';
		$data['pengguna'] = $this->Pengguna_M->getDataUser()->result();

		$this->load->view('partials/header', $data);
		$this->load->view('data-pengguna');
		$this->load->view('partials/footer');
	}

	public function add_data_pengguna()
	{
		$this->form_validation->set_rules('id_role', 'Peran', 'required');
		$this->form_validation->set_rules('nama_user', 'Nama', 'required');
		$this->form_validation->set_rules('email_user', 'Email', 'required|is_unique[user.email_user]');
		$this->form_validation->set_rules('nohp_user', 'No Handphone', 'required');
		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passconf', 'Konfirmasi Password', 'required|matches[password]', array('matches' => '%s tidak sesuai dengan password'));

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('max_length', '{field} maksimal 8 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silakan ganti');

		$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Tambah Data User";

			$this->load->view('admin-layout/partials/header', $data);
			$this->load->view('admin-layout/partials/navbar');
			$this->load->view('admin-layout/pengguna/add-data');
			$this->load->view('admin-layout/partials/footer');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Pengguna_M->add($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Ditambahkan');
				redirect('kelola-pengguna');
			} else {
				$this->session->set_flashdata('success', 'Data Gagal Ditambahkan');
				redirect('kelola-pengguna');
			}
		}
	}

	public function edit_data_pengguna($id)
	{
		$this->form_validation->set_rules('nama', 'Nama', 'required');

		if ($this->input->post('nim')) {
			$this->form_validation->set_rules('nim', 'NIM', 'required');
		}

		if ($this->input->post('is_active')) {
			$this->form_validation->set_rules('is_active', 'Status', 'required');
		}

		if ($this->input->post('is_banned')) {
			$this->form_validation->set_rules('is_banned', 'Status Banned', 'required');
		}

		if ($this->input->post('is_admin')) {
			$this->form_validation->set_rules('is_admin', 'Status Admin', 'required');
		}

		if ($this->input->post('email')) {
			$this->form_validation->set_rules('email', 'Email', 'required|callback_email_user_check');
		}

		if ($this->input->post('no_wa')) {
			$this->form_validation->set_rules('no_wa', 'No Whatsapp', 'required');
		}

		if ($this->input->post('password')) {
			$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		}

		$this->form_validation->set_message('required', '%s masih kosong, harap diisi');
		$this->form_validation->set_message('min_length', '{field} minimal 5 karakter');
		$this->form_validation->set_message('max_length', '{field} maksimal 8 karakter');
		$this->form_validation->set_message('is_unique', '{field} ini sudah dipakai, silakan ganti');

		$this->form_validation->set_error_delimiters('<span class="help-block text-danger">', '</span>');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = "Edit Data Pengguna";
			$data['pengguna'] = $this->db->get_where('user', ['id' => $id])->row_array();

			$this->load->view('partials/header', $data);
			$this->load->view('pengguna/edit-data');
			$this->load->view('partials/footer');
		} else {
			$post = $this->input->post(null, TRUE);
			$this->Pengguna_M->edit($post);

			if ($this->db->affected_rows() > 0) {
				$this->session->set_flashdata('success', 'Data Berhasil Diedit');
				redirect('data-pengguna');
			} else {
				$this->session->set_flashdata('success', 'Tidak ada perubahan');
				redirect('data-pengguna');
			}
		}
	}

	public function delete_data_pengguna($id)
	{
		$where = array('id' => $id);
		$this->Pengguna_M->delete($where, 'user');
		if ($this->db->affected_rows() > 0) {
			$this->session->set_flashdata('success', 'Data Berhasil Dihapus');
			redirect('data-pengguna');
		} else {
			$this->session->set_flashdata('success', 'Seluruh Data Berhasil Dihapus');
			redirect('data-pengguna');
		}
	}

}
