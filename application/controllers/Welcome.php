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


	//depan
	public function landing()
	{
		// $this->load->view('pmi-depan/demo-medical');
		$this->template->depan('pmi-depan/demo-medical');
	}

	//admin
	public function VProfil()
	{
		$data = array(
            'nav_title' => 'Profil PMI Kota Malang'
        );			
		$this->template->admin('pmi-admin/VProfil', $data);
	}

	public function VMobilDonor()
	{
		$data = array(
            'nav_title' => 'Jadwal Mobil Donor PMI Kota Malang'
        );	
		$this->template->admin('pmi-admin/VMobilDonor', $data);
	}

	public function VStokDarah()
	{
		$data = array(
            'nav_title' => 'Stok Darah PMI Kota Malang'
        );	
		$this->template->admin('pmi-admin/VStokDarah', $data);
	}

	public function VInformasi()
	{
		$data = array(
            'nav_title' => 'Informasi Donor PMI Kota Malang'
        );	
		$this->template->admin('pmi-admin/VInformasi', $data);
	}

	public function VAgenda()
	{
		$data = array(
            'nav_title' => 'Agenda PMI Kota Malang'
        );	
		$this->template->admin('pmi-admin/VAgenda', $data);
	}

}
