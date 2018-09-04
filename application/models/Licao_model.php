<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Licao_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Dialogo_model');
        $this->load->model('Imagemfrase_model');
        $this->load->model('Truefalse_model');
        $this->load->model('Pergunta_model');
    }
    
    /*
     * Get licao by idLicao
     */
    function get_licao($idLicao)
    {
        return $this->db->get_where('Licao',array('idLicao'=>$idLicao))->row_array();
    }
        
    /*
     * Get all licao
     */
    function get_all_licao()
    {
        $this->db->order_by('idLicao', 'desc');
        return $this->db->get('Licao')->result_array();
    }
        
    /*
     * function to add new licao
     */
    function add_licao($params)
    {
        $this->db->insert('Licao',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update licao
     */
    function update_licao($idLicao,$params)
    {
        $this->db->where('idLicao',$idLicao);
        return $this->db->update('Licao',$params);
    }
    
    /*
     * function to delete licao
     */
    function delete_licao($idLicao)
    {
        return $this->db->delete('Licao',array('idLicao'=>$idLicao));
    }

    function setOrdem($idLicao){
        //selecionar todas as perguntas/dialogo/trueFalse de uma lição
        $numeroPerguntas=count($this->Pergunta_model->get_perguntas_licao($idLicao));
        $numeroPerguntas+=count($this->Dialogo_model->get_dialogos_licao($idLicao));
        $numeroPerguntas+=count($this->Imagemfrase_model->get_imagemFrases_licao($idLicao));
        $numeroPerguntas+=count($this->Truefalse_model->get_truefalses_licao($idLicao));

        if($numeroPerguntas ==0) return 1;
        return $numeroPerguntas +1;
    }
}
