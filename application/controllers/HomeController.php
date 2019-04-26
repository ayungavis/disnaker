<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * HomeController adalah class untuk fungsi halaman depan
 *
 * By @ayungavis
 */

class HomeController extends CI_Controller 
{
	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat HomeController dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct() 
	{
		parent::__construct();

		// Load form validation
		$this->load->library('form_validation');

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
		$data['title'] = 'Dinas Tenaga Kerja Kota Mojokerto';

		$data['vacancies'] = $this->Vacancy->limit(10);

		$this->load->view('pages/header.php', $data);
		$this->load->view('pages/home.php', $data);
		$this->load->view('pages/footer.php');
	}

	public function vacancies() 
	{
		$data['title'] = 'Dinas Tenaga Kerja Kota Mojokerto';

		$data['vacancies'] = $this->Vacancy->all();

		$this->load->view('pages/header.php', $data);
		$this->load->view('pages/vacancy.php', $data);
		$this->load->view('pages/footer.php');
	}

	public function vacancy($id) 
	{
		$data['title'] = 'Dinas Tenaga Kerja Kota Mojokerto';

		$data['vacancy'] = $this->Vacancy->show($id);

		$this->load->view('pages/header.php', $data);
		$this->load->view('pages/vacancy_single.php', $data);
		$this->load->view('pages/footer.php');
	}

	public function contact() 
	{
		$data['title'] = 'Dinas Tenaga Kerja Kota Mojokerto';

		$this->load->view('pages/header.php', $data);
		$this->load->view('pages/contact.php');
		$this->load->view('pages/footer.php');
	}

	public function register() 
	{
		$data['title'] = 'Dinas Tenaga Kerja Kota Mojokerto';

		// Form Validation
        $this->form_validation->set_rules('nik', 'nik', 'required|trim|numeric');
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[users.email]');
        $this->form_validation->set_rules('place_of_birth', 'tempat lahir', 'required');
        $this->form_validation->set_rules('date_of_birth', 'tanggal lahir', 'required');
        $this->form_validation->set_rules('religion', 'agama', 'required');
        $this->form_validation->set_rules('stats', 'status', 'required');
        $this->form_validation->set_rules('address', 'alamat', 'required');
        $this->form_validation->set_rules('village', 'desa', 'required');
        $this->form_validation->set_rules('rt', 'rt', 'required|numeric');
        $this->form_validation->set_rules('rw', 'rw', 'required|numeric');
        $this->form_validation->set_rules('district', 'kecamatan', 'required');
        $this->form_validation->set_rules('postal_code', 'kode pos', 'required|numeric');
        $this->form_validation->set_rules('phone', 'nomo handphone', 'required|numeric');

        $data['religions'] = $this->Religion->all();
        $data['stats'] = $this->Stat->all();
        $data['languages'] = $this->Language->all();
        $data['educations'] = $this->Education->all();

        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
			$this->load->view('pages/header.php', $data);
			$this->load->view('pages/register.php', $data);
			$this->load->view('pages/footer.php');
		}
		else {
			$this->Seeker->save();
			redirect('success');
		}
	}

	public function success()
	{
		$data['title'] = 'Dinas Tenaga Kerja Kota Mojokerto';

		$this->load->view('pages/header.php', $data);
		$this->load->view('pages/success.php');
		$this->load->view('pages/footer.php');
	}
}
