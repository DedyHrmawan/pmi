<?php
class PendonorController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Pendonor');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }

    public function VUserDonor()
	{
        $pendonor = $this->Pendonor->getAll();
		$data = array(
            'nav_title' => 'Pendonor PMI Kota Malang',
            'pendonor' => $pendonor
        );			
		$this->template->admin('pmi-admin/VUserDonor', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Pendonor->insert($param);
        redirect('listpendonor');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_pendonor = '.$_POST['id_pendonor'];
        $dataHasil = $this->Pendonor->get($data);

        if(!empty($dataHasil[0]->donor_terakhir)){
            $date=date_create($dataHasil[0]->donor_terakhir);
            $dataHasil[0]->donor_terakhir = date_format($date,"d F Y");

            $date=date_create($dataHasil[0]->donor_selanjutnya);
            $dataHasil[0]->donor_selanjutnya = date_format($date,"d F Y");
        }
        echo json_encode($dataHasil);
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Pendonor->update($dataEdit);

        redirect('listpendonor');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Pendonor->delete($dataDelete);
        redirect('listpendonor');
    }
}
