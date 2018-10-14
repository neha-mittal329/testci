
<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class Employee extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        $this->load->view('emp_view');
    }
	
	public function saveEmpData()
	{
		$emp_name=$this->input->post('emp_name');
		$emp_email=$this->input->post('emp_email');
		$emp_desig=$this->input->post('emp_desig');
		$emp_contact=$this->input->post('emp_contact');	
		$emp_bg=$this->input->post('emp_bg');
		//$emp_status=$this->input->post('emp_status');
		$this->load->model('emp_model');
		$subData=$this->emp_model->submitData($emp_name, $emp_email, $emp_desig, $emp_contact, $emp_bg, $emp_status);
		$this->viewEmpData();
	}
	
	public function viewEmpData($emp_id='')
	{
		
		$this->load->model('emp_model');
		$saveEmp=$this->emp_model->dataFetchEmp($emp_id);
		$saveEmpArr=array();
		foreach($saveEmp as $saveEmpAs){
			$tempData=array();
			$tempData['emp_name']=$saveEmpAs->emp_name;
			$tempData['emp_email']=$saveEmpAs->emp_email;
			$tempData['emp_desig']=$saveEmpAs->emp_desig;
			$tempData['emp_contact']=$saveEmpAs->emp_contact;
			$tempData['emp_bg']=$saveEmpAs->emp_bg;
			$tempData['emp_id']=$saveEmpAs->emp_id;
			array_push($saveEmpArr, $tempData);
			
		}
			$data['saveEmp']=$saveEmpArr;
		    $this->load->view('EmpView', $data);
	}
	
	public function editEmpData($emp_id)
	{
		
		$this->load->model('emp_model');
		$saveEmp=$this->emp_model->dataFetchEmp($emp_id);
		$saveEmpArr=array();
		foreach($saveEmp as $saveEmpAs){
			$data=array(
					'emp_name'=>$saveEmpAs->emp_name,
					'emp_email'=>$saveEmpAs->emp_email,
					'emp_desig'=>$saveEmpAs->emp_desig,
					'emp_contact'=>$saveEmpAs->emp_contact,
					'emp_bg'=>$saveEmpAs->emp_bg,
					'emp_id'=>$saveEmpAs->emp_id
			);
			$this->load->view('EmpViewData', $data);
			
		}
	}
	
	public function updData()
	{
			$emp_name = $this->input->post('emp_name');
			$emp_email = $this->input->post('emp_email');
			$emp_desig = $this->input->post('emp_desig');
			$emp_contact = $this->input->post('emp_contact');
			$emp_bg = $this->input->post('emp_bg');
			$emp_id = $this->input->post('emp_id');
			$this->load->model('emp_model');
			
			$postData=$this->emp_model->updateEmpData($emp_name, $emp_email, $emp_desig, $emp_contact, $emp_bg, $emp_id);
			if($postData === true){
			$this->viewEmpData();
		}
		
	}
	
	public function delEmpData($emp_id)
	{
		$this->load->model('emp_model');
		$this->emp_model->deldata($emp_id);
		$this->viewEmpData();
	}
	
}
?>
