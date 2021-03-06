<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Asisten extends CI_Controller
{
  public function __construct()
  {
    parent::__construct();
    is_logged_in();
  }

  public function index()
  {
    $this->load->model('Asisten_model');
    $data['title'] = 'Penilaian';
    $data['user'] = $this->db->get_where('user', ['nrp' => $this->session->userdata('nrp')])->row_array();
    $data['list'] = $this->Asisten_model->TampilNilai();
    $i = 0;
    while ($i < count($data['list'])) {
      $asisten = $data['list'][$i]['asisten'];
      if ($asisten) {
        $nama = $this->db->query("SELECT `name` FROM `user` WHERE `nrp`= $asisten")->row_array();
        $data['list'][$i]['asisten'] = $nama['name'];
      }
      $i++;
    }

    $this->load->view('template/header', $data);
    $this->load->view('template/sidebar', $data);
    $this->load->view('template/topbar', $data);
    $this->load->view('asisten/index', $data);
    $this->load->view('template/footer');
  }

  public function getubahnilai()
  {
    $this->load->model('Asisten_model');
    echo json_encode($this->Asisten_model->TampilNilaiPraktikan($this->input->post('id')));
  }

  public function editnilai()
  {
    $data = [
      'nilai' => $this->input->post('nilai', true),
      'asisten' => $this->session->userdata('nrp')
    ];
    $this->db->where('id', $this->input->post('id'));
    $this->db->update('nilai', $data);
    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">
          Nilai berhasil diubah!
          </div>');
    redirect(base_url('asisten'));
  }
}
