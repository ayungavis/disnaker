<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Seeker adalah model untuk autentikasi
 *
 * By @ayungavis
 */

class Seeker extends CI_Model
{
	private $table_users = 'users';
	private $table_user_informations = 'user_informations';
	private $table_user_contacts = 'user_contacts';
	private $table_user_desireds = 'user_desireds';
	private $table_user_educations = 'user_educations';
	private $table_user_experiences = 'user_experiences';
	private $table_user_languages = 'user_languages';

	/**
	 * Construct adalah function yg dijalankan pertama kali
	 * saat model Seeker dipanggil
	 *
	 * By @ayungavis
	 */
	public function __construct()
	{
		parent::__construct();
	}

	public function all()
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('user_contacts', 'user_contacts.user_id = users.id');
		$this->db->join('user_desireds', 'user_desireds.user_id = users.id');
		$this->db->join('user_informations', 'user_informations.user_id = users.id');
		$query = $this->db->get();
		return $query->result_array();
	}

	public function show($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('user_contacts', 'user_contacts.user_id = users.id');
		$this->db->join('user_desireds', 'user_desireds.user_id = users.id');
		$this->db->join('user_informations', 'user_informations.user_id = users.id');
		$this->db->where('users.id', $id);
		$query = $this->db->get();
		return $query->row_array();
	}

	public function education($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('user_educations', 'user_educations.user_id = users.id');
		$this->db->join('educations', 'educations.id = user_educations.education_id');
		$this->db->where('users.id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function max_education($id)
	{
		$this->db->select_max('user_educations.education_id');
		$this->db->from('users');
		$this->db->join('user_educations', 'user_educations.user_id = users.id');
		$this->db->join('educations', 'educations.id = user_educations.education_id');
		$this->db->where('users.id', $id);
		$query = $this->db->get()->row_array();
		
		$this->db->select('*');
		$this->db->from('user_educations');
		$this->db->join('users', 'user_educations.user_id = users.id');
		$this->db->join('educations', 'educations.id = user_educations.education_id');
		$this->db->where('users.id', $id);
		$this->db->where('educations.id', $query['education_id']);
		$result = $this->db->get()->row_array();
		return $result;
	}

	public function language($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('user_languages', 'user_languages.user_id = users.id');
		$this->db->join('languages', 'languages.id = user_languages.lang_id');
		$this->db->where('users.id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function experience($id)
	{
		$this->db->select('*');
		$this->db->from('users');
		$this->db->join('user_experiences', 'user_experiences.user_id = users.id');
		$this->db->where('users.id', $id);
		$query = $this->db->get();
		return $query->result_array();
	}

	public function save()
	{
		$user = [
			'name' => htmlspecialchars($this->input->post('name', true)),
    		'email' => htmlspecialchars($this->input->post('email', true)),
    		'password' => password_hash('123456789', PASSWORD_DEFAULT),
			'role_id' => 1,
			'is_active' => 1,
			'created_at' => date('Y-m-d H:i:s')
		];

		$this->db->insert($this->table_users, $user);
		$user_id = $this->db->insert_id();

		$user_contact = [
			'user_id' => $user_id,
			'address' => $this->input->post('address'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'village' => $this->input->post('village'),
			'district' => $this->input->post('district'),
			'postal_code' => $this->input->post('postal_code'),
			'phone' => $this->input->post('phone'),
			'created_at' => date('Y-m-d H:i:s')
		];

		$this->db->insert($this->table_user_contacts, $user_contact);

		$user_desired = [
			'user_id' => $user_id,
			'position' => $this->input->post('desired_position'),
			'location' => $this->input->post('desired_location'),
			'region' => $this->input->post('desired_region'),
			'salary' => $this->input->post('desired_salary'),
			'description' => $this->input->post('desired_description'),
			'created_at' => date('Y-m-d H:i:s')
		];

		$this->db->insert($this->table_user_desireds, $user_desired);
		$get_id = $this->db->insert_id();

		$user_educations = array();
		$education_id = $this->input->post('education_id');
		foreach ($education_id as $key => $value) {
			$user_educations[] = [
				'user_id' => $user_id,
				'education_id' => $_POST['education_id'][$key],
				'school_name' => $_POST['school_name'][$key],
				'department' => $_POST['department'][$key],
				'year_in' => $_POST['year_in'][$key],
				'year_out' => $_POST['year_out'][$key],
				'created_at' => date('Y-m-d H:i:s')
			];
		}

		$this->db->insert_batch($this->table_user_educations, $user_educations);

		$user_experiences = array();
		$exp_company = $this->input->post('exp_company');
		foreach ($exp_company as $key => $value) {
			$user_experiences[] = [
				'user_id' => $user_id,
				'company' => $_POST['exp_company'][$key],
				'position' => $_POST['exp_position'][$key],
				'description' => $_POST['exp_description'][$key],
				'year_in' => $_POST['exp_year_in'][$key],
				'year_out' => $_POST['exp_year_out'][$key],
				'is_active' => $_POST['exp_is_active'][$key],
				'created_at' => date('Y-m-d H:i:s')
			];
		}

		$this->db->insert_batch($this->table_user_experiences, $user_experiences);

		if (strlen($get_id) == 1) $nppk = '560/00'. $get_id .'/'. date('dmY');
		if (strlen($get_id) == 2) $nppk = '560/0'. $get_id .'/'. date('dmY');
		if (strlen($get_id) == 3) $nppk = '560/'. $get_id .'/'. date('dmY');
		
		$user_information = [
			'user_id' => $user_id,
			'nppk' => $nppk,
			'nik' => $this->input->post('nik'),
			'place_of_birth' => $this->input->post('place_of_birth'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'gender' => $this->input->post('gender'),
			'religion_id' => $this->input->post('religion'),
			'stat_id' => $this->input->post('stats'),
			'created_at' => date('Y-m-d H:i:s')
		];

		$this->db->insert($this->table_user_informations, $user_information);

		$user_languages = array();
		$languages = $this->input->post('languages');
		foreach ($languages as $key => $value) {
			$user_languages[] = [
				'user_id' => $user_id,
				'lang_id' => $_POST['languages'][$key],
				'created_at' => date('Y-m-d H:i:s')
			];
		}

		$this->db->insert_batch($this->table_user_languages, $user_languages);
	}

	public function update()
	{
		$user_id = $this->input->post('id');

		$user = [
			'name' => htmlspecialchars($this->input->post('name', true)),
    		'email' => htmlspecialchars($this->input->post('email', true)),
    		'password' => password_hash('123456789', PASSWORD_DEFAULT),
			'role_id' => 1,
			'is_active' => 1,
			'updated_at' => date('Y-m-d H:i:s')
		];

		$this->db->where('id', $this->input->post('id'));
		$this->db->update($this->table_users, $user);

		$user_contact = [
			'user_id' => $user_id,
			'address' => $this->input->post('address'),
			'rt' => $this->input->post('rt'),
			'rw' => $this->input->post('rw'),
			'village' => $this->input->post('village'),
			'district' => $this->input->post('district'),
			'postal_code' => $this->input->post('postal_code'),
			'phone' => $this->input->post('phone'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		$this->db->where('user_id', $this->input->post('id'));
		$this->db->update($this->table_user_contacts, $user_contact);

		$user_desired = [
			'user_id' => $user_id,
			'position' => $this->input->post('desired_position'),
			'location' => $this->input->post('desired_location'),
			'region' => $this->input->post('desired_region'),
			'salary' => $this->input->post('desired_salary'),
			'description' => $this->input->post('desired_description'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		$this->db->where('user_id', $this->input->post('id'));
		$this->db->update($this->table_user_desireds, $user_desired);

		$user_educations = array();
		$education_id = $this->input->post('education_id');
		foreach ($education_id as $key => $value) {
			$user_educations[] = [
				'user_id' => $user_id,
				'education_id' => $_POST['education_id'][$key],
				'school_name' => $_POST['school_name'][$key],
				'department' => $_POST['department'][$key],
				'year_in' => $_POST['year_in'][$key],
				'year_out' => $_POST['year_out'][$key],
				'updated_at' => date('Y-m-d H:i:s')
			];
		}

		$this->db->update_batch($this->table_user_educations, $user_educations, 'user_id');

		$user_experiences = array();
		$exp_company = $this->input->post('exp_company');
		foreach ($exp_company as $key => $value) {
			$user_experiences[] = [
				'user_id' => $user_id,
				'company' => $_POST['exp_company'][$key],
				'position' => $_POST['exp_position'][$key],
				'description' => $_POST['exp_description'][$key],
				'year_in' => $_POST['exp_year_in'][$key],
				'year_out' => $_POST['exp_year_out'][$key],
				'is_active' => $_POST['exp_is_active'][$key],
				'updated_at' => date('Y-m-d H:i:s')
			];
		}

		$this->db->update_batch($this->table_user_experiences, $user_experiences, 'user_id');

		$user_information = [
			'user_id' => $user_id,
			'nppk' => date('dmY'),
			'nik' => $this->input->post('nik'),
			'place_of_birth' => $this->input->post('place_of_birth'),
			'date_of_birth' => $this->input->post('date_of_birth'),
			'gender' => $this->input->post('gender'),
			'religion_id' => $this->input->post('religion'),
			'stat_id' => $this->input->post('stats'),
			'updated_at' => date('Y-m-d H:i:s')
		];

		$this->db->where('user_id', $this->input->post('id'));
		$this->db->update($this->table_user_informations, $user_information);

		$user_languages = array();
		$languages = $this->input->post('languages');
		foreach ($languages as $key => $value) {
			$user_languages[] = [
				'user_id' => $user_id,
				'lang_id' => $_POST['languages'][$key],
				'updated_at' => date('Y-m-d H:i:s')
			];
		}

		$this->db->update_batch($this->table_user_languages, $user_languages, 'user_id');
	}

	public function delete($id)
	{
		// $user = $this->db->get_where($this->$table_users, ['id' => $id])->row_array();
		// $user_contact = $this->db->get_where($this->$table_user_contacts, ['user_id' => $id])->row_array();
		// $user_desired = $this->db->get_where($this->$table_user_desireds, ['user_id' => $id])->row_array();
		// $user_information = $this->db->get_where($this->$table_user_informations, ['user_id' => $id])->row_array();
		// $user_educations = $this->db->get_where($this->$table_user_educations, ['user_id' => $id])->result_array();
		// $user_experiences = $this->db->get_where($this->$table_user_experiences, ['user_id' => $id])->result_array();
		// $user_languages = $this->db->get_where($this->$table_user_languages, ['user_id' => $id])->result_array();

		$this->db->delete($this->table_users, ['id' => $id]);
		$this->db->delete($this->table_user_contacts, ['user_id' => $id]);
		$this->db->delete($this->table_user_desireds, ['user_id' => $id]);
		$this->db->delete($this->table_user_informations, ['user_id' => $id]);
		$this->db->delete($this->table_user_educations, ['user_id' => $id]);
		$this->db->delete($this->table_user_experiences, ['user_id' => $id]);
		$this->db->delete($this->table_user_languages, ['user_id' => $id]);
	}
}
