<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pasien extends CI_Controller {
 public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Pasien_Model');
    }

	public function index()
	{
		$this->load->view('pendaftaran_pasien');
    }
    
    public function formcekdata()
	{
        $pasien['data']=$this->Pasien_Model->read_pasien_information($this->input->post('NIK'));
        $this->load->view('cekdata',$pasien);
    }
    
    public function savedata(){
        $row=$this->Pasien_Model->count_all();
        $tanggal=date('mdyhsi');
        $idrm=$tanggal.$row['id'];
        $datapasien = array(
            'NO_RM' => $idrm,
            'NIK' => $this->input->post('NIK'),
            'NAMA' => $this->input->post('NAMA'),
            'ALAMAT' => $this->input->post('ALAMAT'),
            'NOTEL' => $this->input->post('NOTEL'),
        );
        $result = $this->Pasien_Model->add_pasien($datapasien);
        if($result){
            echo "DAFTAR SUKSES NO RM =".$idrm;
        }else{
            echo "Gagal silahkan ulangi lagi";
        }
    }
}
?>