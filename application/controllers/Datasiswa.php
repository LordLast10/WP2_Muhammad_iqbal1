<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Siswa extends CI_Controller {

	public function index()
	{
		$this->load->model('siswa_model'); // Load the model
	
		$this->load->view('input_siswa'); // Load the view
	}

	public function tambah()
	{
		// Get the form input data
		$data = [
		'nama_siswa' => $this->input->post('nama_siswa'),
		'nis' => $this->input->post('nis'),
		'kelas' => $this->input->post('kelas'),
		'tanggal_lahir' => $this->input->post('tanggal_lahir'),
		'tempat_lahir' => $this->input->post('tempat_lahir'),
		'alamat' => $this->input->post('alamat'),
		'jenis_kelamin' => $this->input->post('jenis_kelamin'),
		'agama' => $this->input->post('agama')
		];
		$this->load->view('input_siswa', $data);


		// Insert the input data into the database using the model
		$this->siswa_model->tambah_siswa($data);

		// Redirect to the homepage
		redirect(base_url());
	}

}
