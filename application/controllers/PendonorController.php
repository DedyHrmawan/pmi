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
        echo json_encode($this->Pendonor->get($data));
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
