<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Bimbingan extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
//            $this->load->view('header');
            $this->load->view('bimbingan/bimbingan');
//            $this->load->view('footer');
	}
	public function bimbingan_page()
	{
		$this->load->view('bimbingan/mahasiswa_bimbingan');
	}
	public function tambahan_bimbingan_page()
	{
		$this->load->view('bimbingan/mahasiswa_tambahan_bimbingan');
	}
	public function bimbingan_insert()
	{
		$Tanggal=$this->input->post('tanggal');
		$Subjek=$this->input->post('catatan');
		
		$this->load->model('Bimbingan1');
		$this->Bimbingan1->insert_tambahan($Subjek,$Tanggal);
	}
	public function tabel_bimbingan()
	{
		$this->load->model('Bimbingan1');
		$data = array(
			'annn' => $this->Bimbingan1->getAllBimbingan()
			);
		
		$this->load->view("bimbingan/mahasiswa_bimbingan",$data);
	}
}
