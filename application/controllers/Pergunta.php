<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Pergunta extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
        $this->load->model('Pergunta_model');
        $this->load->model('Licao_model');
        $this->load->library('upload');


    }

    /*
     * Listing of pergunta
     */
    function index()
    {
        $data['pergunta'] = $this->Pergunta_model->get_all_pergunta();

        $data['_view'] = 'pergunta/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new pergunta
     */
    function add($idLicao)
    {
        if (isset($_POST) && count($_POST) > 0) {
            $titulo = $this->input->post('titulo');
            if (!empty($_FILES['imagem']['name'])) {
                $imagem = $_FILES['imagem'];

                $extensaoImagem = explode('.', $imagem['name']);
                $extensaoImagem = end($extensaoImagem);

                $caminhoImagem = base_url('application/midias/imagens/licoes/') . str_replace(" ", "", $titulo) . '.' . $extensaoImagem;
                /*$configuracaoImagem = array(
                    'upload_path' => './application/midias/imagens/licoes/',
                    'allowed_types' => 'jpg|png|jpeg|gif',
                    'file_name' => str_replace(" ", "", $titulo) . '.' . $extensaoImagem,
                    'max_size' => '500000',
                    'max_width' => '4096',
                    'max_height' => '4096'
                );*/
                $configuracaoImagem = array(
                    'upload_path' => './midias/imagens/perguntas/',
                    'allowed_types' => 'jpg,png,jpeg,gif,tiff',
                    'file_name' => str_replace(array(' ', '?', '!', '.', ':'),
                            array('', '', '', '', ''), $titulo) . '.' . $extensaoImagem,
                    'max_size' => '50000'
                );

                $this->upload->initialize($configuracaoImagem);
                if (!$this->upload->do_upload('imagem')) {
                    ///$caminhoImagem=$this->upload->display_errors();
                    $caminhoImagem = 'error';
                }
            } else {
                $caminhoImagem = "";
            }


            if (!empty($_FILES['video']['name'])) {
                $video = $_FILES['video'];
                $extensaoVideo = explode('.', $video['name']);
                $extensaoVideo = end($extensaoVideo);
                $caminhoVideo = base_url('application/midias/videos/licoes/') . str_replace(" ", "", $titulo) . '.' . $extensaoVideo;
                /*$configuracaoVideo = array(
                    'upload_path' => './application/midias/videos/licoes/',
                    'allowed_types' => 'FLV|AVI|WMV|MOV|RMVB|MPEG|MKV|mp4|3gp|MPEG',
                    'file_name' => str_replace(" ", "", $titulo) . '.' . $extensaoVideo,
                    'max_size' => '500000000'
                );*/
                $configuracaoVideo = array(
                    'upload_path' => './midias/videos/perguntas/',
                    'allowed_types' => 'FLV, AVI, WMV, MOV, RMVB, MPEG, MKV,mp4',
                    'file_name' => str_replace(array(' ', '?', '!', '.', ':'),
                            array('', '', '', '', ''), $titulo) . '.' . $extensaoVideo,
                    'max_size' => '500000'
                );
                $this->upload->initialize($configuracaoVideo);
                if (!$this->upload->do_upload('video')) {
                    //$caminhoVideo=$this->upload->display_errors();
                    $caminhoVideo = 'error';
                }
            } else {
                $caminhoVideo = "";
            }

            $params = array(
                'titulo' => $titulo,
                'descricao' => $this->input->post('descricao'),
                'video' => $caminhoVideo,
                'imagem' => $caminhoImagem,
                'opcao1' => $this->input->post('opcao1'),
                'opcao2' => $this->input->post('opcao2'),
                'opcao3' => $this->input->post('opcao3'),
                'opcao4' => $this->input->post('opcao4'),
                'opcao5' => $this->input->post('opcao5'),
                'idLicao' => $this->input->post('idLicao'),
                'opcaoCorreta' => $this->input->post('opcaoCorreta'),
                'caixaTexto' => $this->input->post('caixaTexto'),
                'tipo'=>'multiplaEscolha',
                'ordem'=>$this->Licao_model->setOrdem($idLicao),
            );
            /*$configuracaoImagem = array(
                'upload_path' => './midias/imagens/perguntas/',
                'allowed_types' => 'jpg,png,jpeg,gif,tiff',
                'file_name' => str_replace(array(' ', '?', '!', '.', ':'),
                        array('', '', '', '', ''), $titulo) . '.' . $extensaoImagem,
                'max_size' => '50000'
            );
            $configuracaoVideo = array(
                'upload_path' => './midias/videos/perguntas/',
                'allowed_types' => 'FLV, AVI, WMV, MOV, RMVB, MPEG, MKV,mp4',
                'file_name' => str_replace(array(' ', '?', '!', '.', ':'),
                        array('', '', '', '', ''), $titulo) . '.' . $extensaoVideo,
                'max_size' => '500000'
            );
            $this->load->library('upload');
            $this->upload->initialize($configuracaoImagem);
            $this->upload->initialize($configuracaoVideo);
            $this->upload->do_upload('imagem');
            $this->upload->do_upload('video');*/


            $pergunta_id = $this->Pergunta_model->add_pergunta($params);
            redirect('pergunta/index');
        } else {
            $data['_view'] = 'pergunta/add';
            $data['idLicao'] = $idLicao;
            $data['licoes'] = $this->Licao_model->get_all_licao();
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a pergunta
     */
    function edit($idPergunta)
    {
        // check if the pergunta exists before trying to edit it
        $data['Pergunta'] = $this->Pergunta_model->get_pergunta($idPergunta);

        if (isset($data['Pergunta']['idPergunta'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'titulo' => $this->input->post('titulo'),
                    'descricao' => $this->input->post('descricao'),
                    'video' => $this->input->post('video'),
                    'imagem' => $this->input->post('imagem'),
                    'opcao1' => $this->input->post('opcao1'),
                    'opcao2' => $this->input->post('opcao2'),
                    'opcao3' => $this->input->post('opcao3'),
                    'opcao4' => $this->input->post('opcao4'),
                    'opcao5' => $this->input->post('opcao5'),
                    'idLicao' => $this->input->post('idLicao'),
                    'opcaoCorreta' => $this->input->post('opcaoCorreta'),
                    'caixaTexto' => $this->input->post('caixaTexto'),

                );

                $this->Pergunta_model->update_pergunta($idPergunta, $params);
                redirect('pergunta/index');
            } else {
                $data['_view'] = 'pergunta/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The pergunta you are trying to edit does not exist.');
    }

    /*
     * Deleting pergunta
     */
    function remove($idPergunta)
    {
        $pergunta = $this->Pergunta_model->get_pergunta($idPergunta);

        // check if the pergunta exists before trying to delete it
        if (isset($pergunta['idPergunta'])) {
            $this->Pergunta_model->delete_pergunta($idPergunta);
            redirect('pergunta/index');
        } else
            show_error('The pergunta you are trying to delete does not exist.');
    }

    function iniciarLicao($idLicao)
    {
        //buscar todas as perguntas de uma licao
        //chamar a view passar o 0 como primeiro indice do vetor de perguntas
        //passar o tamanho do vetor
        $data['perguntas'] = $this->Pergunta_model->get_perguntas_licao($idLicao);
        $data['pergunta'] = (object) $data['perguntas'][0];
        $data['cont'] = 0;
        $data['_view'] = 'pergunta/iniciarLicao';
        $this->load->view('layouts/main', $data);
    }

    function proximaPergunta($cont)
    {
        $perguntas = json_decode(htmlspecialchars_decode($this->input->post('perguntas')));
        $data['pergunta'] = $perguntas[$cont];
        $data['cont'] = $cont;
        $data['perguntas'] = $perguntas;
        $data['_view'] = 'pergunta/iniciarLicao';
        $this->load->view('layouts/main', $data);
    }

    function selectPergunta ($idLicao,$ordem){
        $ordem++;
        $pergunta = (object) $this->Licao_model->getProxPergunta($idLicao,$ordem);

        if($pergunta and $pergunta->tipo!='pergunta') {
            $data[$pergunta->tipo]= $pergunta;
            $data['_view'] = $pergunta->tipo . '/'. $pergunta->tipo . 'Responder';
            $this->load->view('layouts/main', $data);
        }
        elseif ($pergunta and $pergunta->tipo=='pergunta'){
            $data['pergunta']=$pergunta;
            $data['_view'] = 'pergunta/iniciarLicao';
            $this->load->view('layouts/main', $data);
        }
        else{
            //redirecionar para ranking final
            redirect('resposta/index/' . null.'/'. null);
        }

    }


}
