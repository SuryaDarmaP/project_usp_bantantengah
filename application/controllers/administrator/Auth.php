<?php
    class Auth extends CI_Controller{
        public function index(){
            $this->load->view('template_administrator/header');
            $this->load->view('administrator/homee');
            $this->load->view('template_administrator/footer');
        }
        
        public function registrasi(){
            $this->load->view('template_administrator/header');
            $this->load->view('administrator/register');
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

        public function aksi_upload(){
            $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
            $data1 = array(
                'username' => $data1->username,
                'id' => $data1->id,
                'level' => $data1->level,);
        
            $data['user'] = $this->user_model->tampil_data()->result();
            
            $config['upload_path']          = 'upload/ktp/';
            $config['allowed_types']        = 'gif|jpg|png|';
            // $config['max_size']             = ;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
        
            $this->load->library('upload', $config);
        
            $this->load->view('template_administrator/header');
            $this->load->view('administrator/registrasi',$config);
            $this->load->view('template_administrator/footer');
        
        
            $upload_gambar1 = $this->upload->do_upload('ktp');
            $data['error'] = [];
            if ($upload_gambar1){
                
                $nama_file1 = $this->upload->data('file_name');
         
                            $datasimpan = [
        
                                'ktp'=> $nama_file1,
                                'username'=> $this->input->post('username', TRUE),
                                'nama'=> $this->input->post('nama', TRUE),
                                'password' => md5($this->input->post('password', TRUE)), 
                                'email'=> $this->input->post('email', TRUE),
                                'id'=> $this->input->post('id', TRUE),
                                'no_hp'=> $this->input->post('no_hp', TRUE),
                                'nik'=> $this->input->post('nik', TRUE),
                                'alamat'=> $this->input->post('alamat', TRUE),
                                'level'=> $this->input->post('level', TRUE),
                                'blokir'=> $this->input->post('blokir', TRUE),
        
        
                            ];
                            $this->user_model->input_data($datasimpan);
                            $this->session->set_flashdata('pesan','<div class="alert alert-success alertdismissible fade show" role="alert">Registrasi Berhasil Silakan Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            redirect('administrator/auth'); 
        
            }else{
                $this->session->set_flashdata('pesan','<div class="alert alert-danger alertdismissible fade show" role="alert">Isi Data Dengan Benar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        
            }
            redirect('administrator/auth/registrasi');
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
            'level' => $this->input->post('level'),
            'blokir' => $this->input->post('blokir'),);
            $this->user_model->input_data($data);
            $this->session->set_flashdata('pesan','<div class="alert alert-success alertdismissible fade show" role="alert">Registrasi Berhasil Silakan Login!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/auth');
        }else {

        }
    }else {
        $this->session->set_flashdata('pesan','<div class="alert alert-danger alertdismissible fade show" role="alert">Registrasi Gagal Username Sudah Tersedia<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');

        $this->load->view('template_administrator/header');
        $this->load->view('administrator/registrasi');
        $this->load->view('template_administrator/footer');
    }
}
        
        public function _rules()
        {
            $this->form_validation->set_rules('username','username','required',['required' => 'Username wajib diisi!']);
            $this->form_validation->set_rules('password','password','required',['required' => 'Password wajib diisi!']);
            $this->form_validation->set_rules('email','email','required',['required' => 'Email wajib diisi!']);
        }
        

        public function proses_login(){
            //set rules username dan password yang wajib disi
            $this->form_validation->set_rules('username','usernname','required');
            $this->form_validation->set_rules('password','password','required');
            //jika form validasi salah,maka kembali ke form login
            if($this->form_validation->run() == false){
                $this->load->view('template_administrator/header');
                $this->load->view('administrator/login');
                $this->load->view('template_administrator/footer');

            }else{
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                $user = $username;
                $pass = MD5($password);
                $cek = $this->login_model->cek_login($user,$pass);
                //apabila cocok maka akan di redirect ke dashboard
                if ($cek->num_rows() > 0) {
                    //session username,email dan level untuk di tampilkan

                    foreach($cek->result() as $ck) {
                        $sess_data['username'] = $ck->username;
                        $sess_data['email'] = $ck->email;
                        $sess_data['level'] = $ck->level;
                        $sess_data['id'] = $ck->id;

                        //memanggil session ses data
                        $this->session->set_userdata($sess_data);
                    }
                    //cek level login untuk tiap aktor jika benar maka langsung masuk ke administrator
                    if($sess_data['level'] ==  'Admin'){
                        
                        redirect('administrator/dashboard');
                    }
                    else if($sess_data['level'] == "Nasabah"){
                        
                        redirect('administrator/Nasabah');
                    }
                    else if($sess_data['level'] == "Staff SAK"){
                        
                        redirect('administrator/Staff');
                    }
                    else if($sess_data['level'] == "Analisis Kredit"){
                        
                        redirect('administrator/Analisis');
                    }
 
                }else{
                    $this->session->set_flashdata('pesan','<div class="alert alert-warning alert-dismissible fade show" role="alert">
                    Username atau Password Salah!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                   </div>');
                    redirect ('administrator/auth');
                }
            }
        }


        public function logout(){
            $this->session->sess_destroy();
            redirect('auth');
        }
    }