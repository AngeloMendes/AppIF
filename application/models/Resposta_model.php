<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Resposta_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get resposta by idResposta
     */
    function get_resposta($idResposta)
    {
        return $this->db->get_where('Resposta',array('idResposta'=>$idResposta))->row_array();
    }
        
    /*
     * Get all resposta
     */
    function get_all_resposta()
    {
        $this->db->order_by('idResposta', 'desc');
        return $this->db->get('Resposta')->result_array();
    }
        
    /*
     * function to add new resposta
     */
    function add_resposta($params)
    {
        $this->db->insert('Resposta',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update resposta
     */
    function update_resposta($idResposta,$params)
    {
        $this->db->where('idResposta',$idResposta);
        return $this->db->update('Resposta',$params);
    }
    
    /*
     * function to delete resposta
     */
    function delete_resposta($idResposta)
    {
        return $this->db->delete('Resposta',array('idResposta'=>$idResposta));
    }
}
