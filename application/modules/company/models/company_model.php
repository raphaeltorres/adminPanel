<?php

class Company_model extends CI_Model {

	function __construct()
	{
		parent::__construct();
	}
	
	// Get all company
	function companyList()
	{
		$url = $this->config->item('rest_api_url') . 'company/98740';
		return json_decode($this->call_rest_get($url,''));
	}
	
	// Get users information
	function companyInfo($companyId)
	{
		$url = $this->config->item('rest_api_url') . 'company/98740/' . $companyId;
		return json_decode($this->call_rest_get($url,''));
	}
	
	
	// Edit user into the Admin Panel
	function edit_company($data)
	{
		$url = $this->config->item('rest_api_url') . 'company/98740/' . $data['company_id'];
		$json = json_encode($data);
		return json_decode($this->call_rest_put($url,$json));
	}
	
	// Delete user into the Admin Panel
	function delete_user($userid)
	{
		$url = $this->config->item('rest_api_url') . 'users/98740/' . $userid;
		return json_decode($this->call_rest_delete($url,''));
	}
	
	// Add user into the Admin Panel
	function companyAdd($data)
	{
		$url = $this->config->item('rest_api_url') . 'company/98740';
		return json_decode($this->call_rest_post($url,$data));
	}
		
	// GET Request REST CALL
	function call_rest_get($url,$data='')
	{
		$result = $this->curl->simple_get($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	// POST Request REST CALL
	function call_rest_post($url,$data='')
	{
		$result = $this->curl->simple_post($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	// PUT Request REST CALL
	function call_rest_put($url,$data='')
	{
		$result = $this->curl->simple_put($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}
	
	
	// DELETE Request REST CALL
	function call_rest_delete($url,$data='')
	{
		$result = $this->curl->simple_delete($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));	
		return $result;
	}

}