<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dialogofrase extends CI_Controller{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dialogofrase_model');
    } 

    /*
     * Listing of dialogofrases
     */
    function index()
    {
        $data['dialogofrases'] = $this->Dialogofrase_model->get_all_dialogofrases();
        
        $data['_view'] = 'dialogofrase/index';
        $this->load->view('layouts/main',$data);
    }

    /*
     * Adding a new dialogofrase
     */
    function add()
    {   
        if(isset($_POST) && count($_POST) > 0)     
        {   
            $params = array(
				'descricao' => $this->input->post('descricao'),
				'frase' => $this->input->post('frase'),
				'opcao1' => $this->input->post('opcao1'),
				'opcao2' => $this->input->post('opcao2'),
				'opcao3' => $this->input->post('opcao3'),
				'opcaoCorreta' => $this->input->post('opcaoCorreta'),
            );
            
            $dialogofrase_id = $this->Dialogofrase_model->add_dialogofrase($params);
            redirect('dialogofrase/index');
        }
        else
        {            
            $data['_view'] = 'dialogofrase/add';
            $this->load->view('layouts/main',$data);
        }
    }  

    /*
     * Editing a dialogofrase
     */
    function edit($idDialogoFrases)
    {   
        // check if the dialogofrase exists before trying to edit it
        $data['dialogofrase'] = $this->Dialogofrase_model->get_dialogofrase($idDialogoFrases);
        
        if(isset($data['dialogofrase']['idDialogoFrases']))
        {
            if(isset($_POST) && count($_POST) > 0)     
            {   
                $params = array(
					'descricao' => $this->input->post('descricao'),
					'frase' => $this->input->post('frase'),
					'opcao1' => $this->input->post('opcao1'),
					'opcao2' => $this->input->post('opcao2'),
					'opcao3' => $this->input->post('opcao3'),
					'opcaoCorreta' => $this->input->post('opcaoCorreta'),
                );

                $this->Dialogofrase_model->update_dialogofrase($idDialogoFrases,$params);            
                redirect('dialogofrase/index');
            }
            else
            {
                $data['_view'] = 'dialogofrase/edit';
                $this->load->view('layouts/main',$data);
            }
        }
        else
            show_error('The dialogofrase you are trying to edit does not exist.');
    } 

    /*
     * Deleting dialogofrase
     */
    function remove($idDialogoFrases)
    {
        $dialogofrase = $this->Dialogofrase_model->get_dialogofrase($idDialogoFrases);

        // check if the dialogofrase exists before trying to delete it
        if(isset($dialogofrase['idDialogoFrases']))
        {
            $this->Dialogofrase_model->delete_dialogofrase($idDialogoFrases);
            redirect('dialogofrase/index');
        }
        else
            show_error('The dialogofrase you are trying to delete does not exist.');
    }
    
}
