<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Stat adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class Stat extends CI_Model
{
	private $_table = 'stats';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Stat dipanggil
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
