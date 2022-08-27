<?php
class MobilController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Mobil');
    }

    public function VMobilDonor()
	{
        $mobil = $this->Mobil->getAll();
		$data = array(
            'nav_title' => 'Jadwal Donor Darah PMI Kota Malang',
            'mobil'   => $mobil
        );			
		$this->template->admin('pmi-admin/VMobilDonor', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Mobil->insert($param);
        redirect('mobildonor');
    }    

    public function ajxGet(){
        echo json_encode($this->Mobil->get($_POST['id_mobil']));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Mobil->update($dataEdit);

        redirect('mobildonor');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Mobil->delete($dataDelete);
        redirect('mobildonor');
    }
}
