<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
		$this->load->model('model_pendaftaran');
		$this->load->helper('admin_helper');
	}

	public function index()
	{
		$this->load->view('admin_page', FALSE);
	}

	function login()
	{
		if(isset($_POST['submit'])) {

			$username = $this->input->post('useradmin');
			$password = $this->input->post('passadmin');

			$res = $this->model_login->login_admin($username,$password);

			if ($res==TRUE) {
				$status = array (
					'status_login' => 'oke',
					'username' => $username
					);

				$this->session->set_userdata($status);

				redirect('admin/dashboard');
			}
			else {
				$this->session->set_flashdata('status_login', '<div class="alert alert-danger">username atau password salah</div>');
				redirect('admin');
			}

		}
		else {
			$this->load->view('landing_page');
		}
	}

	function dashboard()
	{
		// memeriksa login admin
		periksa_login();

		// mengambil data pada database
		$isi = $this->model_pendaftaran->get_data_date();
		$data = $this->model_pendaftaran->get_data_all();
		$comp = array(
			'data' => $data,
			'tabel' => $this->load->view('tabel_hari_ini', array('isi' => $isi), TRUE),
			'hari_ini' => $this->load->view('total_hari_ini', array('isi' => $isi), TRUE)
			);
		$this->load->view('dashboard_page', $comp, FALSE);
	}

	function do_setting()
	{
		$tgl_daftar = $this->input->post('tgl_pendaftaran');
		$nope = $this->input->post('tlp_pendaftaran');


		$this->model_pendaftaran->edit_tanggal($tgl_daftar, $nope);


	}

	function setting()
	{
		$this->load->view('setting_page', FALSE);
	}

	function total_pendaftar()
	{
		$data = $this->model_pendaftaran->get_data_all();
		$this->load->view('admin_totaldaftar_page', array('data' => $data), FALSE);
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('admin');
	}

	function delete_data($id)
	{
		$act = $this->model_pendaftaran->do_delete($id);
		if ($act>0) {
			redirect('admin/dashboard');
		}
		else {
			echo "gagal menghapus";
		}
	}

	function cetak_excel()
	{
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=laporan.xls");

		$data = $this->model_pendaftaran->get_data_all();
		$this->load->view('tabel_total_daftar', array('data' => $data), FALSE);
	}

}

/* End of file admin.php */
/* Location: ./application/controllers/admin.php */