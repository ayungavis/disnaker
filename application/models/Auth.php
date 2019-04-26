<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Auth adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class Auth extends CI_Model
{
	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Auth dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * checkLogin adalah fungsi untuk mengecek email user
	 * sudah terdaftar atau belum
	 *
	 * By @ayungavis
	 * 
	 * @param  [array] $params [email pengguna]
	 * @return [array]         [data pengguna]
	 */
	public function login($params)
	{
		return $this->db->get_where('users', $params);
	}
}
