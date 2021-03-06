<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	

	public function __construct()
	{
		parent::__construct(); 
         
        // Load form validation ibrary & user model 
        $this->load->library('form_validation'); 
        $this->load->model('user'); 
         
        // User login status 
        $this->isUserLoggedIn = $this->session->userdata('isUserLoggedIn'); 
	}


	public function index()
	{	
		 $this->load->view('home.php');
  		 
        
	}

	public function about(){

		$this->load->view('about.php');
	}

	public function contact(){

		$this->load->view('contact.php');
	}

	

// Login Functions Start



   

public function account(){ 
	$data = array(); 
	if($this->isUserLoggedIn){ 
		$con = array( 
			'id' => $this->session->userdata('userId') 
		); 
		$data['user'] = $this->user->getRows($con); 
		 
		// Pass the user data and load view 
		
		$this->load->view('home', $data); 
		
	}else{ 
		redirect(base_url()); 
	} 
} 

public function login(){ 
	$data = array(); 
	 
	// Get messages from the session 
	if($this->session->userdata('success_msg')){ 
		$data['success_msg'] = $this->session->userdata('success_msg'); 
		$this->session->unset_userdata('success_msg'); 
	} 
	if($this->session->userdata('error_msg')){ 
		$data['error_msg'] = $this->session->userdata('error_msg'); 
		$this->session->unset_userdata('error_msg'); 
	} 
	 
	// If login request submitted 
	if($this->input->post('loginSubmit')){ 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email'); 
		$this->form_validation->set_rules('password', 'password', 'required'); 
		 
		if($this->form_validation->run() == true){ 
			$con = array( 
				'returnType' => 'single', 
				'conditions' => array( 
					'email'=> $this->input->post('email'), 
					'password' => md5($this->input->post('password'))
				) 
			); 
			$checkLogin = $this->user->getRows($con); 
			if($checkLogin){ 
				$this->session->set_userdata('isUserLoggedIn', TRUE); 
				$this->session->set_userdata('userId', $checkLogin['id']); 
				redirect(base_url()); 
			}else{ 
				$data['error_msg'] = 'Wrong email or password, please try again.'; 
			} 
		}else{ 
			$data['error_msg'] = 'Please fill all the mandatory fields.'; 
		} 
	} 
	 
	// Load view 
	$this->load->view('home', $data); 
} 

public function registration(){ 
	$data = $userData = array(); 
	 
	// If registration request is submitted 
	if($this->input->post('signupSubmit')){ 
		$this->form_validation->set_rules('name', 'Name', 'required'); 
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email|callback_email_check'); 
		$this->form_validation->set_rules('password', 'password', 'required'); 
		$this->form_validation->set_rules('conf_password', 'confirm password', 'required|matches[password]'); 

		$userData = array( 
			'name' => strip_tags($this->input->post('name')),  
			'email' => strip_tags($this->input->post('email')), 
			'password' => md5($this->input->post('password')), 
			'company_name' => $this->input->post('company_name'), 
			'company_website' => $this->input->post('company_website'), 
		); 

		if($this->form_validation->run() == true){ 
			$insert = $this->user->insert($userData); 
			if($insert){ 
				$this->session->set_userdata('success_msg', 'Your account registration has been successful. Please login to your account.'); 
				redirect(base_url()."index.php/Home/index"); 
			}else{ 
				$data['error_msg'] = 'Some problems occured, please try again.'; 
			} 
		}else{ 
			echo "req";
			$data['error_msg'] = 'Please fill all the mandatory fields.'; 
		} 
	} 
	 
	// Posted data 
	$data['user'] = $userData; 
	 
	// Load view 
	// $this->load->view('elements/header', $data); 
	$this->load->view('registration', $data); 
	// $this->load->view('elements/footer'); 
} 
 
public function logout(){ 
	$this->session->unset_userdata('isUserLoggedIn'); 
	$this->session->unset_userdata('userId'); 
	$this->session->sess_destroy(); 
	redirect(base_url()); 
} 
 
 
// Existing email check during validation 
public function email_check($str){ 
	$con = array( 
		'returnType' => 'count', 
		'conditions' => array( 
			'email' => $str 
		) 
	); 
	$checkEmail = $this->user->getRows($con); 
	if($checkEmail > 0){ 
		$this->form_validation->set_message('email_check', 'The given email already exists.'); 
		return FALSE; 
	}else{ 
		return TRUE; 
	} 
} 

	
}