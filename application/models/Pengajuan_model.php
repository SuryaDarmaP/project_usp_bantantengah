<?php
    class Pengajuan_model extends CI_Model{
        public function tampil_data()
        {
            // memanggil usename dari database
             return $this->db->get('pengajuan');
        }

        public function get($table, $data = null, $where = null)
    {
        if ($data != null) {
            return $this->db->get_where($table, $data)->row_array();
        } else {
            return $this->db->get_where($table, $where)->result_array();
        }
    }


        function join2table($id){
            $this->db->select('*');
            $this->db->from('user');
            $this->db->join('syarat','syarat.id = user.id');
            $this->db->where('syarat.id', $id);      
            $query = $this->db->get();
            return $query;
         }

    public function input_data($data)
        {
            // insert data ke tabel jurusan
             $this->db->insert('pengajuan',$data);
        }
        public function edit_data($where,$table)
            {
        // untuk menampilkan data dari tabel text, karena datanya sudah di input sebelumnya
            return $this->db->get_where($table,$where);
            }
        public function update_data($where,$data,$table)
            {
            $this->db->where($where);
            $this->db->update($table,$data);
            }
            public function hapus_data($where,$table)
            {
            $this->db->where($where);
            $this->db->delete($table);
            }
        public function jumlah(){
                return $this->db->query("SELECT sum(anggunan) AS total from pengajuan");
             }

           
        public function search($keyword){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->like('nama',$keyword);
                $this->db->or_like('nisn',$keyword);
                return $this->db->get()->result();
            }

            public function cari()
            {
                $cari = $this->input->GET('cari', TRUE);
                $data = $this->db->query("SELECT * from siswa where nisn like '%$cari%' ");
                return $data->result();
            }

            public function show_hadir(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('status','Hadir');
                return $this->db->get();
            }

            public function show_tidak_hadir(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('status','Tidak Hadir');
                return $this->db->get();
            }

            public function show_tkj1(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','X TKJ 1');
                return $this->db->get();
            }

            public function show_tkj2(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','X TKJ 2');
                return $this->db->get();
            }

            public function show_tkj3(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XI TKJ 1');
                return $this->db->get();
            }

            public function show_tkj4(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XI TKJ 2');
                return $this->db->get();
            }

            public function show_tkj5(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XII TKJ 1');
                return $this->db->get();
            }

            public function show_tkj6(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XII TKJ 2');
                return $this->db->get();
            }

            public function show_tab1(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','X TAB 1');
                return $this->db->get();
            }

            public function show_tab2(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','X TAB 2');
                return $this->db->get();
            }

            public function show_tab3(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XI TAB 1');
                return $this->db->get();
            }

            public function show_tab4(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XI TAB 2');
                return $this->db->get();
            }

            public function show_tab5(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XII TAB 1');
                return $this->db->get();
            }

            public function show_tab6(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XII TAB 2');
                return $this->db->get();
            }

            public function show_tav(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','TAV');
                return $this->db->get();
            }

            public function show_tav1(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','X TAV');
                return $this->db->get();
            }

            public function show_tav2(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XI TAV');
                return $this->db->get();
            }

            public function show_tav3(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XII TAV');
                return $this->db->get();
            }

            public function show_titl(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','TITL');
                return $this->db->get();
            }

            public function show_titl1(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','X TITL');
                return $this->db->get();
            }

            public function show_titl2(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XI TITL');
                return $this->db->get();
            }

            public function show_titl3(){
                $this->db->select('*');
                $this->db->from('siswa');
                $this->db->where('jurusan','XII TITL');
                return $this->db->get();
            }
       
            public function resetstatus($where,$table)
            {
            $this->db->where($where);
            $this->db->delete($table);
            }
            public function reset()
            {
                $this->db->query("DELETE from siswa  ");

            }

        public function tambah()
        {
            $this->db->query("ALTER TABLE siswa ADD COLUMN IF NOT EXISTS status varchar(50) ");

        }
        public function hapus()
        {
            $this->db->query("ALTER TABLE siswa DROP COLUMN IF EXISTS status ");
            $this->db->query("ALTER TABLE siswa ADD COLUMN IF NOT EXISTS status varchar(50) ");


        }
            
    }