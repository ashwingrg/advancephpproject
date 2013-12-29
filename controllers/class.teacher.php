<?php 
	require 'models/class.teacher_model.php';
	class teacher{
		function __construct(){
			$teacher_modelObj = new teacher_model();
		}
		function getAll(){
			$teacher_modelObj = new teacher_model();
			$retdata =  $teacher_modelObj->returnAll();
			return $retdata;
		}
		function getByID(){
			$teacher_modelObj = new teacher_model();
			if(@$_GET['id']){
				$t_id = $_GET['id'];
				$teacher_modelObj = new teacher_model();
				$inf = $teacher_modelObj->selectByID($t_id);	
				return $inf;
			}
		}
		function addTeacher(){
			$teacher_modelObj = new teacher_model();
			$t_id = $_POST['editid'];
			if($_POST){
				$t_name = $_POST['tname'];
				$t_address = $_POST['taddress'];
				$t_contact = $_POST['tcontact'];
				if($t_id){
					$teacher_modelObj->editTeacher($t_id,$t_name,$t_address,$t_contact);
				}
				else{
					$teacher_modelObj->newTeacher($t_name,$t_address,$t_contact);
				}
			}	
		}
		function deleteTeacher(){
			$t_id = $_GET['id'];
			// echo $t_id;
			// die();
			$teacher_modelObj = new teacher_model();
			$teacher_modelObj->delTeacher($t_id);
		}
		function deleteAllTeacher(){
			$teacher_modelObj = new teacher_model();
			$teacher_modelObj->delAllTeacher();
		}
	}
	//end of class
	//for add and edit operations
	if(@$_GET['mode']){
		$teacherObj = new teacher();
		$mode = $_GET['mode'];
		switch($mode){
			case 'add':
				$teacherObj->addTeacher();
				break;
			case 'delete':
				$teacherObj->deleteTeacher();
				break;
			case 'deleteall':
				$teacherObj->deleteAllTeacher();
				break;
			default:
		}
	}