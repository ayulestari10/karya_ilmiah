<?php
/**
 * @author Ari Susanto
 */
class Login_m extends MY_Model
{

  function __construct()
  {
    parent::__construct();
    $this->data['primary_key'] = 'username';
    $this->data['table_name'] = 'user';
  }

  public function login($data)
{
  $result = $this->get_row($data);
  if (isset($result))
  {
    $this->session->set_userdata([
      'username'	=> $result->username,
      'id_role'	=> $result->id_role
    ]);
    return TRUE;
  }

  return FALSE;
}

}

 ?>
