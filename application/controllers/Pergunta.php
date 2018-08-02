<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Pergunta extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Pergunta_model');
    } 

    /*
     * Listing of pergunta
     */
    function index()
    {
        $data['pergunta'] = $this->Pergunta_model->get_all_pergunta();
        
        $data['_view'] = 'pergunta/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new pergunta
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'titulo' => $this->input->post('titulo'),
				'descricao' => $this->input->post('descricao'),
				'video' => $this->input->post('video'),
				'imagem' => $this->input->post('imagem'),
				'opcao1' => $this->input->post('opcao1'),
				'opcao2' => $this->input->post('opcao2'),
				'opcao3' => $this->input->post('opcao3'),
				'opcao4' => $this->input->post('opcao4'),
				'idLicao' => $this->input->post('idLicao'),
				'opcaoCorreta' => $this->input->post('opcaoCorreta'),
				'caixaTexto' => $this->input->post('caixaTexto'),
            );
            
            $pergunta_id = $this->Pergunta_model->add_pergunta($params);
            redirect('pergunta/index');
        }
        else
        {            
            $data['_view'] = 'pergunta/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a pergunta
     */
    function edit($idPergunta)
    {   
        // check if the pergunta exists before trying to edit it
        $data['Pergunta'] = $this->Pergunta_model->get_pergunta($idPergunta);
        
        if(isset($data['Pergunta']['idPergunta']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'titulo' => $this->input->post('titulo'),
					'descricao' => $this->input->post('descricao'),
					'video' => $this->input->post('video'),
					'imagem' => $this->input->post('imagem'),
					'opcao1' => $this->input->post('opcao1'),
					'opcao2' => $this->input->post('opcao2'),
					'opcao3' => $this->input->post('opcao3'),
					'opcao4' => $this->input->post('opcao4'),
					'idLicao' => $this->input->post('idLicao'),
					'opcaoCorreta' => $this->input->post('opcaoCorreta'),
					'caixaTexto' => $this->input->post('caixaTexto'),
                );

                $this->Pergunta_model->update_pergunta($idPergunta,$params);
                redirect('pergunta/index');
            }
            else
            {
                $data['_view'] = 'pergunta/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The pergunta you are trying to edit does not exist.');
    } 

    /*
     * Deleting pergunta
     */
    function remove($idPergunta)
    {
        $pergunta = $this->Pergunta_model->get_pergunta($idPergunta);

        // check if the pergunta exists before trying to delete it
        if(isset($pergunta['idPergunta']))
        {
            $this->Pergunta_model->delete_pergunta($idPergunta);
            redirect('pergunta/index');
        }
        else
            show_error('The pergunta you are trying to delete does not exist.');
    }
    function iniciarLicao($cont){
        $data['perguntas'] ="buscar todas perguntas por licao";
        $data['cont']=$cont++;
        $data['_view'] = 'pergunta/iniciarLicao';
        $this->load->view('layouts/main',$data);
    }

}
