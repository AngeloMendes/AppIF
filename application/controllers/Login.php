<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 16/08/18
 * Time: 16:44
 */

class Login extends CI_Controller
{

    function __construct()
    {
        parent::__construct();

    }

    function index()
    {
        $data['msg'] = 'Bem-vindo';
        $data['_view'] = 'login/index';
        $this->load->view('layouts/main', $data);
    }
}