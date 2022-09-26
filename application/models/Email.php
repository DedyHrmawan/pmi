<?php 
defined('BASEPATH') or exit('No direct script access allowed');

class Email extends CI_Model{
    function __construct(){
        parent::__construct();
    }

    public function getPendonor(){
        $sql = "SELECT id_pendonor,
        nama_pendonor,
        donor_selanjutnya,
        email_pendonor 
        FROM pendonor 
        WHERE donor_selanjutnya < NOW()";
        $result = $this->db->query($sql)->result();
        return $result;
    }
}