<?php
	//include_once ('controllers/class.addstudent.php');
	include_once('controllers/class.student.php');
	$addstudentObj2 = new student();
	$dat=$addstudentObj2->getByID();
?>

<style>
	.error { font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#F00;}
</style>
<h4 class="clearboth" style="margin-top:-5px;">tbl_student :</h4>
        <div class="tblstudent"><!--company table starts here-->       
<form method="post" id="addstudent" action="index.php?cont=student&mode=add">
<h4><?php echo @"Student ID:  ".$dat['s_id']; ?></h4>
<input type="hidden" name="editid" value="<?php echo $dat['s_id']; ?>">
<p>
<label>Name:</label>
<input id="name" type="text" name="name"  style="width:200px;" value="<?php echo @$dat['s_name']; ?>" placeholder="Enter your name">
<span class="error"></span>

</p>
<p>
<label>Address:</label>
<input type="text" id="address" name="address" style="width:250px;" value="<?php echo @$dat['s_address']; ?>"  placeholder="Enter address">
<span class="error"></span>
</p>
<p>
<label>Contact No.:</label>
<input type="text" id="contact" name="contact" value="<?php echo @$dat['s_contact'] ?>"  placeholder="Enter contact no.">
<span class="error"></span>
</p>
<p>
<input type="submit" value="Save" class="buttons" style="border:none; height:25px;">
<a href="index.php?view=student" class="buttons">Cancel</a>
</p>
</form>
