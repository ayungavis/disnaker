<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Religion adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class Religion extends CI_Model
{
	private $_table = 'religions';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Religion dipanggil
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
