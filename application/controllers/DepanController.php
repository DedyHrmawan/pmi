<?php
class DepanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Depan');
        $this->load->model('Darah');
        $this->load->model('Pendonor');
        $this->load->model('Booking');
    }    

    //depan
	public function landing()
	{
        $jadwalMobil = $this->Depan->getJadwalMobil();	
        $carousel = $this->Depan->getCarousel();					
        $data = array(
            'jadwal_mobil' => $jadwalMobil,
            'carousel' => $carousel
        );			
		$this->template->depan('pmi-depan/VBeranda', $data);
	}

    public function VProfile()
	{
        $profil = $this->Depan->getProfil();				
        $data = array(
            'profil' => $profil,
            'list'=> $profil
        );
		$this->template->depan('pmi-depan/VProfil',$data);
	}

    public function OthersProfile($param)
	{        
        $data['filter'] = 'id_profil = '.$param;
        $profil = $this->Depan->getOthers($data);	
        $list = $this->Depan->getProfil();			
        $data = array(
            'profil' => $profil,
            'list'=> $list
        );
		$this->template->depan('pmi-depan/VProfil',$data);
	}

	public function VInformasi()
	{
        $informasi = $this->Depan->getInfo();				
        $data = array(
            'informasi' => $informasi,
            'list'=> $informasi
        );
		$this->template->depan('pmi-depan/VInformasi',$data);
	}

    public function OthersInfo($param)
	{        
        $data['filter'] = 'id_informasi = '.$param;
        $informasi = $this->Depan->getOtherInfo($data);	
        $list = $this->Depan->getInfo();			
        $data = array(
            'informasi' => $informasi,
            'list'=> $list
        );
		$this->template->depan('pmi-depan/VInformasi',$data);
	}

	public function VStokDarah()
	{
        $darah = $this->Darah->getAll();
        $detail = $this->Darah->getDetailDarah();
        $updated = $this->Darah->getUpdated();

        $data = array(
            'darah' => $darah,
            'detail'=> $detail,
            'last_update'=> $updated
        );

		$this->template->depan('pmi-depan/VStokDarah',$data);
	}

	public function VNews()
	{
        $berita = $this->Depan->getBerita();				
        $data = array(
            'berita' => $berita,
            'list'=> $berita
        );

		$this->template->depan('pmi-depan/VBerita', $data);
	}

    public function OthersNews($param)
	{        
        $data['filter'] = 'id_berita = '.$param;
        $berita = $this->Depan->getOtherBerita($data);	
        $list = $this->Depan->getBerita();			
        $data = array(
            'berita' => $berita,
            'list'=> $list
        );
		$this->template->depan('pmi-depan/VBerita', $data);
	}

	public function VAgendaPMI()
	{
		$this->template->depan('pmi-depan/VAgenda');
	}

	public function VJadwalDepan()
	{
        $jadwalMobil = $this->Depan->getJadwalMobil();
        $jadwalDonor = $this->Depan->getJadwalDonor();				
        $data = array(
            'jadwal_mobil' => $jadwalMobil,
            'jadwal_donor' => $jadwalDonor
        );			
		$this->template->depan('pmi-depan/VJadwalDepan',$data);
	}

    public function VBooking($idjadwal)
	{				        
        if (isset($_SESSION['logged_in']) == FALSE) {
			redirect('blank');
		};
        $id = $_SESSION['id'];
        $jadwalMobil = $this->Depan->getJadwal($idjadwal);
        $query = "SELECT * FROM booking where id_pendonor='$id' and status = 1 ORDER BY tanggal DESC";        
        $result = $this->db->query($query)->result();
        
        if($_SESSION['donlan'] > $jadwalMobil[0]->jadwal){
            $this->session->set_flashdata('error_booking','Maaf, anda masih belum dapat melakukan booking dikarenakan belum melewati jadwal donor selanjutnya(90 hari setelah donor sebelumnya)');
            redirect('jadwal');
        }

        if(!empty($result)){
            $date = date_create($result[0]->tanggal);
            $tanggal = date_format($date,"d F Y");

            $this->session->set_flashdata('error_booking','Anda sudah melakukan booking di '.$result[0]->lokasi.' pada tanggal '.$tanggal.' pukul '.$result[0]->jam_datang.' jadi silahkan datang sesuai jadwal, Terima kasih.');
            redirect('jadwal');
        }

        $data = array(
            'jadwal' => $jadwalMobil
        );	

		$this->template->depan('pmi-depan/VBooking', $data);
	}

    public function storeBooking()
    {
        $param = $_POST;           

        $this->Booking->insert($param);                
        $this->session->set_flashdata('success_booking','Berhasil booking untuk '.$param['lokasi'].' pada pukul '.$param['jam_datang']);
        redirect('jadwal');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_mobil = '.$_POST['id_mobil'];
        echo json_encode($this->Booking->get($data));
    }

    public function ajxGetPendonor(){
        $dataPendonor = $this->Depan->getPendonorInfo($_POST['id_pendonor']);
        
        
        if($dataPendonor[0]->donor_terakhir != NULL){
            $date = new DateTime($dataPendonor[0]->donor_terakhir);        
            $date = $date->format('d F Y');
            $dataPendonor[0]->donor_terakhir = $date;
        }else{
            $dataPendonor[0]->donor_terakhir = "-";
        }

        if($dataPendonor[0]->donor_selanjutnya != NULL){
            $date = new DateTime($dataPendonor[0]->donor_selanjutnya);        
            $date = $date->format('d F Y');
            $dataPendonor[0]->donor_selanjutnya = $date;
        }else{
            $dataPendonor[0]->donor_selanjutnya = "-";
        }     

        if($dataPendonor[0]->tgl_booking != NULL){  
            if($dataPendonor[0]->status_booking == 1){
                $date = new DateTime($dataPendonor[0]->tgl_booking);        
                $date = $date->format('d F Y');
                $dataPendonor[0]->tgl_booking = $date;
            }else{
                $dataPendonor[0]->tgl_booking = NULL;
            } 
        }

        echo json_encode($dataPendonor);
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Pendonor->update($dataEdit);

        redirect('/');
    }
}
