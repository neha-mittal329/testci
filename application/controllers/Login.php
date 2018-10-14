<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Login extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        // Load our view to be displayed
        // to the user
        $this->load->view('login_view');
		//echo "hi";
    }
	
	public function process()
	{
		$username = $this->input->post('username');
        $password = $this->input->post('password');
		$this->load->model('Login_model');
		$validUser=$this->Login_model->validate($username, $password);
		if(!$validUser)
		{
			echo "asda";
			$this->index();
			
		}else{
			echo "login successful";
		}
	}
}
?>
