<?php
class DepanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Depan');
        $this->load->model('Darah');
    }    

    //depan
	public function landing()
	{
        $jadwalMobil = $this->Depan->getJadwalMobil();				
        $data = array(
            'jadwal_mobil' => $jadwalMobil
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
		$this->template->depan('pmi-depan/VBerita');
	}

	public function VAgendaPMI()
	{
		$this->template->depan('pmi-depan/VAgenda');
	}

	public function VJadwalDepan()
	{
        $jadwalMobil = $this->Depan->getJadwalMobil();				
        $data = array(
            'jadwal_mobil' => $jadwalMobil
        );			
		$this->template->depan('pmi-depan/VJadwalDepan',$data);
	}

}
