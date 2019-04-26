<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * User adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class User extends CI_Model
{
	private $_table = 'users';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model User dipanggil
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

	public function limit($number)
	{
		$this->db->limit($number);
		return $this->db->get($this->_table)->result_array();
	}

	public function show($id)
	{
		return $this->db->get_where($this->_table, ['id' => $id])->row_array();
	}

	public function save()
	{
		$data = [
			'name' => htmlspecialchars($this->input->post('name', true)),
    		'email' => htmlspecialchars($this->input->post('email', true)),
    		'password' => password_hash($this->input->post('password'), PASSWORD_DEFAULT),
			'role_id' => $this->input->post('role_id'),
			'is_active' => 1,
			'created_at' => date('Y-m-d H:i:s')
		];

		$this->db->insert($this->_table, $data);
	}

	public function update()
	{
		if ($this->input->post('password') == null) {
			$password = $this->input->post('old_password');
		}
		else {
			$password = password_hash($this->input->post('password'), PASSWORD_DEFAULT);
		}

		$data = [
			'name' => htmlspecialchars($this->input->post('name', true)),
    		'password' => $password,
			'role_id' => $this->input->post('role_id'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update($this->_table, $data);
	}

	public function delete($id)
	{
		return $this->db->delete($this->_table, ['id' => $id]);	
	}
}
