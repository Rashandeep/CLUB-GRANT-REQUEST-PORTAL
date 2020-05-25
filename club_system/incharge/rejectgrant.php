<?php
if(isset($_POST['reject'])){
	include ('../dbcon.php');
	$s_id = $_GET["s_id"];
	$qry = "UPDATE `grant_history` SET `status`='R' WHERE `s_no`='$s_id';";
		$run = mysqli_query($conn,$qry);

		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA UPDATED SUCCESSFULLY!!");
				window.open('inchargedash.php','_self');
			</script>
			<?php
		
		}else{
			?>
			<script type="text/javascript">
				alert("REJECTION UNSUCCESSFULL!!!");
			</script>
		<?php	
		}
		

	}

?>