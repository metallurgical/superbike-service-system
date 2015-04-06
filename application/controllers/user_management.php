<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_management extends CI_Controller {

    public function __construct()
    {
    	parent::__construct();
    	//$this->output->enable_profiler(TRUE);
    }
	
	public function login()
	{
		$this->load->view('login_user');
		if($this->input->post('submit'))
		{
			$formData = $this->input->post();
			
			$table = "users";
			$where = array(
						'user_username'    => $formData['username'],
						'user_password' => $formData['password']
					  );
			$customer = $this->s_model->get_specified_row($table, $where);

			if(!empty($customer))
			{
				$sessionData = array(
								'user_id'  => $customer['user_id'],
								'username'    => $customer['user_username'],
								'category' => 'user',
								'name'     => $customer['user_name']
								);			
				
				$this->session->set_userdata($sessionData);
				redirect('welcome/index');
				
			}
			else
			{
				$message = "login_error";
				$urlToGo = 'user_management/login';
				$this->s_model->display_message($message, $urlToGo);
			}
		}
	}

	public function register()
	{
		
		$this->load->view('register');
		if($this->input->post('submit'))
		{
			$formData = $this->input->post();

			if($formData['user_password'] != $formData['password_confirmation'])
			{
				$message = "login_match";
				$urlToGo = 'user_management/register';
				$this->s_model->display_message($message, $urlToGo);
			}
			else
			{
				$formData = $this->input->post();
				$table = "users";
				$arrayData = array(
							       'user_username' =>$formData['user_username'],
								   'user_password'=>$formData['user_password'],
								   'user_name'=>$formData['user_name'],
								   'user_email'=>$formData['user_email'],
								   'user_address'=>$formData['user_address'],
								   'user_phone' => $formData['user_phone']
								  );
				$this->s_model->insert_data($arrayData,$table);
				$message = "login";
				$urlToGo = 'user_management/login';
				$this->s_model->display_message($message, $urlToGo);
			}
			
		}
	}

	public function logout()
	{
		
		$message = "logout";
		$urlToGo = 'welcome';
		$this->session->sess_destroy();
		$this->s_model->display_message($message, $urlToGo);

	}
}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */