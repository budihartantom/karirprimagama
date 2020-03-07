<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Karir extends CI_Controller {

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
		$this->load->view('Templates/header');
		$this->load->view('Templates/content');
		$this->load->view('Templates/footer');
	}
	public function kepala_cabang()
	{
        $this->load->view('Templates/header');
		$this->load->view('Templates/kualifikasi_kepalacabang');
		$this->load->view('Templates/footer');
	}
	public function pac()
	{
        $this->load->view('Templates/header');
		$this->load->view('Templates/kualifikasi_pac');
		$this->load->view('Templates/footer');
	}
	public function logistik_umum()
	{
        $this->load->view('Templates/header');
		$this->load->view('Templates/kualifikasi_logistik');
		$this->load->view('Templates/footer');
	}
	public function marketing()
	{
        $this->load->view('Templates/header');
		$this->load->view('Templates/kualifikasi_marketing');
		$this->load->view('Templates/footer');
	}
	public function instruktur()
	{
        $this->load->view('Templates/header');
		$this->load->view('Templates/kualifikasi_instruktur');
		$this->load->view('Templates/footer');
	}
	public function akademik()
	{
        $this->load->view('Templates/header');
		$this->load->view('Templates/kualifikasi_akademik');
		$this->load->view('Templates/footer');
	}
	public function programmer()
	{
        $this->load->view('Templates/header');
		$this->load->view('Templates/kualifikasi_programmer');
		$this->load->view('Templates/footer');
	}
	public function pendamping_belajar()
	{
       $this->load->view('Templates/header');
		$this->load->view('Templates/kualifikasi_pendampingbelajar');
		$this->load->view('Templates/footer');
	}
}
