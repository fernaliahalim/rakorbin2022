<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Absensi extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('absensi_model');
		$this->load->model('peserta_model');
	}

	public function index()
	{
		$data = array(
			'rs_absensi' => $this->absensi_model->view_absensi()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('list_absensi', $data);
		$this->load->view('footer');
	}

	public function add_absensi()
	{
		$nrp = $this->input->post('nrp');

		if ($this->peserta_model->cek_peserta($nrp)->num_rows()) {
			if (!$this->absensi_model->cek_absensi($nrp)->num_rows()) {
				$this->absensi_model->add_absensi($nrp);
				$this->session->set_flashdata('success', 'Absen berhasil');
			} else {
				$this->session->set_flashdata('danger', 'Peserta sudah absen sebelumnya!');
			}
		} else {
			$this->session->set_flashdata('danger', 'Data peserta tidak ditemukan!');
		}
	}

	public function export()
	{
		$data = array(
			'rs_absensi' => $this->absensi_model->view_absensi()
		);

		$this->load->view('list_absensi_excel', $data);
	}

	public function list()
	{
		$data = array(
			'rs_absensi' => $this->absensi_model->view_belum_absen()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('list_belum_absen', $data);
		$this->load->view('footer');
	}

	public function export_list_belum_absen()
	{
		$data = array(
			'rs_absensi' => $this->absensi_model->view_belum_absen()
		);

		$this->load->view('list_belum_absen_excel', $data);
	}
}
