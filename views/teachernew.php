<?php
	include_once('controllers/class.teacher.php');
	$teacherObj = new teacher();
	$dat = $teacherObj->getByID();
?>
<style>
	.error { font-family:Arial, Helvetica, sans-serif; font-size:14px; color:#F00;}
</style>
<h4 class="clearboth" style="margin-top:-5px;">tbl_teacher :</h4>
        <div class="tblstudent"><!--company table starts here-->       
<form method="post" id="addteacher" action="index.php?cont=teacher&mode=add">
<?php if(@$_GET['id']){ ?>
<h4><?php echo @"Teacher ID:  ".$dat['t_id']; ?></h4>
<?php } ?>
<input type="hidden" name="editid" value="<?php echo $dat['t_id']; ?>">
<p>
<label>Name:</label>
<input id="name" type="text" name="tname"  style="width:200px;" value="<?php echo @$dat['t_name']; ?>" placeholder="Enter your name">
<span class="error"></span>

</p>
<p>
<label>Address:</label>
<input type="text" id="address" name="taddress" style="width:250px;" value="<?php echo @$dat['t_address']; ?>"  placeholder="Enter address">
<span class="error"></span>
</p>
<p>
<label>Contact No.:</label>
<input type="text" id="contact" name="tcontact" value="<?php echo @$dat['t_contact'] ?>"  placeholder="Enter contact no.">
<span class="error"></span>
</p>
<p>
<input type="submit" value="Save" class="buttons" style="border:none; height:25px;">
<a href="index.php?view=teacher" class="buttons">Cancel</a>
</p>
</form>
