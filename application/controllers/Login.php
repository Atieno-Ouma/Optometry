<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller
{

	public $status;
	public $roles;

	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model', 'user_model', TRUE);
		$this->load->library('form_validation');
		$this->load->library('password');
		$this->form_validation->set_error_delimiters('<div class="error">', '</div>');
		$this->status = $this->config->item('status');
		$this->roles = $this->config->item('roles');

		if (!empty($this->session->userdata['username'])) {
			redirect(site_url() . 'index.php/home');
		}

	}

	public function index()
	{
		//Construct methods will not allow user to reach to this point if they have logged in
		$this->form_validation->set_rules('usernamei', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('login');
		} else {
			$post = $this->input->post();
			$clean = $this->security->xss_clean($post);
			$userInfo = $this->user_model->checkLogin($clean);

			if (!$userInfo) {
				$this->session->set_flashdata('error', 'The login was unsuccessful');
				redirect($_SERVER['HTTP_REFERER']); // Redirect at same page.
			}
			foreach ($userInfo as $key => $val) {
				$this->session->set_userdata($key, $val);
			}
			redirect(site_url() . 'index.php/home/');
		}

	}

	public function reset()
	{
		$this->load->view('reset');
	}

	public function register()
	{
		$this->form_validation->set_rules('firstname', 'First Name', 'required');
		$this->form_validation->set_rules('lastname', 'Last Name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('register');
			$this->load->view('footer');
		} else {
			if ($this->user_model->isDuplicate($this->input->post('email'))) {
				$this->session->set_flashdata('error', 'User email already exists');
				redirect(site_url() . 'index.php/login');
			} else {

				$clean = $this->security->xss_clean($this->input->post(NULL, TRUE));
				$id = $this->user_model->insertUser($clean);
				$token = $this->user_model->insertToken($id);

				$qstring = $this->base64url_encode($token);
				$url = site_url() . 'index.php/main/complete/token/' . $qstring;
				$link = '<a href="' . $url . '">' . $url . '</a>';

				$message = '';
				$message .= '<strong>You have signed up with our website</strong><br>';
				$message .= '<strong>Please click:</strong> ' . $link;

				echo $message; //send this in email
				exit;
			};
		}
	}

	protected function _islocal()
	{
		return strpos($_SERVER['HTTP_HOST'], 'local');
	}

	public function complete()
	{
		$token = base64_decode($this->uri->segment(4));
		$cleanToken = $this->security->xss_clean($token);

		$user_info = $this->user_model->isTokenValid($cleanToken); //either false or array();

		if (!$user_info) {
			$this->session->set_flashdata('error', 'Token is invalid or expired');
			redirect(site_url() . 'index.php/login');
		}
		$data = array(
			'firstName' => $user_info->first_name,
			'email' => $user_info->email,
			'user_id' => $user_info->id,
			'token' => $this->base64url_encode($token)
		);

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('passconf', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('header');
			$this->load->view('complete', $data);
			$this->load->view('footer');
		} else {

			$this->load->library('password');
			$post = $this->input->post(NULL, TRUE);

			$cleanPost = $this->security->xss_clean($post);

			$hashed = $this->password->create_hash($cleanPost['password']);
			$cleanPost['password'] = $hashed;
			unset($cleanPost['passconf']);
			$userInfo = $this->user_model->updateUserInfo($cleanPost);

			if (!$userInfo) {
				$this->session->set_flashdata('error', 'There was a problem updating your record');
				redirect(site_url() . 'index.php/login');
			}

			unset($userInfo->password);

			foreach ($userInfo as $key => $val) {
				$this->session->set_userdata($key, $val);
			}
			redirect(site_url() . 'index.php/main/');

		}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect(site_url() . 'index.php/login/');
	}

	public function forgot()
	{
		$this->form_validation->set_rules('emaili', 'email', 'required|valid_email');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('reset');
		} else {
			$email = $this->input->post('emaili');
			$clean = $this->security->xss_clean($email);
			$userInfo = $this->user_model->getUserInfoByEmail($clean);

			if (!$userInfo) {
				$this->session->set_flashdata('error', 'We cant find your email address');
				redirect(site_url() . 'index.php/login/reset');
			}

			//build token
			$token = $this->user_model->insertToken($userInfo->id);
			$qstring = $this->base64url_encode($token);
			$url = site_url() . 'index.php/login/reset_password/token/' . $qstring;
			$link = '<a href="' . $url . '">' . $url . '</a>';

			$message = '';
			$message .= '<strong>A password reset has been requested for this email account</strong><br>';
			$message .= '<strong>Please click:</strong> ' . $link;

			//Send email to user
			$this->sendMail($message, $email);

		}

	}

	public function reset_password()
	{
		$token = $this->base64url_decode($this->uri->segment(4));
		$cleanToken = $this->security->xss_clean($token);

		$user_info = $this->user_model->isTokenValid($cleanToken); //either false or array();

		if (!$user_info) {
			$this->session->set_flashdata('error', 'Token is invalid or expired. Please request for password reset again.');
			redirect(site_url() . 'index.php/login/reset');
		}
		
		$data = array(
			'firstName' => $user_info->first_name,
			'lastName' => $user_info->last_name,
			'username' => $user_info->username,
			'token' => $this->base64url_encode($token)
		);

		$this->form_validation->set_rules('password', 'Password', 'required|min_length[5]');
		$this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'required|matches[password]');

		if ($this->form_validation->run() == FALSE) {
			$this->load->view('reset_password', $data);
		} else {
			$this->load->library('password');
			$post = $this->input->post(NULL, TRUE);
			$cleanPost = $this->security->xss_clean($post);
			$hashed = $this->password->create_hash($cleanPost['password']);
			$cleanPost['password'] = $hashed;
			$cleanPost['user_id'] = $user_info->id;
			unset($cleanPost['passconf']);
			if (!$this->user_model->updatePassword($cleanPost)) {
				$this->session->set_flashdata('error', 'There was a problem updating your password');
			} else {
				$this->session->set_flashdata('success', 'Your password has been updated. You may now login');
			}
			redirect(site_url() . 'index.php/login');
		}
	}

	public function base64url_encode($data)
	{
		return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
	}

	public function base64url_decode($data)
	{
		return base64_decode(str_pad(strtr($data, '-_', '+/'), strlen($data) % 4, '=', STR_PAD_RIGHT));
	}


	public function check()
	{

		$username = $this->input->post('usernamei');
		$password = $this->input->post('password');


		$this->load->model('user_model');
		$user_data = $this->user_model->login_user($username, $password);

		echo $username;

		if ($user_data) {
			$login_data = array(
				'user_data' => $user_data,
				'id' => $user_data->id,
				'username' => $user_data->username,
				'first_name' => $user_data->first_name,
				'last_name' => $user_data->last_name,
				'logged_in' => true
			);
			$this->session->set_userdata($login_data);
			$this->session->set_flashdata('success', 'Welcome, <a href = "user-home" class = "text-primary">' . $this->session->userdata('username') . '</a>. You have Logged in successfully');
			redirect('index.php/login');

		} else {
			$this->session->set_flashdata('error', '<i class="fas fa-exclamation-triangle"></i> Invalid login. The email or password that you have entered is incorrect. ');
			redirect($_SERVER['HTTP_REFERER']); // Redirect at same page.
		}
	}

	function sendMail($message, $sendTo)
	{
		$config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'serahmbae@gmail.com', // change it to yours
			'smtp_pass' => 'sperrymask', // change it to yours
			'mailtype' => 'html',
			'charset' => 'iso-8859-1',
			'wordwrap' => TRUE
		);

		$this->load->library('email', $config);
		$this->email->set_newline("\r\n");
		$this->email->from('serahmbae@gmail.com'); // change it to yours
		$this->email->to($sendTo);// change it to yours
		$this->email->subject('Password Reset Request');
		$this->email->message($message);
		if ($this->email->send()) {
			$this->session->set_flashdata('success', 'An email reset password has been sent to your email.');
			redirect(site_url() . 'index.php/login');
		} else {
			$this->session->set_flashdata('error', 'Something went wrong while trying to send email. Please try again');
			redirect($_SERVER['HTTP_REFERER']);
		}
	}
}
