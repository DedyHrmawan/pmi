<?php
class LaporanController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Laporan');
        if (isset($_SESSION['logged_in']) == FALSE || $this->session->userdata('hak_akses') != 1) {
			redirect('/');
		};
    }

    public function VLaporanMasuk()
	{
        $laporan = $this->Laporan->getMasuk();
        $darah = $this->Laporan->getDarah();
		$data = array(
            'nav_title' => 'Laporan PMI Kota Malang',
            'laporan' => $laporan,
            'darah' => $darah
        );			
		$this->template->admin('pmi-admin/VLaporanMasuk', $data);
	}

    public function VLaporanKeluar()
	{
        $laporan = $this->Laporan->getKeluar();
        $darah = $this->Laporan->getDarah();
		$data = array(
            'nav_title' => 'Laporan PMI Kota Malang',
            'laporan' => $laporan,
            'darah' => $darah
        );			
		$this->template->admin('pmi-admin/VLaporanKeluar', $data);
	}

    public function store()
    {
        $param = $_POST;

        $this->Laporan->insert($param);
        redirect('laporanmasuk');
    }    

    public function ajxGet(){
        $data['filter'] = 'id_laporan = '.$_POST['id_laporan'];
        echo json_encode($this->Laporan->get($data));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Laporan->update($dataEdit);

        redirect('laporanmasuk');
    }

    public function editKeluar(){
        $dataEdit = $_POST;
        $this->Laporan->update($dataEdit);

        redirect('laporankeluar');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Laporan->delete($dataDelete);
        redirect('laporanmasuk');
    }

    public function deleteKeluar(){
        $dataDelete = $_POST;
        $this->Laporan->delete($dataDelete);
        redirect('laporankeluar');
    }
}
