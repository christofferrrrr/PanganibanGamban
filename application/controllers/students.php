<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Students extends CI_Controller {
	
	
	public function __construct(){
		
		parent::__construct();
		
		$this->load->model('student_model','Student');
	}

	public function index()
	{
		
		// echo "my first ci contreller";
		// $fruits=array('banana','apple','strawberry','mango');
		// $data['fruits']=$fruits;
		// $data['title']="The title of the page";
		// $dummy = array(
		// 'idno'=>'14-037-069',
		// 'lastname'=>'DELA VEGA',
		// 'firstname'=>'EDUARDO',
		// 'middlename'=>'RESIDO',
		// 'course'=>'BSIT',
		// 'sex'=>'MALE'
		// );
		// $students[]=$dummy;
		// $this->load->
		// $data['students']=array('');	
		$header_data['title']="View Students";

		$rs=$this->Student->read();
		foreach($rs as $r){
			$info= array(
				'idno'=>$r['idno'],
				'lastname'=>$r['lname'],
				'middlename'=>$r['mname'],
				'firstname'=>$r['fname'],
				'course'=>$r['course'],
				'sex'=>$r['sex']
				);
				$students[]=$info;
			
		}
		$data['students']=$students;
		
	
		$this->load->view('include/header',$header_data );
		$this->load->view('students/viewstudents',$data );
		$this->load->view('include/footer');
	}

		
		// public function profile($id){
			// $student=$this->Student->read(array['$idno']=>$id);
			// if(count($student)>0)
			// {
				// $header_data['title']="Student: view student Prifle";
				// $data['student']=$student;
				
				
				
			// }
			// else{
				// redirect('Student','refresh');
				
			// }
			
			// $this->load->view('students/profile');
		// }
		
			
	public function profile($id){
		 echo "Display student profile with ID=$id";
		
		//call the model
		$student = $this->Student->read(array('idno'=>$id));
		
		if( count($student)>0 ){
			//find the student record
			//load the view
			$header_data['title'] = "Students: View Student Profile";
			$data['student'] = $student;
			
			$this->load->view('include/header',$header_data);		
			$this->load->view('students/profile',$data);
			$this->load->view('include/footer');		
			
		}		
		else{
			redirect('students','refresh');
			/* controller name = students */
		}
	}
	public function del($id){
		$this->Student->delete_student(array('idno'=>$id));
		redirect('students','refresh');
	}
	public function add(){
		$header_data['title']="ADD Student";
		
		$this->form_validation->set_rules('idno','ID number','required|numeric');
		$this->form_validation->set_rules('lname','Last name','required');
		$this->form_validation->set_rules('fname','first name','required');
		$this->form_validation->set_rules('mname','middle name','required');
		$this->form_validation->set_rules('course','course','required');
		$this->form_validation->set_message('required','*');
		if($this->form_validation->run()==FALSE){
		$this->load->view('include/header',$header_data);
		$this->load->view('students/addForm');
		$this->load->view('include/footer');
		}
		else{
	
		$info = array(
		'idno'=>$this->input->post('idno'),
		'lname'=>$this->input->post('lname'),
		'fname'=>$this->input->post('fname'),
		'mname'=>$this->input->post('mname'),
		'course'=>$this->input->post('course'),
		'sex'=>$this->input->post('course'));
		
		
		$this->Student->create($info);
		redirect('students','refresh');
		}
	}
	public function addDb()
	{
		
	
		
		
		
	}
	public function update($id){
		$header_data['title']="Update student";
		
		$student=$this->Student->read(array('idno'=>$id));
		$data['student']=$student;
		
		$this->load->view('include/header',$header_data);
		$this->load->view('students/updateForm',$data);
		$this->load->view('include/footer');
	}
	public function updateDb(){
	
		if(isset($_POST)){
		$info = array(
		'idno'=>$this->input->post('idno'),
		'lname'=>$this->input->post('lname'),
		'fname'=>$this->input->post('fname'),
		'mname'=>$this->input->post('mname'),
		'course'=>$this->input->post('course'),
		'sex'=>$this->input->post('sex'));
		
		}
		$this->Student->update($info);
		echo print_r($_POST);
		redirect('students','refresh');
		
	}
	
}
