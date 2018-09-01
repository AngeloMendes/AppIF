<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Dialogofrase_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get dialogofrase by idDialogoFrases
     */
    function get_dialogofrase($idDialogoFrases)
    {
        return $this->db->get_where('DialogoFrases',array('idDialogoFrases'=>$idDialogoFrases))->row_array();
    }
        
    /*
     * Get all dialogofrases
     */
    function get_all_dialogofrases()
    {
        $this->db->order_by('idDialogoFrases', 'desc');
        return $this->db->get('DialogoFrases')->result_array();
    }
        
    /*
     * function to add new dialogofrase
     */
    function add_dialogofrase($params)
    {
        $this->db->insert('DialogoFrases',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update dialogofrase
     */
    function update_dialogofrase($idDialogoFrases,$params)
    {
        $this->db->where('idDialogoFrases',$idDialogoFrases);
        return $this->db->update('DialogoFrases',$params);
    }
    
    /*
     * function to delete dialogofrase
     */
    function delete_dialogofrase($idDialogoFrases)
    {
        return $this->db->delete('DialogoFrases',array('idDialogoFrases'=>$idDialogoFrases));
    }
}
