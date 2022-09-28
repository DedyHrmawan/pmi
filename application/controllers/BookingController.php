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
        $bookingNOW = $this->Booking->getBookingNOW();
        $bookingDONE = $this->Booking->getBookingDONE();	
		$data = array(
            'nav_title' => 'List Booking Jadwal PMI Kota Malang',
            'bookingNOW' => $bookingNOW,
            'bookingDONE' => $bookingDONE
        );			
		$this->template->admin('pmi-admin/VDataBooking', $data);
	}

    public function selesaiDonor(){
        $param = $_POST;

        $date = new DateTime($param['tanggal']);
        $date->add(new DateInterval('P90D'));
        $date = $date->format('Y-m-d');
		
        $this->db->where('id_booking', $param['id_booking'])->update('booking', ['status' => 2]);
        $this->db->where('id_pendonor', $param['id_pendonor'])->update('pendonor', ['donor_terakhir' => $param['tanggal'],'donor_selanjutnya' => $date]);
    }
}
