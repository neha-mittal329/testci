<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login controller class
 */
class student extends CI_Controller{
    
    function __construct(){
        parent::__construct();
    }

    public function index(){
        // Load our view to be displayed
        // to the user
        $this->load->view('stu_view');
		//echo "hi";
    }
	
	public function saveStudentData()
	{
		$fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$ssc = $this->input->post('ssc');
		$hsc = $this->input->post('hsc');
		$this->load->model('studentModal');
		$saveStudentData=$this->studentModal->saveData($fname, $lname, $email, $ssc, $hsc);
		$this->viewStudentData();
	}
	public function viewStudentData($sid='')
	{
		
		$this->load->model('studentModal');
		$studentData=$this->studentModal->fetchStudentData($sid);
		//echo "<pre>";print_r($studentData);die;
		$studentDataArr=array();
		foreach($studentData as $studentDatas){
			$tempData=array();
			 $tempData['qwq'] =  $studentDatas->fname;
			 $tempData['lname'] =  $studentDatas->lname;
			 $tempData['email'] =  $studentDatas->email;
			 $tempData['ssc'] =  $studentDatas->ssc;
			 $tempData['hsc'] =  $studentDatas->hsc;
			 $tempData['id']= $studentDatas->sid;
			 array_push($studentDataArr,$tempData);
			
		}
		   $data['studentData']=$studentDataArr;
		   $this->load->view('studentView', $data);
	}
	
	public function editStudentData($id){
		
		//echo $id; die;
				$this->load->model('studentModal');
		$studentData=$this->studentModal->fetchStudentData($id);
		//print_r($studentData); die;
		$studentDataArr=array();
		foreach($studentData as $studentDatas){
			$data=array(
					'fname'=>$studentDatas->fname,
					'lname'=>$studentDatas->lname,
					'email'=>$studentDatas->email,
					'ssc'=>$studentDatas->ssc,
					'hsc'=>$studentDatas->hsc,
					'id'=>$studentDatas->sid
			);
			 
			  $this->load->view('studentViewData', $data);			
		}
	}
	
	public function postSaveData()
	{
		$fname = $this->input->post('fname');
        $lname = $this->input->post('lname');
		$email = $this->input->post('email');
		$ssc = $this->input->post('ssc');
		$hsc = $this->input->post('hsc');
		$id = $this->input->post('id');
		$this->load->model('studentModal');
		$saveStudentData=$this->studentModal->updStudentData($fname, $lname, $email, $ssc, $hsc,$id);
		
		if($saveStudentData === true){
			$this->viewStudentData();
		}
	}
	
}
?>
