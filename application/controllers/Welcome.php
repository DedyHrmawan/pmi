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

	public function VUserDonor()
	{
		$data = array(
            'nav_title' => 'Pendonor PMI Kota Malang'
        );			
		$this->template->admin('pmi-admin/VUserDonor', $data);
	}

	//signup penodnor
	public function VSignUp()
	{
		$this->load->view('pmi-depan/VSignUp');
	}

	//Blank Page
	public function VBlank()
	{
		$this->template->depan('pmi-depan/VBlank');
	}

	//Booking Page
	public function VBooking()
	{
		$this->template->depan('pmi-depan/VBooking');
	}

	//Data Booking Admin
	public function VDataBooking()
	{
		$data = array(
            'nav_title' => 'List Booking Jadwal PMI Kota Malang'
        );			
		$this->template->admin('pmi-admin/VDataBooking', $data);
	}

	//Laporan
	public function VLaporanKeluar()
	{
		$data = array(
            'nav_title' => 'Laporan PMI Kota Malang'
        );			
		$this->template->admin('pmi-admin/VLaporanKeluar', $data);
	}
}
