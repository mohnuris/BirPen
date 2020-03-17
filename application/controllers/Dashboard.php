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
            $tittle['subtittle'] = "DASBOARD";
            $tittle['dashboard'] = "MENU";
            $this->load->view('layout/header');
            $this->load->view('layout/sidebar');
            $this->load->view('V_KepalaSekolah');
            $this->load->view('layout/footer');
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
