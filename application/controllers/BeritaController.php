<?php
class BeritaController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Berita');
    }

    public function VBerita()
	{
        $berita = $this->Berita->getAll();				
        $data = array(
            'nav_title' => 'Berita PMI Kota Malang',
            'berita' => $berita
        );			
		$this->template->admin('pmi-admin/VBerita', $data);
	}

    public function store()
    {
        $param = $_POST;

        $store['judul_berita']  =$param['judul_berita'];
        $store['penulis_berita']=$param['penulis_berita'];
        $store['tanggal_berita']=$param['tanggal_berita'];
        $store['deskripsi']     =$param['deskripsi'];
        $store['status']        =$param['status'];

        $this->Berita->insert($store);
        redirect('berita');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_berita = '.$_POST['id_berita'];
        echo json_encode($this->Berita->get($data));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Berita->update($dataEdit);

        redirect('berita');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Berita->delete($dataDelete);
        redirect('berita');
    }
}
