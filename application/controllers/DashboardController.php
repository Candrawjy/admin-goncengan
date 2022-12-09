<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DashboardController extends CI_Controller {

	public function __construct()
    {
        parent::__construct();

        if ($this->session->userdata('email') == NULL) {
            redirect('login');
        }

        $this->load->model('Dashboard_M');
    }

	public function index()
	{
		$data['title'] = "Dashboard";
		$data['pengguna'] = $this->db->from("user")->where('is_active', '1')->where('is_banned', '0')->get()->num_rows();
		$data['pesanan'] = $this->db->from("pesanan")->where('is_active', '1')->get()->num_rows();
		$data['pesan'] = $this->db->from("pesan")->get()->num_rows();
		$data['balance'] = $this->Dashboard_M->getBalance();

		$this->load->view('partials/header', $data);
		$this->load->view('index');
		$this->load->view('partials/footer');
	}

	public function data_penawaran()
	{
		$data['title'] = "Data Penawaran";
		$data['penawaran'] = $this->Dashboard_M->data_penawaran()->result();

		$this->load->view('partials/header', $data);
		$this->load->view('data-penawaran');
		$this->load->view('partials/footer');
	}

	public function data_pesanan()
	{
		$data['title'] = "Data Pesanan";
		$data['pesanan'] = $this->Dashboard_M->data_pesanan()->result();

		$this->load->view('partials/header', $data);
		$this->load->view('data-pesanan');
		$this->load->view('partials/footer');
	}

	public function data_saldo()
	{
		$data['title'] = "Data Saldo";
		$data['saldo'] = $this->Dashboard_M->data_saldo()->result();

		$this->load->view('partials/header', $data);
		$this->load->view('data-saldo');
		$this->load->view('partials/footer');
	}

	public function data_notifikasi()
	{
		$data['title'] = "Data Notifikasi";
		$data['notifikasi'] = $this->Dashboard_M->data_notifikasi()->result();

		$this->load->view('partials/header', $data);
		$this->load->view('data-notifikasi');
		$this->load->view('partials/footer');
	}

	public function data_pesan()
	{
		$data['title'] = "Data Pesan";
		$data['pesan'] = $this->Dashboard_M->data_pesan()->result();

		$this->load->view('partials/header', $data);
		$this->load->view('data-pesan');
		$this->load->view('partials/footer');
	}

}
