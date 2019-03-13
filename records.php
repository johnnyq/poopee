<?php 
	include("header.php"); 
	$sql = mysqli_query($mysqli,"SELECT * FROM categories, logs WHERE categories.cat_id = logs.cat_id AND user_id = $session_user_id ORDER BY log_id DESC");

?>

    <main role="main" class="container">
      <a href="post.php?clear" class="btn btn-danger">Clear All Records</a>
      <br><br>
      <div class="display" >
		<table id="dt" class="table table-striped table-bordered" style="width:100%">	
		    <thead>
		    		<tr>
		    			<th>When</th>
		    			<th>What</th>
		    		</tr>
		    </thead>
		    <tbody>
				
		        <?php

					while($row = mysqli_fetch_array($sql)){
		                $log_id = $row['log_id'];
		           		$cat_name = $row['cat_name'];
		                $log_date = date("Y M d g:i A",$row['log_date']);               
		         ?>
							<tr>
								<td><?php echo $log_date; ?></td>
								<td><?php echo $cat_name; ?></td>
							</tr>
				<?php
					}
				?>
			
		    </tbody>
		</table>
	</div>

    </main><!-- /.container -->

<?php include("footer.php"); ?>