<?php

function periksa_login()
{
	$CI =& get_instance();
	$session = $CI->session->userdata('status_login');
	if($session!='oke') {
		$CI->session->set_flashdata('periksa', '<div class="alert alert-danger">Anda harus login terlebih dahulu</div>');
		redirect('welcome');
	}
}

?>