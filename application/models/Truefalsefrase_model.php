<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Truefalsefrase_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get truefalsefrase by idTrueFalseFrases
     */
    function get_truefalsefrase($idTrueFalseFrases)
    {
        return $this->db->get_where('TrueFalseFrases',array('idTrueFalseFrases'=>$idTrueFalseFrases))->row_array();
    }
        
    /*
     * Get all truefalsefrases
     */
    function get_all_truefalsefrases()
    {
        $this->db->order_by('idTrueFalseFrases', 'desc');
        return $this->db->get('TrueFalseFrases')->result_array();
    }
        
    /*
     * function to add new truefalsefrase
     */
    function add_truefalsefrase($params)
    {
        $this->db->insert('TrueFalseFrases',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update truefalsefrase
     */
    function update_truefalsefrase($idTrueFalseFrases,$params)
    {
        $this->db->where('idTrueFalseFrases',$idTrueFalseFrases);
        return $this->db->update('TrueFalseFrases',$params);
    }
    
    /*
     * function to delete truefalsefrase
     */
    function delete_truefalsefrase($idTrueFalseFrases)
    {
        return $this->db->delete('TrueFalseFrases',array('idTrueFalseFrases'=>$idTrueFalseFrases));
    }
}
