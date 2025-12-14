<?php
class Registrasi extends CI_Controller{
public function index()
{
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'level' => $data->level,);
// menghubungkan controller dengan model yang kita buat
    $this->load->model('user_model');
    $data['user'] = $this->user_model->tampil_data()->result();

    $this->load->view('template_administrator/header');
    $this->load->view('administrator/registrasi',$data);
    $this->load->view('template_administrator/footer');

}

public function input(){
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $data = array(
    'id_user' => set_value('id_user'),
    'nama' => set_value('nama'),
    'alamat' => set_value('alamat'),
    'email' => set_value('email'),
    'no_hp' => set_value('no_hp'),);
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    // memanggil View, namun kita menambahkan $data untuk membawa data dari model ke dalam View, sehingga $data dalam view merupakan sebuah array yang berisi data dari model
    $this->load->view('administrator/tambah_biodata',$data);
    $this->load->view('template_administrator/footer');
}

public function input_aksi(){
    $this->_rules();
    if($this->form_validation->run() == FALSE) {
    $this->input();
    }else {
    $data = array(
    'nama' => $this->input->post('nama', TRUE),
    'alamat' => $this->input->post('alamat', TRUE),
    'email' => $this->input->post('email', TRUE),
    'no_hp' => $this->input->post('no_hp', TRUE),);
    $this->biodata_model->input_data($data);
    $this->session->set_flashdata('pesan','<div class="alert alert-success alertdismissible fade show" role="alert">Data Text Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('administrator/biodata');
    }
}

public function _rules()
{
    $this->form_validation->set_rules('nama','nama','required',['required' => 'Nama wajib diisi!']);
    $this->form_validation->set_rules('alamat','alamat','required',['required' => 'Alamat wajib diisi!']);
    $this->form_validation->set_rules('email','email','required',['required' => 'Email wajib diisi!']);
    $this->form_validation->set_rules('no_hp','no_hp','required',['required' => 'No Hp wajib diisi!']);
}

public function update($id){
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $where = array('id_user' => $id);
    $data['biodata'] = $this->biodata_model->edit_data($where,'biodata')->result();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/update_biodata',$data);
    $this->load->view('template_administrator/footer');
}
public function update_aksi(){
// menangkap data yang dimasukkan kedalam text_update
$id = $this->input->post('id_user'); // method post untuk mengambil data
$nama = $this->input->post('nama');
$alamat = $this->input->post('alamat');
$email = $this->input->post('email');
$no_hp = $this->input->post('no_hp');

// masukkan kedalam variabel data kemudian masuk kedalam array
$data = array (
'nama' => $nama,
'alamat' => $alamat,
'email' => $email,
'no_hp' => $no_hp);
// variabel where untuk mengubah id nya menjadi array
$where = array ('id_user' => $id );
// masukkan data kedalam tabel text melalui text_model
// update_data merupakan function dari text_model
$this->biodata_model->update_data($where,$data,'biodata');
$this->session->set_flashdata('pesan','<div class="alert alert-success alertdismissible fade show" role="alert">Data Text Berhasil Update!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
redirect('administrator/biodata');}

public function delete($id)
{
$where = array ('id_user' => $id);
$this->biodata_model->hapus_data($where,'biodata');
$this->session->set_flashdata('pesan','<div class="alert alert-danger alertdismissible fade show" role="alert">Data Text Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
redirect('administrator/biodata');
}

}
