<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class studentModal extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function saveData($fname, $lname, $email, $ssc, $hsc)
	{
        // Prep the query
       
        
            $data = array(
                    'fname' => $fname,
                    'lname' => $lname,
                    'email' => $email,
					'ssc' => $ssc,
					'hsc' => $hsc
                    );
			$this->db->insert('students',$data);
            //$this->session->set_userdata($data);
            return true;
       
    }
	
	
	public function fetchStudentData ($sid)
	{
		$this->db->select('*');
		$this->db->from('students');
		if($sid!=''){
			$this->db->where('sid', $sid);	
		}
		$this->db->order_by('sid', 'DESC');
		$query = $this->db->get();
		return $query->result();

	}   
	
	public function updStudentData ($fname, $lname, $email, $ssc, $hsc, $id)
	{
		$data = array(
        'fname' => $fname,
        'lname' => $lname,
        'email' => $email,
		'ssc'=> $ssc,
		'hsc' => $hsc,
		
		);
			//$sid=$ts->input->post('id');	
			$this->db->where('sid', $id);	
			$this->db->update('students', $data);
			
			return true;

	}   
	
	
}


?>