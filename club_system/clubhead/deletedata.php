<?php
	if(isset($_POST['delete'])){
		include('../dbcon.php');
		$stud_id = $_GET["membership_id"];
		$sql= "DELETE FROM `club_members` WHERE `membership_id`='$stud_id';";
		$run = mysqli_query($conn,$sql);

		if($run == true){
			?>
			<script type="text/javascript">
				alert("DATA DELETEDD SUCCESSFULLY!!");
				window.open('headdash.php','_self');
			</script>
			<?php
		
		}else{
			?>
			<script type="text/javascript">
				alert("DELETION UNSUCCESSFULL!!!");
			</script>
		<?php	
		}
		

	}

?>