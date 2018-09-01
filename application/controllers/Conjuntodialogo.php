<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Conjuntodialogo extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Conjuntodialogo_model');
    } 

    /*
     * Listing of conjuntodialogo
     */
    function index()
    {
        $data['conjuntodialogo'] = $this->Conjuntodialogo_model->get_all_conjuntodialogo();
        
        $data['_view'] = 'conjuntodialogo/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new conjuntodialogo
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {


            $params = array(
				'idDialogo' => $this->input->post('idDialogo'),
				'idDialogoFrases' => $this->input->post('idDialogoFrases'),
            );
            
            $conjuntodialogo_id = $this->Conjuntodialogo_model->add_conjuntodialogo($params);
            redirect('conjuntodialogo/index');
        }
        else
        {            
            $data['_view'] = 'dialogo/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a conjuntodialogo
     */
    function edit($idConjuntoDialogo)
    {   
        // check if the conjuntodialogo exists before trying to edit it
        $data['conjuntodialogo'] = $this->Conjuntodialogo_model->get_conjuntodialogo($idConjuntoDialogo);
        
        if(isset($data['conjuntodialogo']['idConjuntoDialogo']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'idDialogo' => $this->input->post('idDialogo'),
					'idDialogoFrases' => $this->input->post('idDialogoFrases'),
                );

                $this->Conjuntodialogo_model->update_conjuntodialogo($idConjuntoDialogo,$params);            
                redirect('conjuntodialogo/index');
            }
            else
            {
                $data['_view'] = 'conjuntodialogo/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The conjuntodialogo you are trying to edit does not exist.');
    } 

    /*
     * Deleting conjuntodialogo
     */
    function remove($idConjuntoDialogo)
    {
        $conjuntodialogo = $this->Conjuntodialogo_model->get_conjuntodialogo($idConjuntoDialogo);

        // check if the conjuntodialogo exists before trying to delete it
        if(isset($conjuntodialogo['idConjuntoDialogo']))
        {
            $this->Conjuntodialogo_model->delete_conjuntodialogo($idConjuntoDialogo);
            redirect('conjuntodialogo/index');
        }
        else
            show_error('The conjuntodialogo you are trying to delete does not exist.');
    }
    
}
