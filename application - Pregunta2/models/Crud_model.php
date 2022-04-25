<?php
class Crud_model extends CI_Model 
{
	
	function saverecords($data)
	{
        $this->db->insert('persona',$data);
        return true;
	}
	
}