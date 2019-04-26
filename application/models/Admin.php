<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Admin adalah model untuk dashboard administraso
 *
 * By @ayungavis
 */

class Admin extends CI_Model
{
	public $timezone = 'Asia/Jakarta';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Admin dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct()
	{
		parent::__construct();

		// Load helper
		$this->load->helper('date');
	}

	public function getActiveVacancies()
	{
		$now = unix_to_human(time());
		$query = $this->db->get('vacancies');
		foreach ($query->result() as $row) {
			if ($now <= $row->$deadline) {
				
			}
		}
	}
}
