<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dialogo_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get dialogo by idDialogo
     */
    function get_dialogo($idDialogo)
    {
        return $this->db->get_where('Dialogo',array('idDialogo'=>$idDialogo))->row_array();
    }
        
    /*
     * Get all dialogo
     */
    function get_all_dialogo()
    {
        $this->db->order_by('idDialogo', 'desc');
        return $this->db->get('Dialogo')->result_array();
    }
        
    /*
     * function to add new dialogo
     */
    function add_dialogo($params)
    {
        $this->db->insert('Dialogo',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dialogo
     */
    function update_dialogo($idDialogo,$params)
    {
        $this->db->where('idDialogo',$idDialogo);
        return $this->db->update('Dialogo',$params);
    }
    
    /*
     * function to delete dialogo
     */
    function delete_dialogo($idDialogo)
    {
        return $this->db->delete('Dialogo',array('idDialogo'=>$idDialogo));
    }

    function get_dialogos_licao($idLicao)
    {
        return $this->db->get_where('Dialogo',array('idLicao'=>$idLicao))->result_array();
    }
    /*
    * function to get all dialogos by idLicao ordenados
    */
    function get_all_dialogo_licao_order($idLicao)
    {
        $this->db->order_by('ordem', 'asc');
        return $this->db->get_where('Dialogo',array('idLicao'=>$idLicao))->result_array();
    }
    /*
    * function to get all dialogo by idLicao and ordem
    */
    function get_dialogo_licao_ordem($idLicao,$ordem)
    {
        return $this->db->get_where('Dialogo',array('idLicao'=>$idLicao, 'ordem'=>$ordem))->row_array();
    }
}
