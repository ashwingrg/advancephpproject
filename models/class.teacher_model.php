<?php 
	class teacher_model{
		private $tid;
		private $tname;
		private $taddress;
		private $tcontact;
		function __construct(){
			$sql="CREATE TABLE IF NOT EXISTS tbl_teacher (t_id INT (5) PRIMARY KEY AUTO_INCREMENT, t_name VARCHAR(30), t_address VARCHAR(255), t_contact VARCHAR(11))";
			if(!mysql_query($sql)){
				echo "error while creating a table tbl_teacher";
			}
		}
		function returnAll(){
			$sql = "SELECT * FROM tbl_teacher";
			$res = mysql_query($sql);
			$row = array();
			while ($r = mysql_fetch_array($res)){
				$row[] = $r;
			}
			return $row;
		}
		function selectByID($t_id){
			$this->tid = $t_id;
			$sql = "SELECT * FROM tbl_teacher where t_id='$this->tid'";
			$dt = mysql_query($sql);
			@$data = mysql_fetch_assoc($dt);
			return $data;
		}
		function newTeacher($t_name,$t_address,$t_contact){
			$this->tname = $t_name;
			$this->taddress = $t_address;
			$this->tcontact = $t_contact;
			$sql = "INSERT INTO tbl_teacher values ('','$this->tname','$this->taddress','$this->tcontact')"; 
			if(mysql_query($sql)){
				?> <script>window.location.href='index.php?view=teacher&msg=1';</script>  <?php
			}
		}
		function editTeacher($t_id,$t_name,$t_address,$t_contact){
			$this->tid = $t_id;
			$this->tname = $t_name;
			$this->taddress = $t_address;
			$this->tcontact = $t_contact;
			$sql = "UPDATE tbl_teacher SET t_name='$this->tname', t_address='$this->taddress', t_contact='$this->tcontact' where t_id='$this->tid'";
			if(mysql_query($sql)){
				?> <script>window.location.href='index.php?view=teacher&msg=3';</script> <?
			}
		}
		function delTeacher($t_id){
			$this->tid = $t_id;
			$sql = "DELETE FROM tbl_teacher where t_id='$this->tid'";
			if(mysql_query($sql)){
				?> <script>window.location.href='index.php?view=teacher&msg=4';</script> <?php
			}
		}
		function delAllTeacher(){
			$sql = "TRUNCATE table tbl_teacher";
			if(mysql_query($sql)){
				?> <script>window.location.href='index.php?view=teacher&msg=2';</script> <?php
			}
		}
	}

 ?>