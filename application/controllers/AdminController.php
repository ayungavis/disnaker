<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * AdminController adalah class untuk fungsi administrator
 *
 * By @ayungavis
 */

class AdminController extends CI_Controller 
{
	public function index() {
		// Halaman judul
		$data['title'] = 'Dashboard';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}
		
		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('admin/dashboard.php');
		$this->load->view('templates/footer.php');
	}
}
