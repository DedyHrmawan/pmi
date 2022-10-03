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
        $tahun = $this->Laporan->getYear();
		$data = array(
            'nav_title' => 'Laporan PMI Kota Malang',
            'laporan' => $laporan,
            'darah' => $darah,
            'tahun' => $tahun
        );			
		$this->template->admin('pmi-admin/VLaporanMasuk', $data);
	}

    public function VLaporanKeluar()
	{
        $laporan = $this->Laporan->getKeluar();
        $darah = $this->Laporan->getDarah();
        $tahun = $this->Laporan->getYear();
		$data = array(
            'nav_title' => 'Laporan PMI Kota Malang',
            'laporan' => $laporan,
            'darah' => $darah,
            'tahun' => $tahun
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
        $dataHasil = $this->Laporan->get($data);
        $namaDarah = $this->db->where('id_darah', $dataHasil[0]->id_darah)->get('darah')->result();
        $dataHasil[0]->nama_darah = $namaDarah[0]->jenis_darah;
        echo json_encode($dataHasil);
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

    public function masukChart(){     
        isset($_POST["year"]) ? $year = $_POST["year"] : $year = date("Y");
        
        $monthly = $this->Laporan->getDarahMasuk($year); 

        $bar_graph = "";
        $darahA = "";
        $darahAB = "";
        $darahB = "";
        $darahO = "";

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 1) {
                    $darahA .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahA = substr($darahA, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 2) {
                    $darahB .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahB .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahB = substr($darahB, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 3) {
                    $darahAB .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahAB .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahAB = substr($darahAB, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 4) {
                    $darahO .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahO .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahO = substr($darahO, 0, -1);

        $bar_graph = '
        <canvas id="graph" data-settings=
        \'
            {
                "labels": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", 
                "Aug", "Sep", "Oct", "Nov", "Des"],
                "datasets":[{
                    "label": "A",
                    "data": [' . $darahA . '],
                    "backgroundColor": "#0099ff",
                    "stack": "Stack 0"
                    },
                    {
                    "label": "B",
                    "data": [' . $darahB . '],
                    "backgroundColor": "#e30d00",
                    "stack": "Stack 1"
                    },
                    {
                    "label": "AB",
                    "data": [' . $darahAB . '],
                    "backgroundColor": "#0d976f",
                    "stack": "Stack 2"
                    },
                    {
                    "label": "O",
                    "data": [' . $darahO . '],
                    "backgroundColor": "#ffcc00",
                    "stack": "Stack 3"
                }]
            }
        \'
        ></canvas>';

        echo $bar_graph;
    }

    public function keluarChart(){     
        isset($_POST["year"]) ? $year = $_POST["year"] : $year = date("Y");
        
        $monthly = $this->Laporan->getDarahKeluar($year); 

        $bar_graph = "";
        $darahA = "";
        $darahAB = "";
        $darahB = "";
        $darahO = "";

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 1) {
                    $darahA .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahA = substr($darahA, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 2) {
                    $darahB .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahB .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahB = substr($darahB, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 3) {
                    $darahAB .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahAB .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahAB = substr($darahAB, 0, -1);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 4) {
                    $darahO .= '"' . $item->TOTAL . '",';
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahO .= '"' . 0 . '",';
                    break;
                }
            }
        }
        $darahO = substr($darahO, 0, -1);

        $bar_graph = '
        <canvas id="graph" data-settings=
        \'
            {
                "labels": ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul", 
                "Aug", "Sep", "Oct", "Nov", "Des"],
                "datasets":[{
                    "label": "A",
                    "data": [' . $darahA . '],
                    "backgroundColor": "#0099ff",
                    "stack": "Stack 0"
                    },
                    {
                    "label": "B",
                    "data": [' . $darahB . '],
                    "backgroundColor": "#e30d00",
                    "stack": "Stack 1"
                    },
                    {
                    "label": "AB",
                    "data": [' . $darahAB . '],
                    "backgroundColor": "#0d976f",
                    "stack": "Stack 2"
                    },
                    {
                    "label": "O",
                    "data": [' . $darahO . '],
                    "backgroundColor": "#ffcc00",
                    "stack": "Stack 3"
                }]
            }
        \'
        ></canvas>';

        echo $bar_graph;
    }

    public function getDataPrint(){  
        isset($_POST["year"]) ? $year = $_POST["year"] : $year = date("Y");
        
        $monthly = $this->Laporan->getDarahMasuk($year); 
        $darahA = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 1) {
                    $darahA[$bulan-1] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$bulan-1] = 0;
                    break;
                }
            }
        }

        $counter = 12;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 2) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 3) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 4) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }
        echo json_encode($darahA);
    }

    public function getDataPrintKeluar(){  
        isset($_POST["year"]) ? $year = $_POST["year"] : $year = date("Y");
        
        $monthly = $this->Laporan->getDarahKeluar($year); 
        $darahA = array(0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0,0);

        $bulan = 1;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 1) {
                    $darahA[$bulan-1] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$bulan-1] = 0;
                    break;
                }
            }
        }

        $counter = 12;
        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 2) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 3) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }

        for ($bulan = 1; $bulan <= 12; $bulan++) {
            foreach ($monthly as $item) {
                if ($bulan == $item->BULAN && $item->id_jenis_darah == 4) {
                    $darahA[$counter] = $item->TOTAL;
                    break;
                } else if ($item->BULAN > $bulan) {
                    $darahA[$counter] = 0;
                    break;
                }
            }
            $counter++;
        }
        echo json_encode($darahA);
    }
}
