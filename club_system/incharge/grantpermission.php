<?php 
	include('header.php')
?>
<?php
  session_start();
    
  if(isset($_SESSION['in_id'])){
  	//echo "reached";
  }else{
  	    header('location:../inchargelogin.php');
  }

?>
<!DOCTYPE html>
<html>
<head>
	<title>ADMIN PORTAL</title>
	    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src='https://kit.fontawesome.com/a076d05399.js'></script>

</head>
<body style="background-image:url('background.jpg'); background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed;
    font-size: 18px; ">
	<div class="jumbotron" style="margin-top: 60px;">
		<h1 align="center"><b><u>GRANT REQUESTS</u></b></h1>
	</div>


<table align="center" class="table table-hover table-stripped" style="width:70%; font-size: 20px; border: 2px solid black; box-shadow: 10px 10px 5px grey;">
<?php
		include('../dbcon.php');
	$qry = "SELECT * FROM `grant_history` WHERE `status`='P';";

		$run = mysqli_query($conn,$qry);

		if(mysqli_num_rows($run)<1){
			?>
			<script type="text/javascript">
				alert("NO REQUEST FOUND");
			</script>
			<?php
		}else{
			?>

			<tr style="background: #b4b4b4;" align="center">
				<td>S NO</td>
				<td>ITEM</td>
				<td>AMOUNT</td>
				<td>CLUB</td>
				<td>ACTION</td>
			</tr>

			<?php
			$count = 0;
			while($data = mysqli_fetch_assoc($run)){
				$count++;
				?>
				<tr align="center">
					<td><?php echo $count; ?></td>
					<td><?php echo $data['item']; ?></td>
					<td><?php echo $data['grant_amount']; ?></td>
					<td><?php echo $data['club']; ?></td>
					<td>
						<form method="post" action="approvegrant.php?s_id=<?php echo $data['s_no'] ?>">
							<input type="submit" name="approve" value="APPROVE">
						</form>
						<form method="post" action="rejectgrant.php?s_id=<?php echo $data['s_no'] ?>">	
							<input type="submit" name="reject" value="REJECT">
						</form>	
					</td>				
				</tr>
				<?php
			}
		}
?>

</table>


</body>
</html>