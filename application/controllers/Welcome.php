<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
	 * @see https://codeigniter.com/userguide3/general/urls.html
	 */

	//authentication
	public function VLogin()
	{
		$this->load->view('pmi-admin/VLogin');
	}

	public function VPendonor()
	{
		$data = array(
            'nav_title' => 'Pendonor PMI Kota Malang'
        );			
		$this->template->admin('pmi-admin/VPendonor', $data);
	}

	public function VBerita()
	{
		$data = array(
            'nav_title' => 'Berita PMI Kota Malang'
        );			
		$this->template->admin('pmi-admin/VBerita', $data);
	}

	//depan
	public function landing()
	{
		$this->template->depan('pmi-depan/VBeranda');
	}

	public function VProfile()
	{
		$this->template->depan('pmi-depan/VProfil');
	}

	public function VInformasi()
	{
		$this->template->depan('pmi-depan/VInformasi');
	}

	public function VStokDarah()
	{
		$this->template->depan('pmi-depan/VStokDarah');
	}

	public function VNews()
	{
		$this->template->depan('pmi-depan/VBerita');
	}

	public function VAgendaPMI()
	{
		$this->template->depan('pmi-depan/VAgenda');
	}

	//signup penodnor
	public function VSignUp()
	{
		$this->load->view('pmi-depan/VSignUp');
	}

}
