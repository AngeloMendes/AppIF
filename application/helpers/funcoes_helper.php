<?php if (! defined('BASEPATH')) exit('No direct script access allowed'); // linha de proteção ao controller

function get_valor_sessao($valor=NULL, $nome_session="usuario_logado"){
    $ci =& get_instance();
    $ci->load->library('session');
    $get_session=$ci->session->userdata($nome_session);
    if($get_session){
      return $get_session[$valor];
    }
    //var_dump($get_session);
}
 function security($senha){
  return hash("sha256",hash("sha256",hash ( "sha256", $senha )));
}
function nome($num){
  $ci=&get_instance();
  $ci->load->model('Usuario_model');

  $nome= $ci->Usuario_model->get_usuario($num);
  
   return $nome;
}
?>
