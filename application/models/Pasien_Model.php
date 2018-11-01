<?php
class Pasien_Model extends CI_Model {
  public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function read_pasien_information($NIK) {
        $condition = "NIK =" . "'" . $NIK . "'";
        $this->db->select('*');
        $this->db->from('pasien');
        $this->db->where($condition);
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->row();
        } else {
            return false;
        }
    }

    public function add_pasien($pasien){
        if ( $this->db->insert('pasien', $pasien)){
            return true;
        } else {
            return false;
        }
    }

    public function count_all()
    {
        $this->db->from('pasien');
        return $this->db->count_all_results();
    }
    }
    ?>