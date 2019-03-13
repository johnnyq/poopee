<?php 
	include("header.php"); 

if($session_user_access > 0 ){ 
	$sql = mysqli_query($mysqli,"SELECT * FROM categories, logs WHERE categories.cat_id = logs.cat_id AND log_date >= UNIX_TIMESTAMP(CURDATE()) AND user_id = $session_user_id ORDER BY log_id DESC");

?>

    <main role="main" class="container">

      	<a class="btn btn-primary btn-lg btn-block" href=post.php?pee>Pee</a>
      	<a class="btn btn-secondary btn-lg btn-block" href="post.php?poo">Poo</a>

      <div class="table-responsive">
		<table class="table table-striped">	
		    <tbody>
				
		        <?php

					while($row = mysqli_fetch_array($sql)){
		                $log_id = $row['log_id'];
		           		$cat_name = $row['cat_name'];
		                $log_date = date($config_date_format,$row['log_date']);               
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


<?php 
}else{ 
?>
	<main role="main" class="container">
		<div class="starter-template">
			<h1>Register to start making those PooPee Records!</h1>
		</div>
	</main>
<?php
}

include("footer.php"); 
?>