<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Progresso extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Progresso_model');
    } 

    /*
     * Listing of progresso
     */
    function index()
    {
        $data['progresso'] = $this->Progresso_model->get_all_progresso();
        
        $data['_view'] = 'progresso/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new progresso
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'idUsuario' => $this->input->post('idUsuario'),
				'idLicao' => $this->input->post('idLicao'),
				'idPergunta' => $this->input->post('idPergunta'),
            );
            
            $progresso_id = $this->Progresso_model->add_progresso($params);
            redirect('progresso/index');
        }
        else
        {            
            $data['_view'] = 'progresso/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a progresso
     */
    function edit($idProgresso)
    {   
        // check if the progresso exists before trying to edit it
        $data['progresso'] = $this->Progresso_model->get_progresso($idProgresso);
        
        if(isset($data['progresso']['idProgresso']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'idUsuario' => $this->input->post('idUsuario'),
					'idLicao' => $this->input->post('idLicao'),
					'idPergunta' => $this->input->post('idPergunta'),
                );

                $this->Progresso_model->update_progresso($idProgresso,$params);            
                redirect('progresso/index');
            }
            else
            {
                $data['_view'] = 'progresso/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The progresso you are trying to edit does not exist.');
    } 

    /*
     * Deleting progresso
     */
    function remove($idProgresso)
    {
        $progresso = $this->Progresso_model->get_progresso($idProgresso);

        // check if the progresso exists before trying to delete it
        if(isset($progresso['idProgresso']))
        {
            $this->Progresso_model->delete_progresso($idProgresso);
            redirect('progresso/index');
        }
        else
            show_error('The progresso you are trying to delete does not exist.');
    }
    
}
