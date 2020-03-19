<?php
class M_FilePersyaratan extends CI_Model
{
	/*
     * get rows from the files table
     */
	// function getRows($params = array()){
	//     $this->db->select('*');
	//     $this->db->from('files');
	//     $this->db->where('status','1');
	//     $this->db->order_by('created','desc');
	//     if(array_key_exists('id',$params) && !empty($params['id'])){
	//         $this->db->where('id',$params['id']);
	//         //get records
	//         $query = $this->db->get();
	//         $result = ($query->num_rows() > 0)?$query->row_array():FALSE;
	//     }else{
	//         //set start and limit
	//         if(array_key_exists("start",$params) && array_key_exists("limit",$params)){
	//             $this->db->limit($params['limit'],$params['start']);
	//         }elseif(!array_key_exists("start",$params) && array_key_exists("limit",$params)){
	//             $this->db->limit($params['limit']);
	//         }
	//         //get records
	//         $query = $this->db->get();
	//         $result = ($query->num_rows() > 0)?$query->result_array():FALSE;
	//     }
	//     //return fetched data
	//     return $result;
	// }
	function get_id($id)
	{
		return $this->db->get_where("files", array("id" => $id))->row();
	}
	function get()
	{
		return $this->db->get("files")->result_array();
	}
}
