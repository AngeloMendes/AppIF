<?php
/* 
 * Generated by CRUDigniter v3.2 
 * www.crudigniter.com
 */
 
class Truefalse_model extends CI_Model
{
    function __construct()
    {
        parent::__construct();
    }
    
    /*
     * Get truefalse by idTrueFalse
     */
    function get_truefalse($idTrueFalse)
    {
        return $this->db->get_where('TrueFalse',array('idTrueFalse'=>$idTrueFalse))->row_array();
    }
        
    /*
     * Get all truefalse
     */
    function get_all_truefalse()
    {
        $this->db->order_by('idTrueFalse', 'desc');
        return $this->db->get('TrueFalse')->result_array();
    }
        
    /*
     * function to add new truefalse
     */
    function add_truefalse($params)
    {
        $this->db->insert('TrueFalse',$params);
        return $this->db->insert_id();
    }
    
    /*
     * function to update truefalse
     */
    function update_truefalse($idTrueFalse,$params)
    {
        $this->db->where('idTrueFalse',$idTrueFalse);
        return $this->db->update('TrueFalse',$params);
    }
    
    /*
     * function to delete truefalse
     */
    function delete_truefalse($idTrueFalse)
    {
        return $this->db->delete('TrueFalse',array('idTrueFalse'=>$idTrueFalse));
    }
    function get_truefalses_licao($idLicao)
    {
        return $this->db->get_where('TrueFalse',array('idLicao'=>$idLicao))->result_array();
    }
    function get_all_trueFalse_licao_order($idLicao)
    {
        $this->db->order_by('ordem', 'asc');
        return $this->db->get_where('TrueFalse',array('idLicao'=>$idLicao))->result_array();
    }
    /*
    * function to get all TrueFalse by idLicao and ordem
    */
    function get_truefalse_licao_ordem($idLicao,$ordem)
    {
        $truefalse=$this->db->get_where('TrueFalse',array('idLicao'=>$idLicao, 'ordem'=>$ordem))->row_array();
        if($truefalse){
            $conjuntoTrueFalse = $this->db->get_where('ConjuntoTrueFalse',array('idTrueFalse'=>$truefalse->idTrueFalse))->result_array();
            $i=1;
            foreach ($conjuntoTrueFalse as $conjunto){
                $frases['frase'.$i] = $this->db->get_where('TrueFalseFrases',array('idTrueFalseFrases'=>$conjunto->idTrueFalseFrases))->result_array();
                $truefalse=array_merge($truefalse,$frases);
                $i++;
            }
        }
        return $truefalse;

    }
}
