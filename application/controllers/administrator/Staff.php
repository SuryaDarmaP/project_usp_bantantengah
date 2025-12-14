<?php
    class Staff extends CI_Controller{

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
        public function index(){

            $data = $this->user_model->ambil_data($this->session->userdata['username']);
            $data = array(
                'username' => $data->username,
                'level' => $data->level,);

            $this->load->view('template_administrator/header');
            $this->load->view('template_administrator/sidebar', $data);
            $this->load->view('administrator/dashboard',$data);
            $this->load->view('template_administrator/footer');

        }
                
                public function pengajuan()
        {
            // echo json_encode($this->session->userdata()); die();
            $data = $this->user_model->ambil_data($this->session->userdata['username']);
            $data = array(
                'username' => $data->username,
                'id' => $data->id,
                'level' => $data->level,);
            $data['pe'] = "Daftar Pengajuan";
            
        // menghubungkan controller dengan model yang kita buat
            // $data['biodata'] = $this->biodata_model->tampil_data()->result();
            $id_user = $this->session->userdata('id');
            
            $data['jumlah'] = $this->pengajuan_model->jumlah()->result();
            $data['pengajuan'] = $this->pengajuan_model->get('pengajuan');

            $this->load->view('template_administrator/header');
            $this->load->view('template_administrator/sidebar',$data);
            $this->load->view('administrator/pengajuan_staff',$data);
            $this->load->view('template_administrator/footer');

        }

        public function hasil_survei()
        {
            // echo json_encode($this->session->userdata()); die();
            $data = $this->user_model->ambil_data($this->session->userdata['username']);
            $data = array(
                'username' => $data->username,
                'id' => $data->id,
                'level' => $data->level,);
            $data['hs'] = "Hasil Survei";
            
        // menghubungkan controller dengan model yang kita buat
            // $data['biodata'] = $this->biodata_model->tampil_data()->result();
            $id_user = $this->session->userdata('id');
            
            $data['jumlah'] = $this->pengajuan_model->jumlah()->result();
            $data['hasil_pengajuan'] = $this->pengajuan_model->get('pengajuan');
            $data['pengajuan'] = $this->pengajuan_model->tampil_data()->result();

            $this->load->view('template_administrator/header');
            $this->load->view('template_administrator/sidebar',$data);
            $this->load->view('administrator/hasil_survei',$data);
            $this->load->view('template_administrator/footer');

        }

        public function input()
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
            
            $data['jumlah'] = $this->simpanan_model->jumlah()->result();
            $data['simpan'] = $this->simpanan_model->tampil_data()->result();

            $this->load->view('template_administrator/header');
            $this->load->view('template_administrator/sidebar',$data);
            $this->load->view('administrator/tambah_pengajuan',$data);
            $this->load->view('template_administrator/footer');

        }

        public function aksi_upload(){
            $data1 = $this->user_model->ambil_data($this->session->userdata['username']);
            $data1 = array(
                'username' => $data1->username,
                'id' => $data1->id,
                'level' => $data1->level,);
        
            $data['siswa'] = $this->pengajuan_model->tampil_data()->result();
            
            $config['upload_path']          = 'upload/jaminan/';
            $config['allowed_types']        = 'gif|jpg|png|docx|pdf';
            // $config['max_size']             = ;
            // $config['max_width']            = 1024;
            // $config['max_height']           = 768;
        
            $this->load->library('upload', $config);
        
            $this->load->view('template_administrator/header');
            $this->load->view('template_administrator/sidebar',$data1);
            // memanggil View, namun kita menambahkan $data untuk membawa data dari model ke dalam View, sehingga $data dalam view merupakan sebuah array yang berisi data dari model
            $this->load->view('administrator/tambah_pengajuan',$config);
            $this->load->view('template_administrator/footer');
        
        
            $upload_gambar1 = $this->upload->do_upload('foto_jaminan');
            $data['error'] = [];
            if ($upload_gambar1){
                
                $nama_file1 = $this->upload->data('file_name');
        
                            $datasimpan = [
        
                                'foto_jaminan'=> $nama_file1,
                                'nama'=> $this->input->post('nama', TRUE),
                                'alamat'=> $this->input->post('alamat', TRUE),
                                'ttl'=> $this->input->post('ttl', TRUE),
                                'pekerjaan'=> $this->input->post('pekerjaan', TRUE),
                                'jaminan'=> $this->input->post('jaminan', TRUE),
                                'lokasi'=> $this->input->post('lokasi', TRUE),
                                'tujuan'=> $this->input->post('tujuan', TRUE),
                                'anggunan'=> $this->input->post('anggunan', TRUE),
                                'tempo'=> $this->input->post('tempo', TRUE),
                                'id_user'=> $this->input->post('id_user', TRUE),
        
        
                            ];
                            $this->pengajuan_model->input_data($datasimpan);
                            $this->session->set_flashdata('pesan1','<div class="alert alert-success alertdismissible fade show" role="alert">Pengajuan Berhasil Ditambahkan!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
                            redirect('administrator/nasabah/pengajuan'); 
        
            }else{
                $this->session->set_flashdata('input','<div class="alert alert-danger alertdismissible fade show" role="alert">Isi Data Dengan Benar!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
        
            }
            redirect('administrator/nasabah/input');
        }


            public function delete($id)
            {
            $where = array ('id_pengajuan' => $id);
            $this->pengajuan_model->hapus_data($where,'pengajuan');
            $this->session->set_flashdata('pesan1','<div class="alert alert-danger alertdismissible fade show" role="alert">Data Pengajuan Berhasil Dihapus!<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button></div>');
            redirect('administrator/nasabah/pengajuan');
            }

    }