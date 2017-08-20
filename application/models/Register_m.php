<?php
/**
 * @author Ari Susanto
 */
class Register_m extends MY_Model
{

  function __construct()
  {
    parent::__construct();
    $this->data['primary_key'] = 'username';
    $this->data['table_name'] = 'user';
  }

  public function check_username($username)
  {
    $check_username = $this->get(['username' => $username]);
    return count($check_username) > 0 ? FALSE : TRUE;
  }

  public function check_email($email)
  {
    /* $this->load->model('profile_m');
    $check_email = $this->profile_m->get(['email' => $email]);
    return count($check_email) > 0 ? FALSE : TRUE; */
  }

  public function check_password($password, $confirmation_password)
  {
    return $password === $confirmation_password;
  }

}
?>
