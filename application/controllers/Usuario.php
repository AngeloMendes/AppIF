<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Usuario extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Usuario_model');
    }

    /*
     * Listing of usuario
     */
    function index()
    {
        $data['usuario'] = $this->Usuario_model->get_all_usuario();

        $data['_view'] = 'usuario/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Login
     */
    function login(){

        if(isset($_POST['cadastrar'])){
            $this->add();
        }
        $nome=$this->input->post('nome');
        if(!empty($nome)){
            $usuario = $this->Usuario_model->get_usuario_nome($nome);
            if(isset($usuario['idUsuario'])){
                $dadosSessao = array("usuario_logado"=>$usuario['idUsuario'], "tipo"=>$usuario['tipo']);
                $this->session->set_userdata($dadosSessao);
                redirect('licao/index');

            }else{
                //$this->add();
                $data['_view'] = 'login/index';
                $data['msg'] = "O nome está incorreto";
                $this->load->view('layouts/main', $data);

            }
        }else{
            $data['_view'] = 'login/index';
            $data['msg'] = "O nome não pode ser vazio!";
            $this->load->view('layouts/main', $data);
        }


    }

    /*
     * Adding a new usuario
     */
    function add()
    {
        $nome=$this->input->post('nome');
        if(empty($nome)){
            $data['_view'] = 'login/index';
            $data['msg'] = "O nome não pode ser vazio!";
            $this->load->view('layouts/main', $data);
            return;
        }
        $usuario = $this->Usuario_model->get_usuario_nome($nome);
        if (!isset($usuario['idUsuario'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'nome' => $nome,
                    'pontos' => 0,
                    'tipo'=>'aluno',
                    'turma'=>$this->input->post('turma')
                );
                $idUsuario = $this->Usuario_model->add_usuario($params);
                $dadosSessao = array("usuario_logado"=>$idUsuario, "tipo"=>"aluno");
                $this->session->set_userdata($dadosSessao);
                redirect('licao/index');
            } else {
                $data['_view'] = 'login/index';
                $data['msg'] = "O nome não pode ser vazio!";
                $this->load->view('layouts/main', $data);
            }
        }else {
            $data['_view'] = 'login/index';
            $data['msg'] = "Este nome já está utilizado";
            $this->load->view('layouts/main', $data);
        }

    }

    /*
     * Editing a usuario
     */
    function edit($idUsuario, $pontos)
    {
        if ($pontos == 0) return;

        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->Usuario_model->get_usuario($idUsuario);
        $pontuacaoAtual = $data['usuario']['pontos'];

        if (isset($data['usuario']['idUsuario'])) {
            //if(isset($_POST) && count($_POST) > 0)
            //{
            $params = array(

                'pontos' => $pontos + $pontuacaoAtual,
            );

            $this->Usuario_model->update_usuario($idUsuario, $params);
            return;
            //redirect('usuario/index');
            /*}
            else
            {
                $data['_view'] = 'usuario/edit';
                $this->load->view('layouts/main',$data);
            }*/
        } else
            show_error('The usuario you are trying to edit does not exist.');
    }

    /*
     * Deleting usuario
     */
    function remove($idUsuario)
    {
        $usuario = $this->Usuario_model->get_usuario($idUsuario);

        // check if the usuario exists before trying to delete it
        if (isset($usuario['idUsuario'])) {
            $this->Usuario_model->delete_usuario($idUsuario);
            redirect('usuario/index');
        } else
            show_error('The usuario you are trying to delete does not exist.');
    }

}
