<?php
class ProfileController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Profile');
    }

    public function VProfil()
	{
        $profile = $this->Profile->getAll();
		$data = array(
            'nav_title' => 'Profil PMI Kota Malang',
            'profile'   => $profile
        );			
		$this->template->admin('pmi-admin/VProfil', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Profile->insert($param);
        redirect('profil');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_profil = '.$_POST['id_profil'];
        echo json_encode($this->Profile->get($data));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Profile->update($dataEdit);

        redirect('profil');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Profile->delete($dataDelete);
        redirect('profil');
    }
}
