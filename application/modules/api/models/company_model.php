<?php
##==================================================
## API Model for Company
## @Author: Pinky Liwanagan
## @Date: 09-OCT-2013 
##==================================================

class Company_model extends CI_Model {

	public function __construct() {
		parent::__construct();
		$utctimestamp = $this->db->query("SELECT UTC_TIMESTAMP() as utctimestamp");
		$this->utctimestamp = $utctimestamp->row()->utctimestamp;
	}

	public function companyList() {
		$this->db->from('companies');
		$this->db->order_by('company_id', 'asc');
		$query = $this->db->get();
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['companylist'] = $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Company List: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}

	public function companyInfo($id) {
		$this->db->where('company_id', $id);
		$query = $this->db->get('companies');
		 
		//if data exist, return results
		if ($query->num_rows() > 0){
			$response['rc']					 = 0;
			$response['success']			 = true;
			$response['data']['companyinfo'] = $query->result();
		}
		else{ //no record found	 
			$err_message = ( $this->db->_error_message() ) ? $this->db->_error_message() : 'Company Info: No Records Found.';
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= $err_message;
		}
		return $response;
	}	
	
	public function companyAdd($data)
	{
		//sanitized data
		$data = $this->security->xss_clean($data);
	
		//insert data
		$query = $this->db->insert('companies', $data);
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Company has been successfully added.';
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to add company.';
		}
		return $response;
	}
	
	public function companyEdit($id,$data)
	{	
		//sanitized data
		$data = $this->security->xss_clean($data);
		
		$this->db->where('company_id', $id);
		$this->db->update('companies', $data); 
		
		if ( $this->db->affected_rows() > 0 ){
			$response['rc']			= 0;
			$response['success']	= true;
			$response['message'][]	= 'Company has been successfully modified.';
			$response['message'][]	= $data;
		}
		else{
			$response['rc']			= 999;
			$response['success']	= false;
			$response['message'][]	= 'Failed to edit company.';
			$response['message'][]	= $data;
		}
		return $response;
	}
	
// end of the company model

}
?>