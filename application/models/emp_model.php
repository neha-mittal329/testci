<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class emp_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    // Hi Neha!!!
   public function submitData($emp_name, $emp_email, $emp_desig, $emp_contact, $emp_bg)
   {		
   		 
		 $ql = $this->db->select('emp_name,emp_email,emp_desig,emp_contact,emp_bg')->from('employee')->where('emp_name',$emp_name)-> where('emp_email',$emp_email)-> where('emp_contact',$emp_contact)->get();
		  if( $ql->num_rows() > 0 ) {
			  	echo "data already exist";
			  } else {
		   $data=array
		   (
		   		'emp_name'=>$emp_name,
				'emp_email'=>$emp_email,
				'emp_desig'=>$emp_desig,
				'emp_contact'=>$emp_contact,
				'emp_bg'=>$emp_bg
				
		   );
				$this->db->insert('employee', $data);
				echo json_encode($data);
				return true;
   }
	   			
	}
		public function dataFetchEmp($emp_id)
			{
				$this->db->select('*');
				$this->db->from('employee');
				if($emp_id!=''){
				$this->db->where('emp_id', $emp_id);
				}
				$this->db->ORDER_BY('emp_id', 'DESC');
				$query = $this->db->get();
				//print_r($query);
				return $query->result();
			}
			
			public function updateEmpData($emp_name, $emp_email, $emp_desig, $emp_contact, $emp_bg, $emp_id)
			{
				$data=array(
					'emp_name'=>$emp_name,
					'emp_email'=>$emp_email,
					'emp_desig'=>$emp_desig,
					'emp_contact'=>$emp_contact,
					'emp_bg'=>$emp_bg,
					'emp_id'=>$emp_id,
				);
					$this->db->where('emp_id', $emp_id);
					$this->db->update('employee', $data);
					return true;
			}
			
			public function deldata($emp_id)
			{
				$this -> db -> where('emp_id', $emp_id);
  				$this -> db -> delete('employee');
			}
	
}
?>