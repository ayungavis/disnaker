<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * VacancyController adalah class untuk fungsi job
 *
 * By @ayungavis
 */

class VacancyController extends CI_Controller 
{
	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat VacancyController dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct() 
	{
		parent::__construct();

		// Load form validation
		$this->load->library('form_validation');

		// Load model
		$this->load->model('Vacancy');
	}

	/**
	 * Index adalah fungsi utama dari controller
	 *
	 * By @ayungavis
	 */
	public function index() 
	{
		// Halaman judul
		$data['title'] = 'Daftar Lowongan Pekerjaan';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		$data['vacancies'] = $this->Vacancy->all();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('admin/vacancies/list.php', $data);
		$this->load->view('templates/footer.php');	
	}

	/**
	 * Add adalah fungsi untuk menambahkan lowongan
	 * pekerjaan baru
	 *
	 * By @ayungavis
	 */
	public function add()
	{
		// Halaman judul
		$data['title'] = 'Tambah Lowongan Pekerjaan';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		// Form validation
		$this->form_validation->set_rules('company', 'company', 'required|trim');

		$data['user_id'] = $this->session->userdata('id');

		// Jika validasi gagal
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php');
			$this->load->view('templates/sidebar.php');
			$this->load->view('admin/vacancies/add.php', $data);
			$this->load->view('templates/footer.php');
		}
		else {
			// Upload gambar
			$upload = $this->Vacancy->upload();

			// Jika upload sukses
			if ($upload['result'] == 'success') {
				// Membuat thumbnail
				$this->createThumbnail($upload['file']['file_name']);

				// Proses input data ke mysql
				$this->Vacancy->save($upload);
				$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Lowongan pekerjaan baru berhasil ditambahkan.</div>');
				redirect('admin/vacancies');
			}
			else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">'. $upload['error'] .'</div>');
				redirect('admin/vacancies/add');
			}
		}
	}

	public function detail($id) 
	{
		// Halaman judul
		$data['title'] = 'Detail Lowongan Kerja';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		// Ambil data dari database
		$data['vacancy'] = $this->Vacancy->show($id);

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('admin/vacancies/detail.php', $data);
		$this->load->view('templates/footer.php');
	}

	public function edit($id)
	{
		// Halaman judul
		$data['title'] = 'Edit Lowongan Kerja';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		// Form validation
		$this->form_validation->set_rules('company', 'company', 'required|trim');

		$data['user_id'] = $this->session->userdata('id');

		// Ambil data dari database
		$data['vacancy'] = $this->Vacancy->show($id);

		// Jika validasi gagal
		if ($this->form_validation->run() == false) {
			$this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php');
			$this->load->view('templates/sidebar.php');
			$this->load->view('admin/vacancies/edit.php', $data);
			$this->load->view('templates/footer.php');
		}
		else {
			$this->Vacancy->update();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan.</div>');
			redirect('admin/vacancies');
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
		$this->Vacancy->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus.</div>');
		redirect('admin/vacancies');
	}

	public function createThumbnail($image)
	{
		$source_path = 'upload/vacancies/'. $image;
		$target_path = 'upload/vacancies/thumbnails/';

		$config = [
			'image_library' => 'gd2',
			'source_image' => $source_path,
			'new_image' => $target_path,
			'maintain_ratio' => true,
			'create_thumb' => true,
			'thumb_marker' => '_thumb',
			'width' => 150,
			'height' => 150
		];

		$this->load->library('image_lib', $config);

		if (!$this->image_lib->resize()) {
			echo $this->image_lib->display_errors();
		}

		$this->image_lib->clear();
	}
}
