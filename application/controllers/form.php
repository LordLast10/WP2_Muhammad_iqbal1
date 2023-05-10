<?php
class Matakuliah extends CI_Controller
{
 public function index()
 {
 $this->load->view('form_input');
 }
 public function cetak()
 {
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
 $this->load->view('v_output', $data);
 }
}