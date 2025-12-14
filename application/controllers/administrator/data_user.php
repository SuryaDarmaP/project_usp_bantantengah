<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Data_user extends CI_Controller {
    
    function __construct(){
        parent::__construct();
        $this->load->model('biodata_model');

    }

	public function index()
	{
        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'level' => $data->level,);
        $data['biodata']=$this->biodata_model->tampil_data();
        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('administrator/data_search',$data);
        $this->load->view('template_administrator/footer');

    }
    
    public function data_anggota(){
        $data['biodata'] = $this->biodata_model->data_anggota()->result(); 
        $data['user'] = $this->biodata_model->data_simpanan()->result(); 
        $data['join_anggota_simpanan'] = $this->biodata_model->data_join2table()->result(); 
        $this->load->view('anggota/anggotaview',$data);
     } 
    public function join_3(){

        $data = $this->user_model->ambil_data($this->session->userdata['username']);
        $data = array(
            'username' => $data->username,
            'level' => $data->level,);

        $data['join_anggota_simpanan_unit'] = $this->biodata_model->join3table()->result();

        $this->load->view('template_administrator/header');
        $this->load->view('template_administrator/sidebar',$data);
        $this->load->view('user/data_user',$data);
        $this->load->view('template_administrator/footer');
    }
}