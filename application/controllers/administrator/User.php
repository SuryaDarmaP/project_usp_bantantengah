<?php
class User extends CI_Controller{

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
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
        'username' => $data->username,
        'level' => $data->level,);
// menghubungkan controller dengan model yang kita buat
    $this->load->model('user_model');
    $data['user'] = $this->user_model->tampil_data()->result();
    $data['users'] = $this->pengajuan_model->get('user');

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/user',$data);
    $this->load->view('template_administrator/footer');

}

public function profil(){

    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
    'username' => $data->username,
    'id' => $data->id,
    'level' => $data->level,);
    
    
    $id_user = $this->session->userdata('id');
        
    $data['user'] = $this->user_model->ambil_id($id_user)->result();
    
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data);
    $this->load->view('administrator/profil',$data);
    $this->load->view('template_administrator/footer');        

}

public function edit_profil($id){
    $data = $this->user_model->ambil_data($this->session->userdata['username']);
    $data = array(
    'username' => $data->username,
    'id' => $data->id,
    'level' => $data->level,);
    
$where = array('id' => $id);
$data['user'] = $this->user_model->edit_data($where,'user')->result();
$this->load->view('template_administrator/header');
$this->load->view('template_administrator/sidebar',$data);
$this->load->view('administrator/edit_profil',$data);
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
    $this->load->view('administrator/tambah_user',$data);
    $this->load->view('template_administrator/footer');
}

public function input_aksi(){
    $cek = $this->db->query("SELECT * FROM user where username='".$this->input->post('username')."'")->num_rows();
    if ($cek<=0) { 
    $this->_rules();
    if($this->form_validation->run() == TRUE) {
    $this->input();
    $data = array(
    'username' => $this->input->post('username'),
    'password' => md5($this->input->post('password')), 
    'email' => $this->input->post('email'),
    'alamat' => $this->input->post('alamat'),
    'no_hp' => $this->input->post('no_hp'),
    'level' => $this->input->post('level'),
    'blokir' => $this->input->post('blokir'),);
    $this->user_model->input_data($data);
    $this->session->set_flashdata('pesan','<div class="alert alert-success alertdismissible fade show" role="alert">Registrasi Berhasil Silakan Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('administrator/user');
    }  
    else{
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $this->session->set_flashdata('pesan_user','<div class="alert alert-danger alertdismissible fade show" role="alert">Registrasi Gagal Username Sudah Ada!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    // memanggil View, namun kita menambahkan $data untuk membawa data dari model ke dalam View, sehingga $data dalam view merupakan sebuah array yang berisi data dari model
    $this->load->view('administrator/tambah_user',$data1);
    $this->load->view('template_administrator/footer');
    }
    }
}

public function _rules()
{
    $this->form_validation->set_rules('username','username','required',['required' => 'Username wajib diisi!']);
    $this->form_validation->set_rules('password','password','required',['required' => 'Password wajib diisi!']);
    $this->form_validation->set_rules('email','email','required',['required' => 'Email wajib diisi!']);
    $this->form_validation->set_rules('level','level','required',['required' => 'Level wajib diisi!']);
    $this->form_validation->set_rules('blokir','blokir','required',['required' => 'Blokir wajib diisi!']);


}

public function update($id){
    $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
    $data1 = array(
        'username' => $data1->username,
        'level' => $data1->level,);
    $where = array('id' => $id);
    $data['user'] = $this->user_model->edit_data($where,'user')->result();
    $this->load->view('template_administrator/header');
    $this->load->view('template_administrator/sidebar',$data1);
    $this->load->view('administrator/update_user',$data);
    $this->load->view('template_administrator/footer');
}
public function update_aksi(){
    // menangkap data yang dimasukkan kedalam text_update
    $id = $this->input->post('id'); // method post untuk mengambil data
    $username = $this->input->post('username');
    $password = md5($this->input->post('password'));
    $email = $this->input->post('email');
    $level = $this->input->post('level');
    $blokir = $this->input->post('blokir');

// masukkan kedalam variabel data kemudian masuk kedalam array
    $data = array (
    'username' => $username,
    'password' => $password,
    'email' => $email,
    'level' => $level,
    'blokir' => $blokir);
    // variabel where untuk mengubah id nya menjadi array
    $where = array ('id' => $id );
    // masukkan data kedalam tabel text melalui text_model
    // update_data merupakan function dari text_model
    $this->user_model->update_data($where,$data,'user');
    $this->session->set_flashdata('pesan','<div class="alert alert-success alertdismissible fade show" role="alert">Data User Berhasil Update!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
    redirect('administrator/user');

}

public function delete($id)
{
$where = array ('id' => $id);
$this->user_model->hapus_data($where,'user');
$this->session->set_flashdata('pesan','<div class="alert alert-danger alertdismissible fade show" role="alert">Data User Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
redirect('administrator/user');
}

}
