<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Role adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class Role extends CI_Model
{
	private $_table = 'user_roles';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Role dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function all()
	{
		return $this->db->get($this->_table)->result_array();
	}
}
