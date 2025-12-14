<?php
class Absensi extends CI_Controller{

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
    
    $data['siswa'] = $this->siswa_model->tampil_data()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/absensi',$data);
    $this->load->view('template_administrator/footer');

} 



public function update($id){
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $where = array('id_siswa' => $id);

    $data['siswa'] = $this->siswa_model->edit_data($where,'siswa')->result();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/update_absen',$data);
    $this->load->view('template_administrator/footer');
}

public function update_aksi(){
    // menangkap data yang dimasukkan kedalam text_update
    $id_siswa = $this->input->post('id_siswa'); // method post untuk mengambil data
    $status = $this->input->post('status');

// masukkan kedalam variabel data kemudian masuk kedalam array
    $data = array (
    'status' => $status,);
    // variabel where untuk mengubah id nya menjadi array
    $where = array ('id_siswa' => $id_siswa );
    // masukkan data kedalam tabel text melalui text_model
    // update_data merupakan function dari text_model
    $this->siswa_model->update_data($where,$data,'siswa');
    $this->session->set_flashdata('pesan1','<div class="alert alert-success alertdismissible fade show" role="alert">Data Absensi Berhasil Update!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('administrator/absensi');

}

public function tkj1()
{
    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);
    $data['j'] = "TKJ 1";
    $data['c'] = "../jurusan/hasil_tkj1";
    
// menghubungkan controller dengan model yang kita buat
    // $data['biodata'] = $this->biodata_model->tampil_data()->result();
    $id_user = $this->session->userdata('id');
    
    $data['siswa'] = $this->siswa_model->show_tkj1()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/jurusan_tkj',$data);
    $this->load->view('template_administrator/footer');

}

public function tkj2()
{
    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);
    
    $data['j'] = "TKJ 2";
    $data['c'] = "../jurusan/hasil_tkj2";
// menghubungkan controller dengan model yang kita buat
    // $data['biodata'] = $this->biodata_model->tampil_data()->result();
    $id_user = $this->session->userdata('id');
    
    $data['siswa'] = $this->siswa_model->show_tkj2()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/jurusan_tkj',$data);
    $this->load->view('template_administrator/footer');

}

public function tab1()
{
    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);

    $data['j'] = "TAB 1";
    $data['c'] = "../jurusan/hasil_tab1";
// menghubungkan controller dengan model yang kita buat
    // $data['biodata'] = $this->biodata_model->tampil_data()->result();
    $id_user = $this->session->userdata('id');
    
    $data['siswa'] = $this->siswa_model->show_tab1()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/jurusan_tab',$data);
    $this->load->view('template_administrator/footer');

}

public function tab2()
{
    // echo json_encode($this->session->userdata()); die();
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'id' => $data->id,
        'level' => $data->level,);

    $data['j'] = "TAB 2";
    $data['c'] = "../jurusan/hasil_tab2";
// menghubungkan controller dengan model yang kita buat
    // $data['biodata'] = $this->biodata_model->tampil_data()->result();
    $id_user = $this->session->userdata('id');
    
    $data['siswa'] = $this->siswa_model->show_tab2()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/jurusan_tab',$data);
    $this->load->view('template_administrator/footer');

}

public function tav()
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
    
    $data['siswa'] = $this->siswa_model->show_tav()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/jurusan_tav',$data);
    $this->load->view('template_administrator/footer');

}

public function titl()
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
    
    $data['siswa'] = $this->siswa_model->show_titl()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/jurusan_titl',$data);
    $this->load->view('template_administrator/footer');

}




public function hadir()
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
    
    $data['siswa'] = $this->siswa_model->show_hadir()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('guru_bk/hadir',$data);
    $this->load->view('template_administrator/footer');

}

public function tidak_hadir()
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
    
    $data['siswa'] = $this->siswa_model->show_tidak_hadir()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('guru_bk/tidak_hadir',$data);
    $this->load->view('template_administrator/footer');

}

public function hasil_hadir() 
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_hadir', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_tidak_hadir()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_tidak_hadir', $data2);
    $this->load->view('template_administrator/footer');

}

public function hasil_absen()
{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data2['cari'] = $this->siswa_model->cari();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/cari_absen', $data2);
    $this->load->view('template_administrator/footer');

}


public function reset()
{

$this->siswa_model->hapus();
$this->session->set_flashdata('pesan1','<div class="alert alert-danger alertdismissible fade show" role="alert">Data Status Berhasil Direset!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
redirect('administrator/absensi');
}

public function reset2()
{

$this->siswa_model->hapus();
$this->session->set_flashdata('pesan1','<div class="alert alert-danger alertdismissible fade show" role="alert">Data Status Berhasil Direset!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
redirect('administrator/siswa');
}


}