<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Vacancy adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class Vacancy extends CI_Model
{
	private $_table = 'vacancies';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Vacancy dipanggil
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

	public function save($upload)
	{
		$image = explode('.', $upload['file']['file_name']);
		$thumbnail = $image[0] .'_thumb.'. $image[1];

		$data = [
			'user_id' => $this->input->post('user_id'),
			'company' => $this->input->post('company'),
			'position' => $this->input->post('position'),
			'description' => $this->input->post('description'),
			'requirement' => $this->input->post('requirement'),
			'min_salary' => $this->input->post('min_salary'),
			'max_salary' => $this->input->post('max_salary'),
			'show_salary' => $this->input->post('show_salary'),
			'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'province' => $this->input->post('province'),
			'country' => $this->input->post('country'),
			'is_domestic' => $this->input->post('is_domestic'),
			'deadline' => $this->input->post('deadline'),
			'image' => $upload['file']['file_name'],
			'thumbnail' => $thumbnail,
			'created_at' => date('Y-m-d H:i:s')
		];

		$this->db->insert($this->_table, $data);
	}

	public function update()
	{
		/*$image = explode('.', $upload['file']['file_name']);
		$thumbnail = $image[0] .'_thumb.'. $image[1];

		$image_path = 'upload/vacancies/';
		$thumbnail_path = 'upload/vacancies/thumbnails/';

		$data = $this->db->get_where($this->_table, ['id' => $id])->row_array();

		// Hapus gambar di storage
		if (is_readable($image_path.$data['image']) && is_readable($thumbnail_path.$data['thumbnail'])) {
			unlink($image_path.$data['image']);
			unlink($thumbnail_path.$data['thumbnail']);
		}*/

		$data = [
			'user_id' => $this->input->post('user_id'),
			'company' => $this->input->post('company'),
			'position' => $this->input->post('position'),
			'description' => $this->input->post('description'),
			'requirement' => $this->input->post('requirement'),
			'min_salary' => $this->input->post('min_salary'),
			'max_salary' => $this->input->post('max_salary'),
			'show_salary' => $this->input->post('show_salary'),
			'address' => $this->input->post('address'),
			'city' => $this->input->post('city'),
			'province' => $this->input->post('province'),
			'country' => $this->input->post('country'),
			'is_domestic' => $this->input->post('is_domestic'),
			'deadline' => $this->input->post('deadline'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update($this->_table, $data);
	}

	public function delete($id)
	{
		$image_path = 'upload/vacancies/';
		$thumbnail_path = 'upload/vacancies/thumbnails/';

		$data = $this->db->get_where($this->_table, ['id' => $id])->row_array();

		// Hapus gambar di storage
		if (is_readable($image_path.$data['image']) && unlink($image_path.$data['image'])) {
			// Hapus data di database
			$this->db->delete($this->_table, ['id' => $id]);	
		}
	}

	public function upload()
	{
		// Konfigurasi upload
		$config['upload_path'] = './upload/vacancies/';
		$config['allowed_types'] = 'jpg|png|jpeg';
		$config['max_size'] = '2048';
		$config['remove_space'] = TRUE;
		$config['encrypt_name'] = TRUE;

		// Load konfigurasi upload
		$this->load->library('upload', $config);

		// Proses upload
		if ($this->upload->do_upload('image')) {
			// Jika berhasil
			$return = [
				'result' => 'success', 
				'file' => $this->upload->data(),
				'error' => ''
			];
			return $return;
		}
		else {
			// Jika gagal
			$return = [
				'result' => 'failed', 
				'file' => '',
				'error' => $this->upload->display_errors()
			];
			return $return;
		}
	}
}
