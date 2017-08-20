<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Ari Susanto
 */
class Register extends MY_Controller
{

  function __construct()
  {
    parent::__construct();
    $this->data['username'] = $this->session->userdata('username');
    $this->data['id_role']  = $this->session->userdata('id_role');
    if (isset($this->data['username'], $this->data['id_role']))
    {
      switch ($this->data['id_role'])
      {
        case 1:
          redirect('super-admin');
          break;
        case 2:
          redirect('admin');
          break;
          case 3:
          redirect('peserta');
          break;
      }
      exit;
    }
    $this->load->model('register_m');
    $this->load->model('user_m');
    $this->load->model('login_m');
  }

  public function index()
  {
    if ($this->POST('register')) {
    $required = ['username', 'password', 'confirm', 'email','id_fakultas','jalur','nama','id_jenis_kelamin'];
    if (!$this->register_m->required_input($required))
    {
      $this->flashmsg('<i class="fa fa-warning"></i> Data harus diisi secara lengkap', 'warning');
      redirect('register');
      exit;
    }

    if (!$this->register_m->check_username($this->POST('username')))
    {
      $this->flashmsg('<i class="fa fa-warning"></i> Username tersebut telah digunakan', 'warning');
      redirect('register');
      exit;
    }

    if (!$this->register_m->check_password($this->POST('password'), $this->POST('confirm')))
    {
      $this->flashmsg('<i class="fa fa-warning"></i> Password dan password konfirmasi harus sama', 'warning');
      redirect('register');
      exit;
    }

    /* if (!$this->register_m->check_email($this->POST('email')))
    {
      $this->flashmsg('<i class="fa fa-warning"></i> Email tersebut telah digunakan', 'warning');
      redirect('register');
      exit;
    } */
      $data_user = [
        'username' => $this->POST('username'),
        'password' => md5($this->POST('password')),
        'status' => 3,
        'id_role' => 4
      ];
      $data_mhs = [
        'username' => $this->POST('username'),
        'email' => $this->POST('email'),
        'id_fakultas' => $this->POST('id_fakultas'),
        'id_jenis_kelamin' => $this->POST('id_jenis_kelamin'),
        'jalur' =>$this->POST('jalur'),
        'nama' => $this->POST('nama')
      ];
      $this->user_m->insert($data_user);
      $this->mahasiswa_m->insert($data_mhs);
      $this->sosmed_m->insert(['username' => $this->POST('username')]);
      $this->survey_ukt_m->insert(['username' => $this->POST('username')]);
      $this->survey_rohani_m->insert(['username' => $this->POST('username')]);
      $user_data = $this->login_m->get_row(['username' => $this->POST('username')]);
      $user_session = [
        'username'	=> $user_data->username,
        'id_role'	=> $user_data->id_role
      ];
      $this->load->model('kode_aktivasi_m');
      $this->kode_aktivasi_m->insert(['username'=>$this->POST('username')]);
      $this->load->model('data_ortu_m');
      $this->data_ortu_m->insert(['username'=>$this->POST('username')]);
      $this->session->set_userdata($user_session);
      redirect('login');
      exit;
    }
    $this->data['og_site_name'] = 'PMB KM UNSRI';
    $this->data['og_type']	= 'Website';
    $this->data['og_image']	= base_url('logo.png');
    $this->data['og_title'] = 'Daftar | PMB KM UNSRI';
    $this->data['og_description']= 'Sistem Pendataan Online Penerimaan Mahasiswa Baru Unsri 2017 Keluarga Mahasiswa Universitas Sriwijaya';
    $this->data['title'] 	= 'Daftar | PMB KM UNSRI';
    $this->data['title'] = 'PMB | KM UNSRI';
    $this->load->view('sign-up',$this->data);
  }
}

 ?>
