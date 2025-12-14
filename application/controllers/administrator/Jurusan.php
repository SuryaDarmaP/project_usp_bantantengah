<?php
class Jurusan extends CI_Controller{

function __construct(){
        parent::__construct();
        if (!isset($this->session->userdata['username'])) {
            $this->session->set_flashdata('pesan','<div class="alert alert-danger alertdismissible fade show" role="alert"> Anda Belum Login
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
            </div>');
            redirect('administrator/auth');
            }
            }
    
public function index()
{
    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);

    
// menghubungkan controller dengan model yang kita buat
    // $data['biodata'] = $this->biodata_model->tampil_data()->result();
    $id_user = $this->session->userdata('id');
    
    $data['siswa'] = $this->siswa_model->show_tkj()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/jurusan',$data);
    $this->load->view('template_administrator/footer');

}


public function hasil_tkj1() 
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['j'] = "../guru_mapel/tkj1";
    
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tkj2() 
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['j'] = "../guru_mapel/tkj2";
    
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tkj3() 
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['j'] = "../guru_mapel/tkj3";
    
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tkj4() 
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['j'] = "../guru_mapel/tkj4";
    
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tkj5() 
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['j'] = "../guru_mapel/tkj5";
    
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tkj6() 
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['j'] = "../guru_mapel/tkj6";
    
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tab1()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tab1";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tab2()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tab2";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tab3()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tab3";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tab4()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tab4";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tab5()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tab5";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tab6()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tab6";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tav1()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tav1";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tav2()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tav2";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tav3()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/tav3";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_titl1()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/titl1";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_titl2()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/titl2";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_titl3()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['j'] = "../guru_mapel/titl3";

    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_jurusan', $data2);
    $this->load->view('template_administrator/footer');

}


}