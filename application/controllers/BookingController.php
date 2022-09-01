<?php
class BookingController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Booking');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }    

    public function VDataBooking()
	{
        $booking = $this->Booking->getAll();	
		$data = array(
            'nav_title' => 'List Booking Jadwal PMI Kota Malang',
            'booking' => $booking
        );			
		$this->template->admin('pmi-admin/VDataBooking', $data);
	}
}
