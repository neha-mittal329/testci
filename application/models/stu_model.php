<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/* Author: Jorge Torres
 * Description: Login model class
 */
class stu_model extends CI_Model{
    function __construct(){
        parent::__construct();
    }
    
    public function validate($username, $password)
	{
        // Prep the query
        $this->db->where('fname', $fname);
        $this->db->where('lname', $lname);
		$this->db->where('email', $email);
		$this->db->where('ssc', $ssc);
		$this->db->where('hsc', $hsc);
        
        // Run the query
       $query = $this->db->get('students');
		/*$query=$this->db->select('*')
					->from('users')
					->where('username',$username)
					->where('password',$password)
					->get();
					echo $this->db->last_query();
		*/
        // Let's check if there are any results
        if($query->num_rows() == 1)
        {
            // If there is a user, then create session data
            $row = $query->row();
            $data = array(
                    'userid' => $row->userid,
                    'fname' => $row->fname,
                    'lname' => $row->lname,
                    'email' => $row->email,
					'ssc' => $row->ssc,
					'hsc' => $row->hsc,
                    'validated' => true
                    );
            $this->session->set_userdata($data);
            return true;
        }
        // If the previous process did not validate
        // then return false.
        return false;
    }
}
?>