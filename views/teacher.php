<?php 
    include_once('controllers/class.teacher.php');
    $teacherviewObj = new teacher();
    $row = $teacherviewObj->getAll();
    //$row = $studentviewObj->getAll();
 ?>
<h4 class="clearboth" style="margin-top:-5px; padding-bottom:7px;">tbl_teacher :</h4>
        <div class="tblstudent"><!--student table starts here-->
        	<div class="top">
        		<a href="index.php?view=teachernew" class="buttons">Add new record</a>
                <a href="index.php?cont=teacher&mode=deleteall" class="buttons">Delete all records</a>
        	</div>
<table>
	<thead>
		<tr>
			<th>t_id</th>
            <th>t_name</th>
            <th>t_address</th>
            <th>t_contact</th>
            <th colspan="2">Actions</th>
   		</tr>
	</thead>
    <tbody>
	<?php 
		foreach ($row as $val){
	?>
    	<tr>
        	<td style="text-align:center;"><?php echo $val['t_id'];?></td>
            <td><?php echo $val['t_name'];?></td>
            <td><?php echo $val['t_address'];?></td>
            <td><?php echo $val['t_contact'];?></td>
            <td width="10%" style="text-align:center;">
           		<a href= "index.php?view=teachernew&id=<?php echo $val['t_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Edit</a>
         	</td>
            <td width="10%">
            	<a href= "index.php?cont=teacher&mode=delete&id=<?php echo $val['t_id'];?>" style="font-family:'Times New Roman', Times, serif; font-size:15px; font-weight:bold;">Delete</a>
        	</td>
      	</tr>
  	<?php } ?>
    </tbody>
    <tfoot>
    	<tr>
        	<!-- <td colspan="6" style="color:#06C; text-align:center; font-size:14px;">Total number of rows (data inserted) = <?php echo $ct; ?></td> -->
        </tr>
    </tfoot>
</table>
