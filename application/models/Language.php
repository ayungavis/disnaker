<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Language adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class Language extends CI_Model
{
	private $_table = 'languages';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Language dipanggil
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
