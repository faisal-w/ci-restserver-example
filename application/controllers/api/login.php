<?php defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Example
 *
 * This is an example of a few basic user interaction methods you could use
 * all done with a hardcoded array.
 *
 * @package		CodeIgniter
 * @subpackage	Rest Server
 * @category	Controller
 * @author		Goldwater Inc
 * @link		http://philsturgeon.co.uk/code/
*/

// This can be removed if you use __autoload() in config.php OR use Modular Extensions
require APPPATH.'/libraries/REST_Controller.php';

class Login extends REST_Controller
{

	
	function post()
	{
		$data = $this->_post_args;
		//print_r($data);
		$temp = "";
		try{
			$post_username = $data['username'];
			$post_password = $data['password'];
			if(($post_username=='admin')&&($post_password=='password')){
				$this->response('login SUCCESS',200);
			}else{
				$this->response(array('error' => 'Login ERROR'), 404);	
			}
		}catch(Exception $e){
			//$this->response(array('error' => $e->getMessage()), $e->getCode());
			$this->response(array('error' => 'System ERROR'), 404);
		}
	}

	/*TEST THE SERVICE
	curl -i -H "Accept: application/json" -X POST http://localhost/codeigniter-restserver-resources/index.php/api/login -d "username=admin&&password=password"
	*/

	/*
	function post()
	{
		$data = $this->_post_args;
		print_r($data);
		$this->response('SUCCESS',200);
	}
	*/

	function get()
	{
		$this->response('SUCCESS',200);
	}

}