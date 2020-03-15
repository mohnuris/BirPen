<?php



class Dashboard extends CI_Controller
{

      public function index()
      {
            $tittle['subtittle'] = "DASBOARD";
            $tittle['dashboard'] = "MENU";
            $this->load->view('layout/header', $tittle);
            $this->load->view('layout/sidebar');
            $this->load->view('V_Dashboard');
            $this->load->view('layout/footer');
      }

      public function KepalaSekolah()
      {
            $tittle['subtittle'] = "HALAMAN DASBOARD";
            $tittle['dashboard'] = "MENU";
            $data['us'] = $this->db->get('users')->num_rows();
            $data['g'] = $this->db->get('guru')->num_rows();
            $data['s'] = $this->db->get('siswa')->num_rows();
            $data['k'] = $this->db->get('kelas')->num_rows();
            $this->load->view('dasbor/header', $tittle);
            $this->load->view('home', $data);
            $this->load->view('dasbor/footer');
            $this->load->view('kepalasekolah');
      }
      public function Guru()
      {
            $this->load->view('guru ');
      }
      public function siswa()
      {
            $this->load->view('siswa');
      }
}
