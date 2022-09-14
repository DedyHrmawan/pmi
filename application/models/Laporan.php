<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getMasuk(){
        $sql = "SELECT l.*,d.jenis_darah FROM laporan l,darah d WHERE l.id_darah = d.id_darah AND l.tipe=1";       
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getKeluar(){
        $sql = "SELECT l.*,d.jenis_darah FROM laporan l,darah d WHERE l.id_darah = d.id_darah AND l.tipe=2";       
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function getDarah(){
        $this->db->order_by('id_darah', 'ASC');
        $res = $this->db->get('darah')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('laporan', $filter)->result();
        return $res;
    }
    public function insert($param){
        $this->db->insert('laporan', $param);
        return $this->db->insert_id();
    }
    public function update($param){
        $this->db->where('id_laporan', $param['id_laporan'])->update('laporan', $param);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('laporan');
        return true;
    }
}