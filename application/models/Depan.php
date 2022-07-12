<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Depan extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getJadwalMobil(){
        $sql = "SELECT * FROM jadwal_mobil WHERE jadwal > NOW() ORDER BY jadwal ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getProfil(){
        $sql = "SELECT * FROM profil WHERE status=1 ORDER BY judul_profil ASC";
        $res = $this->db->query($sql)->result();
        return $res;
    }

    public function getOthers($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('profil', $filter)->result();
        return $res;
    }

    public function getOtherInfo($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('informasi', $filter)->result();
        return $res;
    }

    public function getInfo(){
        $this->db->order_by('id_informasi','ASC');
        $res = $this->db->get('informasi')->result();
        return $res;
    }
}