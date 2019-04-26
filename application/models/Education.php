<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Education adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class Education extends CI_Model
{
	private $_table = 'educations';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Education dipanggil
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

	public function show($id)
	{
		return $this->db->get_where($this->_table, ['id' => $id])->row_array();
	}
}
