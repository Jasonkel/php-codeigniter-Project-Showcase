<?php

class studentmodel extends CI_Model {


    public function __construct() {
        // Call the CI_Model constructor
        parent::__construct();
        $this->load->database();
    }
	
	public function findStudent($studentID){
		$this->db->where('studentID', $studentID);
        $resultSet = $this->db->get('student');
        if ($resultSet->num_rows() > 0) {
            $row = $resultSet->row_array();
            return $row;
        } else
            return null;
	}
	
	public function deleteStudent($studentID){
	
		$flag = false;
		$this->db->delete('student', array('studentID' => $studentID));
		$affectedRows = $this->db->affected_rows();
		
		if ($affectedRows == 0)
            $flag = false;
        //if not 0 the insertion is successful
        else
            $flag = true;
        //return flag to the controller
        return $flag;
	}
	
	public function nextStudent(){
		
		$maxid = 0;
		$row = $this->db->query('SELECT MAX(studentID) AS `maxid` FROM `student`')->row();
		if ($row) {
			$maxid = $row->maxid; 
		}
		return $maxid;
	}
	public function insertStudent($student){
		//used to keep track of whether the insertion has been successful or not
        $flag = false;
        //do the insert, passing the user array to the CI function - it dose the rest
        $this->db->insert('student', $student);
        //find out how many rows were affected by the insertion was not successful
        $affectedRows = $this->db->affected_rows();
        //if 0 there has been a problem and the insertion was not successful
        if ($affectedRows == 0)
            $flag = false;
        //if not 0 the insertion is successful
        else
            $flag = true;
        //return flag to the controller
        return $flag;
	}
	
    public function getStudents($offset) { 
		
		$resultSet = $this->db->get('student',$offset);
        return $resultSet->result_array(); 
      
	  }

    public function update_entry() {
        $this->title = $_POST['title'];
        $this->content = $_POST['content'];
        $this->date = time();

        $this->db->update('entries', $this, array('id' => $_POST['id']));
    }

    public function findStudentByUsernameAndPassword($userName, $password) {

        $this->db->where('userName', $userName);
        $this->db->where('password', $password);
        $resultSet = $this->db->get('student');
        if ($resultSet->num_rows() > 0) {
            $row = $resultSet->row_array();
            return $row;
        } else
            return null;
    }

    public function insertUser($User) {

        //used to keep track of whether the insertion has been successful or not
        $flag = false;
        //do the insert, passing the user array to the CI function - it dose the rest
        $this->db->insert('user', $User);
        //find out how many rows were affected by the insertion was not successful
        $affectedRows = $this->db->affected_rows();
        //if 0 there has been a problem and the insertion was not successful
        if ($affectedRows == 0)
            $flag = false;
        //if not 0 the insertion is successful
        else
            $flag = true;
        //return flag to the controller
        return $flag;
    }
	
		public function updateStudent($student) {		  
		//get the id of the user we want to update ==>need it for the criteria in the query
			$idToUpdate = $student['studentID'];
     
		//return true/false depending on whether the update was successful or not
			if ($this->db->where('studentID', $idToUpdate) && $this->db->update('student',$student))
				
				return true;
			else 
				return false;
				
			}//end function updateUser()
	
}
?>