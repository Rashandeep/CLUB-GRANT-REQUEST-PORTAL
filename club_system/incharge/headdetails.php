<?php 
	include('header.php')
?>
<?php
  session_start();
    
  if(isset($_SESSION['in_id'])){
  }else{
  	    header('location:../inchargelogin.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>Head Details</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
		<style type="text/css">
		.cont{
			margin: 10% 20%;
			background-color:white;
			padding:55px;
			border-radius:20px;
			box-shadow: 10px 10px 5px grey;
		}
		select{
			padding:10px;
			margin:20px 0;
		}
		body{
			background: url(../background.jpg);
			background-size: cover;
			background-repeat:no-repeat;

		}
		input{
			background-color:white;
			padding:4px;
			color:blue;
			margin-bottom: 25px;
		}
		.btn{
			margin-left:40%;
			padding: 8px 65px;
		}
	</style>

</head>
<body>
	
<div class="cont">
	<form action="headdetails.php" method="POST">
		<p style="font-weight:bold"> Club Name</p>
		<select class="form-control" name="club">
			<option>---SELECT---</option>
			<option>TPC</option>
			<option>ACM</option>
			<option>Dance</option>
			<option>Photography</option>
			<option>Painting</option>
		</select>

		<input class="btn btn-outline-dark" type="submit" name="submit" value="Show">
	</form>

<?php

	if(isset($_POST['submit'])){
		//echo "reached";
		$club = $_POST['club'];
		include('../dbcon.php');
		$qry = "SELECT `club`,`name` FROM `club_heads` WHERE `club`='$club';";
		$run = mysqli_query($conn,$qry);
		if($run == true){
			$data = mysqli_fetch_assoc($run);
			//echo"REACHED";
		?>

		<div class="row">
		<form>
			<h1>Head Details</h1></div>
			<label for="username">Name</label>
			<input class="form-control" type="text" readonly placeholder="Default input" value="<?php echo $data['name']; ?>" required="required" name="username">
			<label for="club">Club</label>
			<input class="form-control" type="text" readonly placeholder="Default input" value="<?php echo $data['club']; ?>" required="required" name="club">
		</form>
		</div>
		<?php
		}else{
			echo "DATABASE LOADING FAILED!!";
		}	}
?>
</body>
</html>