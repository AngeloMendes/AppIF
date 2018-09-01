<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/08/18
 * Time: 16:44
 */

class Login extends CI_Controller{

    function __construct()
    {
        parent::__construct();

    }

    function index(){
        //direcionar para o inicio de tudo

        $data['_view'] = 'login/index';
        $this->load->view('layouts/main', $data);
    }
}