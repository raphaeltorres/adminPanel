<?php

class Admin_model extends CI_Model {

	
	// validate user credentials
	function validate($data)
	{
		$url = $this->config->item('rest_api_url') . 'users/login/98740/';
		return json_decode($this->call_rest_post($url,$data));
	}
	
	// logout user
	function logout()
	{
		$userid = $this->session->userdata('userid');
		$logid  = $this->session->userdata('logid');
		$url = $this->config->item('rest_api_url') . 'users/logout/98740/'  . $userid . '/' . $logid;
		return json_decode($this->call_rest($url,''));
	}
	
	//countryList
	function countryList()
	{
		$url = $this->config->item('rest_api_url') . 'country/98740/';
		return json_decode($this->call_rest($url,''));
	}
	
	
	//call rest API
	function call_rest($url,$data='')
	{
		$result = $this->curl->simple_get($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));
		return $result;
	}
	
	function call_rest_post($url,$data='')
	{
		$result = $this->curl->simple_post($url , $data , array(CURLOPT_SSL_VERIFYPEER => false, CURLOPT_SSL_VERIFYHOST=> false));
		return $result;
	}
	
	
}