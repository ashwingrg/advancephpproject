<?php 
require 'models/class.student_model.php';

class student{
	function __construct(){
		$student_modelObj = new student_model();
	}
	function getAll(){
		$student_modelObj = new student_model();
		$retdata = $student_modelObj->returnAll();
		return $retdata;
	}

	function addNew(){	
		$student_modelObj = new student_model();
		// @$s_id = $_GET['id'];
		$s_id = $_POST['editid'];
			if($_POST){
				$s_name = $_POST['name'];
				$s_address = $_POST['address'];
				$s_contact = $_POST['contact'];
				if($s_id){
					$student_modelObj->updateStudent($s_id,$s_name,$s_address,$s_contact);
				}
				else {
					
					$student_modelObj->addstudent($s_name,$s_address,$s_contact);
				}
			}
	}

	///delete the student details from database and redirect to listing page
	function deleteStudent(){
		$s_id=$_GET['id'];
		$student_modelObj = new student_model();
		$student_modelObj->deleteStudent($s_id);
	}

	function getByID(){
		if(@$_GET['id']){
			$s_id=$_GET['id'];
			$student_modelObj = new student_model();
			$inf = $student_modelObj->selectByID($s_id);
			return $inf;
		}
	}
	
}
//end of class
//for add and edit operations
if(@$_GET['mode']){
	$studentObj = new student();
	$mode = $_GET['mode'];
	switch($mode){
		case 'add':
			$studentObj->addNew();
		break;
		case 'delete':
			$studentObj->deleteStudent();
		default:

	}
}
