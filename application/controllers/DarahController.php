<?php
class DarahController extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Darah');
    }

    public function VStokDarah()
	{
        $darah = $this->Darah->getAll();
        $detail = $this->Darah->getDetailDarah();
        $updated = $this->Darah->getUpdated();
		$data = array(
            'nav_title' => 'Stok Darah PMI Kota Malang',
            'darah' => $darah,
            'detail'=> $detail,
            'last_update'=> $updated
        );			
		$this->template->admin('pmi-admin/VStokDarah', $data);
	}

    public function addType()
    {
        $param = $_POST;
        
        $this->db->insert('darah', $param);        
        $res["id_darah"] = $this->db->insert_id(); 

        for($i=1;$i<=4;$i++){
            $detail['id_darah']         = $res["id_darah"];
            $detail['id_jenis_darah']   = $i;
            $detail['stok']             = 0;
            $this->Darah->insertDetail($detail);
        }
        redirect('stokdarah');
    }    

    public function addStock()
    {
        $param = $_POST;
        $this->Darah->update($param['id_darah'],$param['id_jenis_darah'],$param['stok']);

        redirect('stokdarah');
    }  

    public function ajxGet(){
        $data['filter'] = 'id_darah = '.$_POST['id_darah'];
        echo json_encode($this->Darah->get($data));
    }

    public function getStock(){        
        echo json_encode($this->Darah->getStock($_POST['id_darah'],$_POST['id_jenis_darah']));
    }

    public function edit(){
        $dataEdit = $_POST;
        $this->Darah->edit($dataEdit['id_darah'],$dataEdit['id_jenis_darah'],$dataEdit['stok']);

        redirect('stokdarah');
    }

    public function delete(){
        $dataDelete = $_POST;
        $this->Darah->delete($dataDelete);
        redirect('stokdarah');
    }
}
