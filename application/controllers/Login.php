<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 * @author Ari Susanto
 */
class Login extends MY_Controller
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
          redirect('admin-ormawa');
          break;
        case 4:
          redirect('mahasiswa');
          break;
      }
      exit;
    }
    $this->load->model('user_m');
    $this->load->model('login_m');
  }

  public function index()
  {
    if ($this->POST('login')) {
      $required = ['username', 'password'];
      if (!$this->login_m->required_input($required))
      {
        $this->flashmsg('Data harus diisi secara lengkap', 'warning');
        redirect('login');
        exit;
      }
			$this->data = [
				'username'	=> $this->POST('username'),
				'password'	=> md5($this->POST('password'))
			];
      if ($this->login_m->login($this->data)) {
        redirect('login');
      } else {
        $this->flashmsg('<i class="fa fa-warning"></i> Username atau password salah!', 'danger');
        redirect('login');
      }
			exit;
    }

    $this->data['og_site_name'] = 'PMB KM UNSRI';
    $this->data['og_type']	= 'Website';
    $this->data['og_image']	= base_url('logo.png');
    $this->data['og_title'] = 'Login | PMB KM UNSRI';
    $this->data['og_description']= 'Sistem Pendataan Online Penerimaan Mahasiswa Baru Unsri 2017 Keluarga Mahasiswa Universitas Sriwijaya';
    $this->data['title'] 	= 'Login | PMB KM UNSRI';
    $this->load->view('sign-in',$this->data);
  }
}

 ?>
