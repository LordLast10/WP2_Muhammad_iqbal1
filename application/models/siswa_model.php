<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database(); // Load the database
	}

	public function tambah_siswa($data)
	{
		$this->db->insert('siswa', $data); // Insert the data into the 'siswa' table
	}

}
