<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * AuthController adalah class untuk fungsi autentikasi
 *
 * By @ayungavis
 */

class AuthController extends CI_Controller 
{
	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat AuthController dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct() 
	{
		parent::__construct();

		// Load form validation
		$this->load->library('form_validation');

		// Load model
		$this->load->model('Auth');
	}

	/**
	 * Login untuk masuk ke admin panel
	 * Requirement yang dibutuhkan:
	 * 1. Email
	 * 2. Password
	 *
	 * By @ayungavis
	 * 
	 * @return [boolean] [is_logged]
	 */
    public function login() 
    {
    	// Judul Halaman
        $data['title'] = 'Login';

        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email');
        $this->form_validation->set_rules('password', 'password', 'required|trim');

        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
	        $this->load->view('templates/header', $data);
	        $this->load->view('auth/login');
        } 
        else {
        	$email = $this->input->post('email');
        	$password = $this->input->post('password');

        	$params = ['email' => $email];

        	$user = $this->Auth->login($params)->row_array();

        	// Jika user ada
        	if ($user) {
        		// Jika user aktif dan sebagai admin
        		if ($user['is_active'] && $user['role_id'] == 1) {
        			// Cek password
        			if (password_verify($password, $user['password'])) {
        				$data = [
        					'id' => $user['id'],
        					'email' => $user['email'],
        					'role_id' => $user['role_id'],
        				];

        				$this->session->set_userdata($data);
        				redirect('admin');
        			}
        			else {
        				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password salah!</div>');
        				redirect('login');
        			}
        		}
        		else {
        			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun ini tidak diperbolehkan untuk login!</div>');
        			redirect('login');
        		}
        	}
        	else {
        		$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
        		redirect('login');
        	}
        }
    }

    /**
     * Register untuk mendaftar akun baru
     * Requirement yang dibutuhkan:
     * 1. Nama
     * 2. Email
     * 3. Password
     * 4. Confirm password
     *
     * By @ayungavis
     * 
     * @return [null] [null]
     */
    public function register() 
    {	
    	// Judul Halaman
        $data['title'] = 'Register';

        // Form Validation
        $this->form_validation->set_rules('name', 'name', 'required|trim');
        $this->form_validation->set_rules('email', 'email', 'required|trim|valid_email|is_unique[users.email]', [
        	'is_unique' => 'Email sudah terdaftar!'
        ]);
        $this->form_validation->set_rules('password', 'password', 'required|trim|min_length[6]|matches[confirm_password]', [
        	'matches' => 'Password tidak sama!',
        	'min_length' => 'Password terlalu pendek! (minimal 6 karakter)'
        ]);
        $this->form_validation->set_rules('confirm_password', 'password confirmation', 'required|trim|min_length[6]|matches[password]');

        // Jika validasi gagal
        if ($this->form_validation->run() == false) {
	        $this->load->view('templates/header', $data);
	        $this->load->view('auth/register');
        } 
        else {
        	// Input data ke variable
        	$data = [
        		'name' => htmlspecialchars($this->input->post('name', true)),
        		'email' => htmlspecialchars($this->input->post('email', true)),
        		'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
        		'role_id' => 2,
        		'is_active' => 1,
        		'created_at' => date('Y-m-d H:i:s')
        	];

        	// Input data
        	$this->db->insert('users', $data);
        	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! Akun Anda berhasil dibuat, silahkan login.</div>');

        	redirect('login');
        }
    }

    /**
     * Logout adalah function untuk menghapus session user
     *
     * By @ayungavis
     * @return [null] [null]
     */
    public function logout() 
    {
    	// Hapus session user
    	$this->session->unset_userdata('id');
    	$this->session->unset_userdata('email');
    	$this->session->unset_userdata('role_id');

    	$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Logout berhasil.</div>');
    	redirect('login');
    }
}
