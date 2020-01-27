<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('model_login');
		$this->load->model('model_pendaftaran');
		$this->load->helper('login_helper');
	}

	function cetak_pdf($id)
	{


		$data = $this->model_pendaftaran->get_data_calon($id);

	   // load view yang akan digenerate atau diconvert
		// contoh kita akan membuat pdf dari halaman welcome codeigniter
		$this->load->view('cetak_page', array ('data' => $data), FALSE);
		// dapatkan output html
		
		$html = $this->output->get_output();
		
		// Load/panggil library dompdfnya
		$this->load->library('dompdf_gen');
		
		// Convert to PDF
		$this->dompdf->load_html($html);
		$this->dompdf->render();
		//utk menampilkan preview pdf
		$this->dompdf->stream("welcome.pdf",array('Attachment'=>0));
		//atau jika tidak ingin menampilkan (tanpa) preview di halaman browser
		//$this->dompdf->stream("bukti_pendaftaran.pdf");
	}

	function dashboard($id)
	{
		periksa_login(); // <-- helper login

		$data = $this->model_pendaftaran->get_data_calon($id);

		$this->load->view('user_page', array('data' => $data), FALSE);
	}

	function data_password()
	{
		$email = $this->input->post('email');
		$tanggal_lahir = $this->input->post('tanggal_lahir');
		$data = $this->model_pendaftaran->get_lupa_password($email, $tanggal_lahir);
		if($data == TRUE) {
			$password = $data['password'];
			$this->session->set_flashdata('password', $password);
			redirect('user/lupa_password');
		}
		else {
			$this->session->set_flashdata('password', '*email/tanggal salah*');
			redirect('user/lupa_password');
		}
		//$password = $data['password'];
		//$this->session->set_flashdata('password', $password);
	}

	function login()
	{
		if(isset($_POST['submit'])) {

			$email = $this->input->post('email');
			$password = $this->input->post('password');

			$res = $this->model_login->login_user($email,$password);

			if ($res==TRUE) {
				$status = array (
					'status_login' => 'oke',
					'email' => $email
					);
				$id = $res['id'];

				$this->session->set_userdata($status);

				redirect('user/dashboard/'.$id);
			}
			else {
				$this->session->set_flashdata('status_login', '<div class="alert alert-warning">email atau password yang dimasukkan salah</div>');
				redirect('user/login');
			}

		}
		else {
			$this->load->model('model_pendaftaran');
			$data = $this->model_pendaftaran->get_info();
			$this->load->view('landing_page', array('data' => $data), FALSE);
		}
	}

	function lupa_password()
	{
		$this->load->view('lupa_password_page');
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('welcome');
	}

}

/* End of file User.php */
/* Location: ./application/controllers/User.php */
