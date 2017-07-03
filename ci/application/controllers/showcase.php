<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class showcase extends CI_Controller {
	//Jasons PHP
	var $imageName;
    
	public function __construct() {
        parent::__construct();
        $this->load->model('studentmodel');
		$this->load->model('workmodel');
		
		$this->load->library('cart');
		$this->load->library('pagination');
		$this->load->helper('url');
		$this->load->library("session");
		  
    }

    public function index() {
		//Setting the Menu breadcrumb
		$this->session->set_userdata('home',"home");
		$this->session->unset_userdata('gallery');
		$this->session->unset_userdata('about');
		//****************************************
		
		$data['base'] = $this->config->item('base_url');
		$data['css'] = $this->config->item('css');
		$data['index'] = $this->config->item('index_page');
		$data['img'] = $this->config->item('img');
		
		$work = $this->workmodel->findRandomWork();
		$student = $this->studentmodel->findStudent($work['studentID']);
		
		
		$data['firstName'] = $student['firstName'];
		$data['lastName'] = $student['lastName'];
		$data['course'] = $student['course'];
		$data['year'] = $student['year'];
		
		$data['studentID'] = $work['studentID'];
		$data['image'] = $work['image'];
		$data['title'] = $work['title'];
		
        $this->load->view('index.php', $data);
        
    }
	public function loginPage(){
	$this->session->unset_userdata('home');
	$this->session->unset_userdata('gallery');
	$this->session->unset_userdata('about');
	
		$data['base'] = $this->config->item('base_url');
		$data['css'] = $this->config->item('css');
		$data['index'] = $this->config->item('index_page');
		$data['img'] = $this->config->item('img');
		
		$this->load->view('login.php', $data);
	}
	

	public function gallery(){
	//Setting the Menu breadcrumb
		$this->session->unset_userdata('home');
		$this->session->set_userdata('gallery',"home");
		$this->session->unset_userdata('about');
		//****************************************
		 $this->load->view('gallery.php');
	}
	
	public function galleryChoice($choice){
	//Setting the Menu breadcrumb
		$this->session->unset_userdata('home');
		$this->session->set_userdata('gallery',"home");
		$this->session->unset_userdata('about');
		//****************************************
		$data['base'] = $this->config->item('base_url');
		$data['css'] = $this->config->item('css');
		$data['index'] = $this->config->item('index_page');
		$data['img'] = $this->config->item('img');
		$this->session->unset_userdata('choice');
		$this->session->set_userdata('choice',$choice);
		
		$this->getWork();
	}
	public function viewWork($studentID, $title,$image,$firstName){
		$this->session->unset_userdata('home');
		$this->session->unset_userdata('gallery');
		$this->session->unset_userdata('about');
		
		$data['title'] = $title;
		$data['image'] = $image;
		$data['firstName'] = $firstName;
		$data['studentID'] = $studentID;
		$this->load->view('clickIntoWork.php',$data);
	}
	public function userProfile($studentID,$category){
		$this->session->unset_userdata('home');
		$this->session->unset_userdata('gallery');
		$this->session->unset_userdata('about');
		
		$student = $this->studentmodel->findStudent($studentID);
		$this->session->set_userdata('category' ,$category);
		$this->session->set_userdata('studentUser',$student);
		redirect('showcase/getWorkUser/', 'refresh');
		
		$this->getWorkUser();
		
	}
	public function uploadWorkPage(){
		$this->session->unset_userdata('home');
		$this->session->unset_userdata('gallery');
		$this->session->unset_userdata('about');
		
		$this->load->view('uploadWork.php');
	}
	
	public function editProfile(){
		$this->session->unset_userdata('home');
		$this->session->unset_userdata('gallery');
		$this->session->unset_userdata('about');
		
		$this->load->view('editProfile.php');
	}
	
	
	public function profileUserView(){
		$this->session->unset_userdata('home');
		$this->session->unset_userdata('gallery');
		$this->session->unset_userdata('about');
		
		$this->getWorkUserProfile();
	}
	public function register(){
		$this->session->unset_userdata('home');
		$this->session->unset_userdata('gallery');
		$this->session->unset_userdata('about');
		
		$data['base'] = $this->config->item('base_url');
		$data['css'] = $this->config->item('css');
		$data['index'] = $this->config->item('index_page');
		$data['img'] = $this->config->item('img');
		
		$this->load->view('register.php', $data);
	}
	
	public function about(){
	//Setting the Menu breadcrumb
		$this->session->unset_userdata('home');
		$this->session->unset_userdata('gallery');
		$this->session->set_userdata('about',"home");
		//****************************************
		
		$data['base'] = $this->config->item('base_url');
		$data['css'] = $this->config->item('css');
		$data['index'] = $this->config->item('index_page');
		$data['img'] = $this->config->item('img');
		
		$this->load->view('about.php', $data);
	}
    public function login() {
		$data['base'] = $this->config->item('base_url');
		$data['css'] = $this->config->item('css');
		$data['index'] = $this->config->item('index_page');
		$data['img'] = $this->config->item('img');
		
		$work = $this->workmodel->findRandomWork();
		$student = $this->studentmodel->findStudent($work['studentID']);
		
		
		$data['firstName'] = $student['firstName'];
		$data['lastName'] = $student['lastName'];
		$data['course'] = $student['course'];
		$data['year'] = $student['year'];
		
		$data['studentID'] = $work['studentID'];
		$data['image'] = $work['image'];
		$data['title'] = $work['title'];
		
        $username = $_POST['email'];
        $password = $_POST['password'];

        $student = $this->studentmodel->findStudentByUsernameAndPassword($username, $password);
		
        if ($student != null) {
			//Setting the Menu breadcrumb
			$this->session->set_userdata('home',"home");
			$this->session->unset_userdata('gallery');
			$this->session->unset_userdata('about');
			//****************************************
			$this->session->set_userdata('student',$student);
            $this->load->view('index.php', $data);
			
        } else {
            echo "error";
        }
    }
	
	
	
	
    public function logOut(){
		$this->session->sess_destroy();
		$data['base'] = $this->config->item('base_url');
		$data['css'] = $this->config->item('css');
		$data['index'] = $this->config->item('index_page');
		$data['img'] = $this->config->item('img');
		
		$work = $this->workmodel->findRandomWork();
		$student = $this->studentmodel->findStudent($work['studentID']);
		
		
		$data['firstName'] = $student['firstName'];
		$data['lastName'] = $student['lastName'];
		$data['course'] = $student['course'];
		$data['year'] = $student['year'];
		
		$data['studentID'] = $work['studentID'];
		$data['image'] = $work['image'];
		$data['title'] = $work['title'];
		
		$this->load->view('index.php', $data);
	}
    
	public function signUp(){
			$this->session->unset_userdata('home');
			$this->session->unset_userdata('gallery');
			$this->session->unset_userdata('about');
		$this->do_upload();
		
		$student = array(
                "firstName" => $_POST["firstName"],
                "lastName" => $_POST["lastName"],
                "userName" => $_POST["userName"],
				"email"	=>	$_POST["email"],
                "password" => $_POST["password"],
                "location" => $_POST["location"],
                "course" => $_POST["course"],
                "about" => $_POST["about"],
                "socialMediaLink" => $_POST["socialMediaLink"],
                "skill" => $_POST["skill"],
                "year" => $_POST["year"],
                "year" => $_POST["year"],
				"profileImg" => $this->imageName
				
        );
	
		$this->studentmodel->insertStudent($student);
		$studentID = $this->studentmodel->nextStudent();
		
		$oldDir = './assets/student/temp';
		$newDir = './assets/student/'.$studentID;
		rename($oldDir, $newDir);
		$student = $this->studentmodel->findStudentByUsernameAndPassword($_POST["userName"], $_POST["password"]);
		
        if ($student != null) {
			$this->session->set_userdata('student',$student);
            $this->load->view('profileUserView.php');
			
        } else {
            echo "error";
        }
		
	}
	//Deleting---------------------------------
	public function deleteWork($studentID,$workID,$workImage){
		$flag = $this->workmodel->deleteWork($workID);
		
		if ($flag){
            $path = './assets/student/'.$studentID.'/work/'.$workImage;
			//$this->load->helper("file"); // load the helper
			unlink($path); // delete all files/folders
			
			$this->profileUserView();
       }
        else{
            echo "Files didnt get deleted";
       }
	}
	
	public function deleteAccount($studentID){
	
		$flag = $this->studentmodel->deleteStudent($studentID);
		
		if ($flag){
            $path = './assets/student/'.$studentID;
			$this->load->helper("file"); // load the helper
			delete_files($path, true); // delete all files/folders
			rmdir($path);
       }
        else{
            echo "Files didnt get deleted";
       }
		$this->session->unset_userdata('student');
		$this->index();
	}
	//------------------------------------------
	public function do_upload()
	{
		
		
		$path = './assets/student/temp';

		if(!is_dir($path)) //create the folder if it's not already exists
			{
			  mkdir($path,0755,TRUE);
			}

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '30000';
		$config['max_width']  = '4024';
		$config['max_height']  = '4768';
		$config['file_name'] = 'profile';

		$this->load->library('upload', $config);
		
		

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			echo "didnt work";
			print_r($error);
		}
		else
		{
			$upload_data = $this->upload->data();
			$this->imageName = $upload_data['file_name'];
			
		}
	}
	
	public function uploadWork()
	{
		$student = $this->session->userdata('student');
		
		$studentID = $student['studentID'];
		
		
		$path = './assets/student/'.$studentID.'/work';
		$lastWork = $this->workmodel->lastWork();
		$fileName = $studentID.'_'.($lastWork+1);
		if(!is_dir($path)) //create the folder if it's not already exists
			{
			  mkdir($path,0755,TRUE);
			}

		$config['upload_path'] = $path;
		$config['allowed_types'] = 'gif|jpg|png';
		$config['max_size']	= '11000000';
		$config['max_width']  = '4024';
		$config['max_height']  = '4768';
		$config['file_name'] = $fileName;

		$this->load->library('upload', $config);
		
		

		if ( ! $this->upload->do_upload())
		{
			$error = array('error' => $this->upload->display_errors());
			echo "didn't work";
			print_r($error);
		}
		else
		{
			
			$upload_data = $this->upload->data();
			$this->imageName = $upload_data['file_name'];

			$work = array(
					"studentID" => $student["studentID"],
					"title" => $_POST["title"],
					"category" => $_POST["category"],
					"image" => $this->imageName,
					"description" => $_POST["description"]
				);
			
			$this->workmodel->insertWork($work);
			
			
			

			
		}
		//save work into the database
		//call a method in the model called createWork 
		$this->profileUserView();
			
	}
	
	public function saveUpdatedProfile() {		
		//prepare an array of user info submitted via the POST 
			$student = array(
						'studentID' => $_POST['studentID'],
						"firstName" => $_POST["firstName"],
						"lastName" => $_POST["lastName"],
						"userName" => $_POST["userName"],
						"email"	=>	$_POST["email"],
						"location" => $_POST["location"],
						"course" => $_POST["course"],
						"about" => $_POST["about"],
						"socialMediaLink" => $_POST["socialMediaLink"],
						"skill" => $_POST["skill"],
						"year" => $_POST["year"]		
						);         
		//call the function in the model to do the update and get back a boolean flag
			$flag = $this->studentmodel-> updateStudent ($student);
				if(!$flag){
					echo(‘error’);
				} else {
					$changedStudent = $this->studentmodel->findStudent($student['studentID']);
					$this->session->set_userdata('student',$changedStudent);
					$this->profileUserView();
				}
		}
	
	public function getWork() {
		
		//capture an array of all products from the local function doPagination()
		$data["AllWork"] = $this->doPagination("/showcase/getWork/");
		
		//load the view and pass it the array of productsS
		
        $this->load->view('galleryWeb.php', $data);
    
	  }//end function getProducts()

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 

	/*
	 *local function to set pagination options for the retrival of products
	 */	
	public function doPagination($base)  {
		
		$base = base_url() . index_page() . $base; 
        
		//set configuration options for pagination
        $config['base_url'] = $base;
        $config['total_rows'] = $this->workmodel->record_count_Choice();
        $config['per_page'] = 9; 
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		$config["uri_segment"] = 3;	
 		
		//init the configuration options for pagination
        $this->pagination->initialize($config);
		
		
		//the $page variable uses the ternary operator to either set its value to whatever 
		//is in the third segment of the URI string or to zero (meaning the user is on the first page). 
		//if you don't do this, the page will crash when the user clicks on the first link of the pagination
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//return an array of the products in the DB based on the value of $page by calling the model
		
	    return $this->workmodel->getWorksChoice($page);
		
		
	}
	
	public function getWorkUserProfile() {
		
		//capture an array of all products from the local function doPagination()
		$data["AllWork"] = $this->doPaginationProfile("/showcase/getWorkUserProfile/");
		//load the view and pass it the array of productsS
		
        $this->load->view('profileUserView.php', $data);
    
	  }//end function getProducts()

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 

	/*
	 *local function to set pagination options for the retrival of products
	 */	
	public function doPaginationProfile($base)  {
		
		$base = base_url() . index_page() . $base; 
        
		//set configuration options for pagination
        $config['base_url'] = $base;
        $config['total_rows'] = $this->workmodel->record_count();
        $config['per_page'] = 9; 
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		$config["uri_segment"] = 3;	
 		
		//init the configuration options for pagination
        $this->pagination->initialize($config);
		
		
		//the $page variable uses the ternary operator to either set its value to whatever 
		//is in the third segment of the URI string or to zero (meaning the user is on the first page). 
		//if you don't do this, the page will crash when the user clicks on the first link of the pagination
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//return an array of the products in the DB based on the value of $page by calling the model
		
	    return $this->workmodel->getWorksStudent($page);
		
		
	}
	public function getWorkUser() {
		
		//capture an array of all products from the local function doPagination()
		$data["AllWork"] = $this->doPaginationUser("/showcase/getWorkUser/");
		//load the view and pass it the array of productsS
		
        $this->load->view('userProfile.php',$data);
    
	  }//end function getProducts()

///////////////////////////////////////////////////////////////////////////////////////////////////////////////////////	 

	/*
	 *local function to set pagination options for the retrival of products
	 */	
	public function doPaginationUser($base)  {
		
		$base = base_url() . index_page() . $base; 
        
		//set configuration options for pagination
        $config['base_url'] = $base;
        $config['total_rows'] = $this->workmodel->record_count_User();
		
        $config['per_page'] = 9; 
		$config['full_tag_open'] = '<div id="pagination">';
		$config['full_tag_close'] = '</div>';
		$config["uri_segment"] = 3;	
 		
		//init the configuration options for pagination
        $this->pagination->initialize($config);
		
		
		//the $page variable uses the ternary operator to either set its value to whatever 
		//is in the third segment of the URI string or to zero (meaning the user is on the first page). 
		//if you don't do this, the page will crash when the user clicks on the first link of the pagination
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		
		//return an array of the products in the DB based on the value of $page by calling the model
		
	    return $this->workmodel->getWorksStudentUser($page);
		
		
	}
	
//Jasons PHP End
}
