<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * UserController adalah class untuk fungsi user
 *
 * By @ayungavis
 */

class UserController extends CI_Controller 
{
	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat UserController dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct() 
	{
		parent::__construct();

		// Load form validation
		$this->load->library('form_validation');

		// Load model
		$this->load->model('User');
		$this->load->model('Role');
	}

	public function index() 
	{
		$data['title'] = 'Daftar Pengguna';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		$data['users'] = $this->User->all();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('admin/users/list.php', $data);
		$this->load->view('templates/footer.php');	
	}

	public function add()
	{
		$data['title'] = 'Tambah Pengguna';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		// Form Validation
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[users.email]', [
        	'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]', [
        	'min_length' => 'Password terlalu pendek! (minimal 6 karakter)'
        ]);

        $data['roles'] = $this->Role->all();

        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php');
			$this->load->view('templates/sidebar.php');
			$this->load->view('admin/users/add.php', $data);
			$this->load->view('templates/footer.php');
		}
		else {
			$this->User->save();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Akun berhasil dibuat.</div>');
			redirect('admin/users');
		}
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Pengguna';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		// Form Validation
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('password', 'password', 'trim|min_length[6]', [
        	'min_length' => 'Password terlalu pendek! (minimal 6 karakter)'
        ]);

        $data['roles'] = $this->Role->all();
        $data['user'] = $this->User->show($id);

        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php');
			$this->load->view('templates/sidebar.php');
			$this->load->view('admin/users/edit.php', $data);
			$this->load->view('templates/footer.php');
		}
		else {
			$this->User->update();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan.</div>');
			redirect('admin/users');
		}
	}

	public function delete($id)
	{
		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		// Jika id tidak ada
		if (!isset($id)) show_404();

		// Proses menghapus
		$this->User->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus.</div>');
		redirect('admin/users');
	}
}
