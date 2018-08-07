<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */

class Licao extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Licao_model');
        $this->load->library('upload');
    }

    /*
     * Listing of licao
     */
    function index()
    {
        $data['licao'] = $this->Licao_model->get_all_licao();

        $data['_view'] = 'licao/index';
        $this->load->view('layouts/main', $data);
    }

    /*
     * Adding a new licao
     */
    function add()
    {
        if (isset($_POST) && count($_POST) > 0) {
            $titulo = $this->input->post('titulo');
            if(!empty($_FILES['imagem']['name'])){
                $imagem = $_FILES['imagem'];
                print_r($imagem);

                $extensaoImagem = explode('.', $imagem['name']);
                $extensaoImagem = end($extensaoImagem);

                $caminhoImagem = base_url('application/midias/imagens/licoes/') . str_replace(" ", "", $titulo) .'.'.$extensaoImagem;
                $configuracaoImagem = array(
                    'upload_path' => './application/midias/imagens/licoes/',
                    'allowed_types' => 'jpg|png|jpeg|gif',
                    'file_name' => str_replace(" ", "", $titulo) . '.' . $extensaoImagem,
                    'max_size' => '500000',
                    'max_width'=> '4096',
                    'max_height' => '4096'
                );

                $this->upload->initialize($configuracaoImagem);
                if(!$this->upload->do_upload('imagem')){
                    ///$caminhoImagem=$this->upload->display_errors();
                    $caminhoImagem='error';
                }
            }else{
                $caminhoImagem="";
            }

            if(!empty($_FILES['video']['name'])){
                $video = $_FILES['video'];
                $extensaoVideo = explode('.', $video['name']);
                $extensaoVideo = end($extensaoVideo);
                $caminhoVideo = base_url('application/midias/videos/licoes/') . str_replace(" ", "", $titulo).'.' . $extensaoVideo;
                $configuracaoVideo = array(
                    'upload_path' => './application/midias/videos/licoes/',
                    'allowed_types' => 'FLV|AVI|WMV|MOV|RMVB|MPEG|MKV|mp4|3gp|MPEG',
                    'file_name' => str_replace(" ", "", $titulo) . '.' . $extensaoVideo,
                    'max_size' => '500000000'
                );
                $this->upload->initialize($configuracaoVideo);
                if(!$this->upload->do_upload('video')){
                    //$caminhoVideo=$this->upload->display_errors();
                    $caminhoVideo='error';
                }
            }else{
                $caminhoVideo="";
            }

            $params = array(
                'titulo' => $titulo,
                'imagem' => $caminhoImagem,
                'video' => $caminhoVideo,
                'descricao' => $this->input->post('descricao'),
            );

            $licao_id = $this->Licao_model->add_licao($params);
            redirect('licao/index');
        } else {
            $data['_view'] = 'licao/add';
            $this->load->view('layouts/main', $data);
        }
    }

    /*
     * Editing a licao
     */
    function edit($idLicao)
    {
        // check if the licao exists before trying to edit it
        $data['licao'] = $this->Licao_model->get_licao($idLicao);

        if (isset($data['licao']['idLicao'])) {
            if (isset($_POST) && count($_POST) > 0) {
                $params = array(
                    'titulo' => $this->input->post('titulo'),
                    'imagem' => $this->input->post('imagem'),
                    'video' => $this->input->post('video'),
                    'descricao' => $this->input->post('descricao'),
                );

                $this->Licao_model->update_licao($idLicao, $params);
                redirect('licao/index');
            } else {
                $data['_view'] = 'licao/edit';
                $this->load->view('layouts/main', $data);
            }
        } else
            show_error('The licao you are trying to edit does not exist.');
    }

    /*
     * Deleting licao
     */
    function remove($idLicao)
    {
        $licao = $this->Licao_model->get_licao($idLicao);

        // check if the licao exists before trying to delete it
        if (isset($licao['idLicao'])) {
            $this->Licao_model->delete_licao($idLicao);
            redirect('licao/index');
        } else
            show_error('The licao you are trying to delete does not exist.');
    }

}
