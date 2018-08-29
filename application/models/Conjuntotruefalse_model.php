<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Conjuntotruefalse_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get conjuntotruefalse by idConjuntoTrueFalse
     */
    function get_conjuntotruefalse($idConjuntoTrueFalse)
    {
        return $this->db->get_where('ConjuntoTrueFalse',array('idConjuntoTrueFalse'=>$idConjuntoTrueFalse))->row_array();
    }
        
    /*
     * Get all conjuntotruefalse
     */
    function get_all_conjuntotruefalse()
    {
        $this->db->order_by('idConjuntoTrueFalse', 'desc');
        return $this->db->get('ConjuntoTrueFalse')->result_array();
    }
        
    /*
     * function to add new conjuntotruefalse
     */
    function add_conjuntotruefalse($params)
    {
        $this->db->insert('ConjuntoTrueFalse',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update conjuntotruefalse
     */
    function update_conjuntotruefalse($idConjuntoTrueFalse,$params)
    {
        $this->db->where('idConjuntoTrueFalse',$idConjuntoTrueFalse);
        return $this->db->update('ConjuntoTrueFalse',$params);
    }
    
    /*
     * function to delete conjuntotruefalse
     */
    function delete_conjuntotruefalse($idConjuntoTrueFalse)
    {
        return $this->db->delete('ConjuntoTrueFalse',array('idConjuntoTrueFalse'=>$idConjuntoTrueFalse));
    }
}