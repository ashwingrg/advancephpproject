<?php 
class student_model{
	private $id;
	private $name;
	private $address;
	private $contact;
	
	function __construct(){

	}

	//this function returns all records of table tbl_student
	function returnAll(){
		$sql="SELECT * FROM tbl_student";
		$res=mysql_query($sql);
		$row = array();
		while($r = mysql_fetch_array($res)){
		    $row[] = $r;
		}
		return $row;
	}

	//function to add new student record
	function addStudent($s_name,$s_address,$s_contact){
		$this->name = $s_name;
		$this->address = $s_address;
		$this->contact = $s_contact;
		$sql = "INSERT INTO tbl_student values('','$this->name','$this->address','$this->contact')";
		if(mysql_query($sql)){
			?> <script>window.location.href='index.php?view=student&msg=1';</script> <?php
		}
		else { echo "Error while inserting.";}
	}

	//function to select a row by student id
	function selectByID($s_id){
		$this->id=$s_id;
		@$sql="SELECT * FROM tbl_student where s_id='$this->id'";
		$dt=mysql_query($sql);
		$data=mysql_fetch_assoc($dt);
		return $data;
	}

	//function to edit a student record
	function updateStudent($s_id,$s_name,$s_address,$s_contact){
		$this->id = $s_id;
		$this->name = $s_name;
		$this->address = $s_address;
		$this->contact = $s_contact;
		$sql = "UPDATE tbl_student SET s_name='$this->name', s_address='$this->address', s_contact='$this->contact' WHERE s_id='$this->id'";
		if(mysql_query($sql)){
			?> <script>window.location.href='index.php?view=student&msg=3';</script> <?php
		}
		else { echo "error while updating";}
	}

	//funtion to delete student record.
	function deleteStudent($s_id){
		$this->id=$s_id;
		$sql="DELETE FROM tbl_student where s_id='$this->id'";
		if(mysql_query($sql)){
			?> <script>window.location.href='index.php?view=student&msg=4';</script> <?php
		}
		else { echo "error while deleting selected row.";}
	}
	//this funtion deletes all student records
	function deleteAllStudent(){
		$sql="TRUNCATE table tbl_student";
		if(mysql_query($sql)){
			?> <script>window.location.href='index.php?view=student&msg=2';</script> <?php
		}
		else{ echo "error while deleting";}
	}
}

