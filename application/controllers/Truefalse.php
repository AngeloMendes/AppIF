<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Truefalse extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Truefalse_model');
    } 

    /*
     * Listing of truefalse
     */
    function index()
    {
        $data['truefalse'] = $this->Truefalse_model->get_all_truefalse();
        
        $data['_view'] = 'truefalse/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new truefalse
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'titulo' => $this->input->post('titulo'),
				'imagem' => $this->input->post('imagem'),
				'video' => $this->input->post('video'),
				'ordem' => $this->input->post('ordem'),
				'idLicao' => $this->input->post('idLicao'),
				'descricao' => $this->input->post('descricao'),
            );
            
            $truefalse_id = $this->Truefalse_model->add_truefalse($params);
            redirect('truefalse/index');
        }
        else
        {            
            $data['_view'] = 'truefalse/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a truefalse
     */
    function edit($idTrueFalse)
    {   
        // check if the truefalse exists before trying to edit it
        $data['truefalse'] = $this->Truefalse_model->get_truefalse($idTrueFalse);
        
        if(isset($data['truefalse']['idTrueFalse']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'titulo' => $this->input->post('titulo'),
					'imagem' => $this->input->post('imagem'),
					'video' => $this->input->post('video'),
					'ordem' => $this->input->post('ordem'),
					'idLicao' => $this->input->post('idLicao'),
					'descricao' => $this->input->post('descricao'),
                );

                $this->Truefalse_model->update_truefalse($idTrueFalse,$params);            
                redirect('truefalse/index');
            }
            else
            {
                $data['_view'] = 'truefalse/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The truefalse you are trying to edit does not exist.');
    } 

    /*
     * Deleting truefalse
     */
    function remove($idTrueFalse)
    {
        $truefalse = $this->Truefalse_model->get_truefalse($idTrueFalse);

        // check if the truefalse exists before trying to delete it
        if(isset($truefalse['idTrueFalse']))
        {
            $this->Truefalse_model->delete_truefalse($idTrueFalse);
            redirect('truefalse/index');
        }
        else
            show_error('The truefalse you are trying to delete does not exist.');
    }
    
}
