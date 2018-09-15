<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Imagemfrase extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Imagemfrase_model');
        $this->load->model('Licao_model');
        $this->load->library('upload');
    } 

    /*
     * Listing of imagemfrase
     */
    function index()
    {
        $data['imagemfrase'] = $this->Imagemfrase_model->get_all_imagemfrase();
        
        $data['_view'] = 'imagemfrase/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new imagemfrase
     */
    function add($idLicao)
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {
            $titulo = $this->input->post('titulo');
            $opcaoCorreta=$this->input->post('fraseCorreta');
            if (!empty($_FILES['imagem']['name'])) {
                $imagem = $_FILES['imagem'];

                $extensaoImagem = explode('.', $imagem['name']);
                $extensaoImagem = end($extensaoImagem);

                $caminhoImagem = base_url('application/midias/imagens/perguntas/') . str_replace(array(' ', '?', '!', '.', ':'),
                        array('', '', '', '', ''), $titulo)  . $opcaoCorreta.'.'  . $extensaoImagem;
                /*$configuracaoImagem = array(
                    'upload_path' => './application/midias/imagens/licoes/',
                    'allowed_types' => 'jpg|png|jpeg|gif',
                    'file_name' => str_replace(" ", "", $titulo) . '.' . $extensaoImagem,
                    'max_size' => '500000',
                    'max_width' => '4096',
                    'max_height' => '4096'
                );*/
                $configuracaoImagem = array(
                    'upload_path' => './application/midias/imagens/perguntas/',
                    'allowed_types' => 'jpg|png|jpeg|gif|tiff',
                    'file_name' => str_replace(array(' ', '?', '!', '.', ':'),
                            array('', '', '', '', ''), $titulo)  . $opcaoCorreta. '.'.$extensaoImagem,
                    'max_size' => '500000',
                    'max_width' => '4096',
                    'max_height' => '4096'
                );

                $this->upload->initialize($configuracaoImagem);
                if (!$this->upload->do_upload('imagem')) {
                    //$caminhoImagem=$this->upload->display_errors();
                    $caminhoImagem = 'error';
                }
            } else {
                $caminhoImagem = "";
            }


            if (!empty($_FILES['video']['name'])) {
                $video = $_FILES['video'];
                $extensaoVideo = explode('.', $video['name']);
                $extensaoVideo = end($extensaoVideo);
                $caminhoVideo = base_url('application/midias/videos/perguntas/') . str_replace(" ", "", $titulo) . '.' . $extensaoVideo;
                /*$configuracaoVideo = array(
                    'upload_path' => './application/midias/videos/licoes/',
                    'allowed_types' => 'FLV|AVI|WMV|MOV|RMVB|MPEG|MKV|mp4|3gp|MPEG',
                    'file_name' => str_replace(" ", "", $titulo) . '.' . $extensaoVideo,
                    'max_size' => '500000000'
                );*/
                $configuracaoVideo = array(
                    'upload_path' => './application/midias/videos/perguntas/',
                    'allowed_types' => 'FLV| AVI| WMV| MOV| RMVB| MPEG| MKV|mp4|MP4',
                    'file_name' => str_replace(array(' ', '?', '!', '.', ':'),
                            array('', '', '', '', ''), $titulo) . '.' . $extensaoVideo,
                    'max_size' => '50000000'
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
				'imagem' => $caminhoImagem,
				'video' => $caminhoVideo,
				'descricao' => $this->input->post('descricao'),
				'frase1' => $this->input->post('frase1'),
				'frase2' => $this->input->post('frase2'),
				'frase3' => $this->input->post('frase3'),
				'frase4' => $this->input->post('frase4'),
				'frase5' => $this->input->post('frase5'),
				'frase6' => $this->input->post('frase6'),
				'frase7' => $this->input->post('frase7'),
				'frase8' => $this->input->post('frase8'),
				'fraseCorreta' => $this->input->post('fraseCorreta'),
				'idLicao' => $idLicao,
				'ordem' => $this->Licao_model->setOrdem($idLicao),
                'tipo'=>'imagemfrase',
            );
            
            $imagemfrase_id = $this->Imagemfrase_model->add_imagemfrase($params);
            redirect('licao/index');
        }
        else
        {
            $data['idLicao']=$idLicao;
            $data['_view'] = 'imagemfrase/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a imagemfrase
     */
    function edit($idImagemFrase)
    {   
        // check if the imagemfrase exists before trying to edit it
        $data['imagemfrase'] = $this->Imagemfrase_model->get_imagemfrase($idImagemFrase);
        
        if(isset($data['imagemfrase']['idImagemFrase']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'titulo' => $this->input->post('titulo'),
					'imagem' => $this->input->post('imagem'),
					'video' => $this->input->post('video'),
					'descricao' => $this->input->post('descricao'),
					'frase1' => $this->input->post('frase1'),
					'frase2' => $this->input->post('frase2'),
					'frase3' => $this->input->post('frase3'),
					'frase4' => $this->input->post('frase4'),
					'frase5' => $this->input->post('frase5'),
					'frase6' => $this->input->post('frase6'),
					'frase7' => $this->input->post('frase7'),
					'frase8' => $this->input->post('frase8'),
					'fraseCorreta' => $this->input->post('fraseCorreta'),
					'idLicao' => $this->input->post('idLicao'),
					'ordem' => $this->Licao_model->setOrdem($this->input->post('idLicao')),
                );

                $this->Imagemfrase_model->update_imagemfrase($idImagemFrase,$params);            
                redirect('imagemfrase/index');
            }
            else
            {
                $data['_view'] = 'imagemfrase/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The imagemfrase you are trying to edit does not exist.');
    } 

    /*
     * Deleting imagemfrase
     */
    function remove($idImagemFrase)
    {
        $imagemfrase = $this->Imagemfrase_model->get_imagemfrase($idImagemFrase);

        // check if the imagemfrase exists before trying to delete it
        if(isset($imagemfrase['idImagemFrase']))
        {
            $this->Imagemfrase_model->delete_imagemfrase($idImagemFrase);
            redirect('imagemfrase/index');
        }
        else
            show_error('The imagemfrase you are trying to delete does not exist.');
    }
    
}
