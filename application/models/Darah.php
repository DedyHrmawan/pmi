<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Darah extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getAll(){
        $this->db->order_by('id_darah', 'ASC');
        $res = $this->db->get('darah')->result();
        return $res;
    }
    public function getDetailDarah(){
        $this->db->order_by('id_darah', 'ASC');        
        $this->db->order_by('id_jenis_darah', 'ASC');
        $res = $this->db->get('detail_darah')->result();
        return $res;
    }
    public function get($param){
        $filter = !empty($param['filter'])? $param['filter'] : '';
        $res    = $this->db->get_where('detail_darah', $filter)->result();
        return $res;
    }
    public function getStock($darah,$jenis){
        $sql = "SELECT stok 
        FROM detail_darah
        WHERE id_darah = $darah AND
        id_jenis_darah = $jenis";       
        $res = $this->db->query($sql)->result();
        return $res;
    }
    public function insertDetail($param){
        $this->db->insert('detail_darah', $param);
        return $this->db->insert_id();
    }
    public function update($iddarah,$idjenis,$stok){
        $sql = "UPDATE 
        detail_darah
        SET stok = stok + $stok
        WHERE id_darah = $iddarah AND
        id_jenis_darah = $idjenis";       
        $this->db->query($sql);
        return true;
    }
    public function edit($iddarah,$idjenis,$stok){
        $sql = "UPDATE 
        detail_darah
        SET stok = $stok
        WHERE id_darah = $iddarah AND
        id_jenis_darah = $idjenis";       
        $this->db->query($sql);
        return true;
    }
    public function delete($param){
        $this->db->where($param)->delete('detail_darah');
        $this->db->where($param)->delete('darah');        
        return true;
    }
}