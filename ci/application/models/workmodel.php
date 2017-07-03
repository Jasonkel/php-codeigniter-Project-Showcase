<?php

class workmodel extends CI_Model {

    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }
	public function deleteWork($workID){
		$flag = false;
		$this->db->delete('work', array('workID' => $workID));
		$affectedRows = $this->db->affected_rows();
		
		if ($affectedRows == 0)
            $flag = false;
        //if not 0 the insertion is successful
        else
            $flag = true;
        //return flag to the controller
        return $flag;
	}
	public function findRandomWork(){
		
		$this->db->order_by('workID', 'RANDOM');
		$this->db->limit(1);
        $resultSet = $this->db->get('work');
        if ($resultSet->num_rows() > 0) {
            $row = $resultSet->row_array();
            return $row;
        } else
            return null;
	}
	//counting
	public function record_count_Choice() {
		return $this->countRowChoice();
    }
	public function record_count() {
		return $this->countRowStudent();
    }
	
	public function countRowStudent(){
	
		$student = $this->session->userdata('studentUser');
		$this->db->select('*');
		$this->db->from('work');
		$this->db->where('studentID', $student['studentID']);
		$query = $this->db->get();
		return $rowcount = $query->num_rows();
	
	
	}
	//------------------
	public function record_count_User() {
		return $this->countRowStudentUser();
    }
	public function countRowStudentUser(){
		$student = $this->session->userdata('studentUser');
		$this->db->select('*');
		 //$this->db->from('work');
		$query = $this->db->get_where('work', array('studentID' => $student['studentID']));
		 //$query =$this->db->get();
		return $rowcount = $query->num_rows();
	}
	public function countRowChoice(){
		$this->db->from('work');
		$choice = $this->session->userdata('choice');
		$this->db->where('category', $choice);
		$query = $this->db->get();
		return $rowcount = $query->num_rows();
	}
	//**************************
	 public function getWorksStudent($page) { 
		
		$this->db->select('*');
		$this->db->from('work');
		$this->db->limit(9,$page);
		$this->db->join('student','work.studentID = student.studentID');
		$student = $this->session->userdata('student');
		$this->db->where('student.studentID', $student['studentID']);
		
		$resultSet = $this->db->get();
        return $resultSet->result_array();
      
	  }//end function
	   public function getWorksStudentUser($page) { 
		
		$this->db->select('*');
		$this->db->from('work');
		$this->db->limit(9,$page);
		$this->db->join('student','work.studentID = student.studentID');
		$student = $this->session->userdata('studentUser');
		$this->db->where('work.studentID', $student['studentID']);
		$resultSet = $this->db->get();
		
        return $resultSet->result_array();
      
	  }//end function
	public function insertWork($work){
		
        $flag = false;
        $this->db->insert('work', $work);
        $affectedRows = $this->db->affected_rows();
        
        if ($affectedRows == 0)
            $flag = false;
        
        else
            $flag = true;
        
        return $flag;
	}
	  public function getWorksChoice($page) { 
		
		$this->db->select('*');
		$this->db->from('student');
		$this->db->join('work','work.studentID = student.studentID');
		$this->db->limit(9,$page);
		$choice = $this->session->userdata('choice');
		$this->db->where('category', $choice);
		$resultSet = $this->db->get();
        return $resultSet->result_array();
	  }//end function getProductsForAdmin()

	public function findAllStudentWork($studentID){
		
		$this->db->select('*');
		$this->db->from('work');
		$this->db->where('studentID', $studentID);
		$resultSet = $this->db->get();
		return $resultSet->result_array();
	}
	
	public function lastWork(){
		
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(workID) AS `maxid` FROM `work`')->row();
		if ($row) {
			$maxid = $row->maxid; 
		}
		return $maxid;
	}

}

?>