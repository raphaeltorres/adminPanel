<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {
/**
  * API Controller for Users
  * What: It's controles all Users API Functions
  * When: created  14-SEP-2013 
  * 	  modified 19-SEP-2013 
  * 	  modified 08-OCT-2013 
  * Who : created by Kamrul Hassan 
  *		: modified by K.H
  *		: modified by pNx
 **/

	public function __construct() {
		parent::__construct();
		$this -> load -> model('common_model');	
	}

	public function rest()
	{
		$method = $_SERVER['REQUEST_METHOD'];	
		$this->$method();
	}
	
	public function index()
	{		
		$this->output->set_status_header(404, 'Not Found');
		show_404('ai', false);
		$data['abc']= 'Testing API';
		$this -> load -> library('parser');
		$this -> parser -> parse("index.tpl", $data);
	}
	
	/**
	 ** @Param: Auth Key / User ID
	 ** for getting user list or user info 
	 **/
	public function get()
	{
		$auth_key 		= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$user_id = ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
			$this->load->model('users_model');
			
			if ( $user_id != '' ){
				//get user info
				$response = $this->users_model->getUser($user_id);
			}
			else{
				//get user list
				$response = $this->users_model->getAllUsers();
			}
		}
		else{
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	// end of get users
	
	
	/**
	 ** @Param: Auth Key
	 ** for creating user
	 **/
	public function post()
	{	
		$auth_key 		= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$email			= $this->security->xss_clean($this->input->post('email'));	
			$fname 			= $this->security->xss_clean($this->input->post('fname'));
			$lname 			= $this->security->xss_clean($this->input->post('lname'));	
			$password		= $this->security->xss_clean($this->input->post('password'));
			$user_level_id	= $this->security->xss_clean($this->input->post('user_level_id'));
			$verified		= $this->security->xss_clean($this->input->post('verified'));
				
			$response['success'] = true;
			
			//validation
			foreach ( $this->input->post() as $key => $val ){
				if ( $val == '' || $val == NULL ){
					$response['success'] = false;
					$response['message'][] = $key.' must be provided';	
				}
			}	
			
			if( $response['success'] ){
				$this->load->model('users_model');
				
				$arr_data = array(
					'email' 		=> $email,
					'fname' 		=> $fname,
					'lname' 		=> $lname,
					'password' 		=> md5($password),
					'user_level_id'	=> $user_level_id,
					'verified' 		=> $verified
				);
				
				$response = $this->users_model->addUser($arr_data);	 
			}
			else{
				$response['rc']			= $is_valid_auth['rc'];
				$response['success']	= $is_valid_auth['success'];
				$response['message'][]	= $is_valid_auth['message'];
			}
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	//end post
	
	/**
	 ** @Param: Auth Key / User ID
	 ** for modifying user info
	 **/
	public function put()
	{
		$auth_key 		= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$user_id = ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
			
			//check if user id is present
			if ( $user_id != '' ){
				
				$data = json_decode(file_get_contents("php://input"), true);
				
				//get fields to edit
				$arr_data = array();
				foreach ( $data as $key => $val ){
					if ( $val != '' || $val != NULL ){
						$arr_data[$key] = $val;	
					}
				}
				
				//check if params are not empty
				if( !empty($arr_data) ){
					$this->load->model('users_model');
					//edit user info
					$response = $this->users_model->editUser($user_id,$arr_data);						
				}
			}
			else{ //user id is missing
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'User ID is missing.';
			}
		}
		else{ //authentication failed
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	
	/**
	 ** @Param: Auth Key / User ID
	 ** for deleting user
	 **/
	public function delete()
	{
		$auth_key 		= ( $this->uri->segment(3) ) ? $this->uri->segment(3) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$user_id = ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
			
			//check if user id is present
			if ( $user_id != '' ){
				//if authorized delete call made with all segments			
				$this->load->model('users_model');
				$return = $this->users_model->delUser($user_id);					
			}
			else{ //user id is missing
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'A User ID must be supplied, to carry out this operation';
			}
		}
		else{ //authentication failed
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
		
	}
	//end of delete user
	
	
	
	/**
	 ** @Param: None
	 ** for user login. includes user access logs
	 **/
	public function login(){
		$auth_key 		= ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$locale	  = $this->security->xss_clean($this->input->post('locale'));
			$this->session->set_userdata('locale', $locale);
			$username = $this->security->xss_clean($this->input->post('username'));	
			$password = $this->security->xss_clean($this->input->post('password'));
			
			$response['success'] = true;
			if( $username == '' || $username == NULL ){
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'Username must be provided';									
			}
			if( ($password == '') || $password == NULL ){
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'Password must be provided';									
			}
			
			//if validation is ok			
			if( $response['success'] ){
				$this->load->model('users_model');
				
				//check if valid user
				$response = $this->users_model->validateUser($username,md5($password));
				if ( $response['rc'] == 0 ){
					$user_info = $response['data']['user'];
					
					$data_arr = array(
						'userid' 	=> $user_info->userid,
						'access_ip' => $_SERVER['REMOTE_ADDR']
					);
					
					// for access logs
					$response['data']['user']->log_id = $this->common_model->access_logs($data_arr,'login');
					$response['data']['user']->locale = $this->session->userdata('locale');
					$this->session->sess_destroy();
				}					
			}
		}
		else{
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse("index.tpl");
	}
	//login user
	
	
	/**
	 ** @Param: Auth Key / User ID / Log ID
	 ** for user logout. includes user access logs
	 **/
	public function logout()
	{
		$auth_key 		= ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$log_id = ( $this->uri->segment(6) ) ? $this->uri->segment(6) : '';
			$userid = ( $this->uri->segment(5) ) ? $this->uri->segment(5) : '';
			
			//if validation is ok			
			if( $log_id != '' && $userid != '' ){				
				$data_arr = array(
					'log_id' => $log_id,
					'userid' => $userid
				);
				// for access logs
				$response = $this->common_model->access_logs($data_arr,'logout');						
			}
			else{
				$response['rc']			= 999;
				$response['success']	= false;
				$response['message'][]	= 'User ID and/or Log ID is missing';
			}
			
		}
		else{
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse("index.tpl");
	}
	
	
	public function accesslogs()
	{
		$auth_key 		= ( $this->uri->segment(4) ) ? $this->uri->segment(4) : '';
		$is_valid_auth 	= $this->common_model->validate_auth_key($auth_key);
		
		//auth key is valid
		if ( $is_valid_auth['rc'] == 0 ){
			$log_id = ( $this->uri->segment(5) ) ? $this->uri->segment(5) : '';
			$this->load->model('users_model');
			
			if ( $log_id != '' ){
				//get user info
				$response = $this->users_model->getaLog($log_id);
			}
			else{
				//get user list
				$response = $this->users_model->getaccessLogs();
			}
		}
		else{
			$response['rc']			= $is_valid_auth['rc'];
			$response['success']	= $is_valid_auth['success'];
			$response['message'][]	= $is_valid_auth['message'];
		}
		
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($response));
		
		$this->load->library('parser');
		$this->parser->parse('index.tpl');
	}
	// end of get users
	
	public function test()
	{
		$return['message'] = $_SERVER['REQUEST_METHOD'];
	
		//display Jason
		$this->output
			 ->set_content_type('application/json')
			 ->set_output(json_encode($return));
		
		$this->load->library('parser');
		$this->parser->parse("index.tpl");
	}
}

/* End of file users.php/ Api Users Controller */
