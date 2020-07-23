<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Praktikan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        is_logged_in();
    }
    public function index()
    {
        $data['title'] = 'Pengumuman';
        $data['user'] = $this->db->get_where('user', ['nrp' => $this->session->userdata('nrp')])->row_array();

        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('praktikan/index', $data);
        $this->load->view('template/footer');
    }

    public function modul($id = NULL)
    {
        $data['modul'] = $this->db->get('modul')->result_array();
        $data['user'] = $this->db->get_where('user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        if (!$id) {
            $data['title'] = 'Modul Praktikum';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('praktikan/modul', $data);
            $this->load->view('template/footer');
        } else {
            $data['modul'] = $this->db->get_where('modul', ['modul' => $id])->row_array();
            $data['title'] = 'Modul Praktikum';
            $this->load->view('template/header', $data);
            $this->load->view('template/sidebar', $data);
            $this->load->view('template/topbar', $data);
            $this->load->view('praktikan/content', $data);
            $this->load->view('template/footer');
        }
    }

    public function percobaan($id = NULL)
    {
        $this->_connectsocket($id);
        $data['output'] = NULL;

        $data['title'] = 'Percobaan Praktikum';
        $data['user'] = $this->db->get_where('user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        $data['modul'] = $this->db->get_where('modul', ['modul' => $id])->row_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('praktikan/percobaan', $data);
        $this->load->view('template/footer');
    }

    private function _connectsocket($id = NULL)
    {
        $host    = "192.168.43.16";
        $port    = 1000;
        $port2    = 1001;
        //echo "Message To server :" . $message;
        // create socket
        $socket1 = socket_create(AF_INET, SOCK_STREAM, 0);
        $socket2 = socket_create(AF_INET, SOCK_STREAM, 0);

        $socket = [$socket1, $socket2];
        $data['result2'] = NULL;

        if ($socket || $socket2) {
            // connect to server    
            $result1 = socket_connect($socket1, $host, $port);
            $result2 = socket_connect($socket2, $host, $port2);

            $result = [$result1, $result2];
            if ($result1 || $result2) {
                $success = [$socket, $result];
                return $success;
            } else {
                echo "<script>alert('Tidak dapat terhubung ke server!');
                window.location.href='" . base_url('praktikan/modul/') . $id . "';</script>";
            }
        } else {
            echo "<script>alert('Gagal membuat socket!');
            window.location.href='" . base_url('praktikan/modul/') . $id . "';</script>";
        }
    }

    private function _sendsocket($socket1, $socket2, $message, $id)
    {
        if (socket_write($socket1, $message, strlen($message))) {
            $result2 = socket_read($socket2, 1024);
            $result2 = htmlspecialchars($result2);
            if ($result2) {
                return $result2;
            } else {
                echo "<script>alert('Tidak dapat membaca respon dari server!');
                    window.location.href='" . base_url('praktikan/modul/') . $id . "';</script>";
            }
        } else {
            echo "<script>alert('Tidak dapat mengirim data ke server!');
            window.location.href='" . base_url('praktikan/modul/') . $id . "';</script>";
        }
    }

    public function getpercobaan()
    {
        $connect = $this->_connectsocket();
        $hasil = $this->_sendsocket($connect[0][0], $connect[0][1], $this->input->post('kirim'), $this->input->post('id'));
        echo json_encode($hasil);
    }

    public function jadwal()
    {
        $this->load->model('Praktikan_model');
        $data['title'] = 'Jadwal Praktikum';
        $data['user'] = $this->db->get_where('user', ['nrp' => $this->session->userdata('nrp')])->row_array();
        $data['list'] = $this->Praktikan_model->JadwalPraktikan($this->session->userdata('nrp'));
        $data['modul'] = $this->db->get('modul')->result_array();
        $this->load->view('template/header', $data);
        $this->load->view('template/sidebar', $data);
        $this->load->view('template/topbar', $data);
        $this->load->view('template/header', $data);
        $this->load->view('praktikan/jadwal', $data);
        $this->load->view('template/footer');
    }

    public function reqjadwal()
    {
        $data = [
            "nrp" => $this->input->post('nrp'),
            "modul_id" => $this->input->post('modul'),
            "jadwal_old" => $this->input->post('jadwal_old'),
            "jadwal_new" => $this->input->post('jadwal_new'),
            "ket" => $this->input->post('ket'),
            "is_approved" => 0
        ];

        $this->db->insert('req_jadwal', $data);
        $this->session->set_flashdata('message1', '<div class="alert alert-success" role="alert">
          Pengajuan jadwal sukses! Silakan menunggu persetujuan dari Admin.
          </div>');
        redirect(base_url('praktikan/jadwal'));
    }
}