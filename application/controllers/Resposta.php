<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Resposta extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Resposta_model');
        $this->load->model('Usuario_model');
        $this->load->model('Progresso_model');

    }

    /*
     * Listing of ranking
     */
    function index($respostaCorreta,$perguntas,$cont)
    {
        //$data['resposta'] = $this->Resposta_model->get_all_resposta();
        $data['ranking'] = $this->Usuario_model->get_ranking();
        $data['respostaCorreta']=$respostaCorreta;
        $data['perguntas']=$perguntas;
        $data['cont']=$cont;
        $data['_view'] = 'licao/ranking';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new resposta
     */
    function add($cont)
    {


        $perguntas = json_decode(htmlspecialchars_decode($this->input->post('perguntas')));
        $pergunta_atual=$perguntas[$cont];

        if (isset($_POST) && count($_POST) > 0) {

            //$t = time();


            $data_inicio = new DateTime($this->input->post('data'));

            $data_atual = new DateTime();
            $tempo = $data_inicio->diff($data_atual)->s;

            //$tempo = $data_inicio->diff(new DateTime(date("Y-m-d\TH:i:sP", $t)))->s;

            $idUsuario=$this->session->userdata['usuario_logado'];
            $respostaCorreta = $pergunta_atual->opcaoCorreta;
            $respostaUsuario = $this->input->post('respostaUsuario');
            $idLicao=$pergunta_atual->idLicao;
            $idPergunta=$pergunta_atual->idPergunta;

            $pontuacao = 0;
            if (strcmp($respostaUsuario, $respostaCorreta) == 0) {
                $pontuacao = round($tempo * 100);
            }
            #SALVAR PROGRESSO
            $this->salvarProgresso($idUsuario,$idLicao,$idPergunta,$pontuacao);
            $this->editUsuario($idUsuario,$pontuacao);//atualiza pontuação do usuario

            $params = array(
                'idUsuario' => $idUsuario,
                'respostaCorreta' => $respostaCorreta,
                'respostaUsuario' => $respostaUsuario,
            );

            $resposta_id = $this->Resposta_model->add_resposta($params);


            $this->index($respostaCorreta,$perguntas,$cont);//mostrar ranking

        } else {
            //$data['_view'] = 'resposta/add';
            //$this->load->view('layouts/main', $data);
            //$this->index("");
        }
    }
    /*
     * salvar progresso do usuario
     * pontuacao da pergunta respondida
     */
    function salvarProgresso($idUsuario,$idLicao,$idPergunta,$pontuacaoAtual){
        $params = array(
            'idUsuario' => $idUsuario,
            'idLicao' => $idLicao,
            'idPergunta' => $idPergunta,
            'pontuacaoAtual' => $pontuacaoAtual,
        );

        $progresso_id = $this->Progresso_model->add_progresso($params);
        return;
    }

    function editUsuario($idUsuario,$pontos)
    {
        if($pontos==0) return;

        // check if the usuario exists before trying to edit it
        $data['usuario'] = $this->Usuario_model->get_usuario($idUsuario);
        $pontuacaoAtual =$data['usuario']['pontos'];

        if(isset($data['usuario']['idUsuario']))
        {
            $params = array(
                'pontos' => $pontos + $pontuacaoAtual,
            );

            $this->Usuario_model->update_usuario($idUsuario,$params);
            return;

        }
        else
            show_error('The usuario you are trying to edit does not exist.');
    }


    /*
     * Editing a resposta
     */
    function edit($idResposta)
    {
        // check if the resposta exists before trying to edit it
        $data['Resposta'] = $this->Resposta_model->get_resposta($idResposta);

        if (isset($data['Resposta']['idResposta'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'idUsuario' => $this->input->post('idUsuario'),
                    'respostaCorreta' => $this->input->post('respostaCorreta'),
                    'respostaUsuario' => $this->input->post('respostaUsuario'),
                );

                $this->Resposta_model->update_resposta($idResposta, $params);
                redirect('resposta/index');
            } else {
                $data['_view'] = 'resposta/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The resposta you are trying to edit does not exist.');
    }

    /*
     * Deleting resposta
     */
    function remove($idResposta)
    {
        $resposta = $this->Resposta_model->get_resposta($idResposta);

        // check if the resposta exists before trying to delete it
        if (isset($resposta['idResposta'])) {
            $this->Resposta_model->delete_resposta($idResposta);
            redirect('resposta/index');
        } else
            show_error('The resposta you are trying to delete does not exist.');
    }

}
