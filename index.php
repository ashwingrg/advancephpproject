<?php include_once('includes/header.php'); ?>

		<?php 
		if(@$_GET['msg']){ //show div class notify only if get 'msg'
					?>
		<div class="notify">
        	<p>
            		<?php
							if(@$_GET['msg']==1){
								echo "One row Added Successfully";
							}
							else if($_GET['msg']==2){
								echo "All rows have been deleted";
							}
							else if(@$_GET['msg']==3){
								echo "Your record updated successfully.";
							}
							else if($_GET['msg']==4){
								echo "Selected row has been deleted successfully";
							}
					?>
            </p>
        </div>
<?php } ?>
		<?php 
				if(@$_GET['view']){
					include 'views/'.$_GET['view'].'.php';
				}
				elseif(@$_GET['cont']){
					include 'controllers/class.'.$_GET['cont'].'.php';
				}
				else{
					include 'welcome.php';
				}
		?>
<?php include_once('includes/footer.php'); ?>
        
