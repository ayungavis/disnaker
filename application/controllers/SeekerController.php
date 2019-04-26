<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * SeekerController adalah class untuk fungsi pencari kerja
 *
 * By @ayungavis
 */

class SeekerController extends CI_Controller 
{
	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat SeekerController dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct() 
	{
		parent::__construct();

		// Load form validation
		$this->load->library('form_validation');

		// Load library
		$this->load->library('pdfgenerator');

		// Load model
		$this->load->model('Seeker');
		$this->load->model('Vacancy');
		$this->load->model('Stat');
		$this->load->model('Religion');
		$this->load->model('Education');
		$this->load->model('Language');
	}

	public function index() 
	{
		$data['title'] = 'Daftar Pencari Kerja';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		$data['seekers'] = $this->Seeker->all();

		$this->load->view('templates/header.php', $data);
		$this->load->view('templates/navbar.php');
		$this->load->view('templates/sidebar.php');
		$this->load->view('admin/seekers/list.php', $data);
		$this->load->view('templates/footer.php');	
	}

	public function detailPotrait($id)
	{
		$data['title'] = 'Detail Pencari Kerja';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		$data['seeker'] = $this->Seeker->show($id);
		$data['educations'] = $this->Seeker->education($id);
		$data['experiences'] = $this->Seeker->experience($id);
		$data['languages'] = $this->Seeker->language($id);
		$data['max_education'] = $this->Seeker->max_education($id);

		$this->load->view('templates/header.php', $data);
		$this->load->view('admin/seekers/detail_potrait.php', $data);
	}

	public function detailLandscape($id)
	{
		$data['title'] = 'Detail Pencari Kerja';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		$data['seeker'] = $this->Seeker->show($id);
		$data['educations'] = $this->Seeker->education($id);
		$data['experiences'] = $this->Seeker->experience($id);
		$data['languages'] = $this->Seeker->language($id);
		$data['max_education'] = $this->Seeker->max_education($id);

		$data['edu_name'] = $this->Education->all();

		$this->load->view('templates/header.php', $data);
		$this->load->view('admin/seekers/detail_landscape.php', $data);
	}

	public function edit($id)
	{
		$data['title'] = 'Edit Pencari Kerja';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		// Form Validation
        $this->form_validation->set_rules('nik', 'nik', 'required|trim|numeric');
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('place_of_birth', 'tempat lahir', 'required');
        $this->form_validation->set_rules('date_of_birth', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('religion', 'agama', 'required');
        $this->form_validation->set_rules('stats', 'status', 'required');
        $this->form_validation->set_rules('gender', 'gender', 'required');
        $this->form_validation->set_rules('address', 'alamat', 'required');
        $this->form_validation->set_rules('village', 'desa', 'required');
        $this->form_validation->set_rules('rt', 'rt', 'required|numeric');
        $this->form_validation->set_rules('rw', 'rw', 'required|numeric');
        $this->form_validation->set_rules('district', 'kecamatan', 'required');
        $this->form_validation->set_rules('postal_code', 'kode pos', 'required|numeric');
        $this->form_validation->set_rules('phone', 'nomo handphone', 'required|numeric');

        $data['seeker'] = $this->Seeker->show($id);
		$data['educations'] = $this->Seeker->education($id);
		$data['experiences'] = $this->Seeker->experience($id);
		$data['languages'] = $this->Seeker->language($id);

		$data['list_religions'] = $this->Religion->all();
        $data['list_stats'] = $this->Stat->all();
        $data['list_languages'] = $this->Language->all();
        $data['list_educations'] = $this->Education->all();

        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
	        $this->load->view('templates/header.php', $data);
			$this->load->view('templates/navbar.php');
			$this->load->view('templates/sidebar.php');
			$this->load->view('admin/seekers/edit.php', $data);
			$this->load->view('templates/footer.php');	
		} 
		else {
			$this->Seeker->update();
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil disimpan.</div>');
			redirect('admin/seekers');
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
		$this->Seeker->delete($id);
		$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data berhasil dihapus.</div>');
		redirect('admin/seekers');
	}

	/*public function detailPrint($id)
	{
		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		$data['seeker'] = $this->Seeker->show($id);
		$data['educations'] = $this->Seeker->education($id);
		$data['experiences'] = $this->Seeker->experience($id);
		$data['languages'] = $this->Seeker->language($id);
		$data['max_education'] = $this->Seeker->max_education($id);

		// instantiate and use the dompdf class
        $dompdf = new Dompdf\Dompdf();
 
        $html = $this->load->view('admin/seekers/print_potrait.php', $data, true);
 
        $dompdf->loadHtml($html);
 
        // // (Optional) Setup the paper size and orientation
        $dompdf->setPaper('A4', 'portrait');
 
        // // Render the HTML as PDF
        $dompdf->render();
 
        // // Get the generated PDF file contents
        $pdf = $dompdf->output();
 
        // // Output the generated PDF to Browser
        $dompdf->stream();
	}

	public function detailPrintLandscape($id)
	{
		$data['title'] = 'Detail Pencari Kerja';

		// Cek login
		if ($this->session->userdata('id') == null) {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Silahkan masuk terlebih dahulu!</div>');
			redirect('login');
		}

		$data['seeker'] = $this->Seeker->show($id);
		$data['educations'] = $this->Seeker->education($id);
		$data['experiences'] = $this->Seeker->experience($id);
		$data['languages'] = $this->Seeker->language($id);
		$data['max_education'] = $this->Seeker->max_education($id);

		// instantiate and use the dompdf class
  		$dompdf = new Dompdf\Dompdf();
 
		$html = $this->load->view('admin/seekers/print_landscape.php', $data, true);

	    $dompdf->loadHtml($html);

		// (Optional) Setup the paper size and orientation
		$dompdf->setPaper('A4', 'landscape');

		// Render the HTML as PDF
		$dompdf->render();

		// Get the generated PDF file contents
		$pdf = $dompdf->output();

		// Output the generated PDF to Browser
		$dompdf->stream();
	}*/
}
