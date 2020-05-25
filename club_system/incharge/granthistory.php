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
	<title>Grant History</title>
	<style type="text/css">
		.tables{
			text-align: center;
			margin: 0px auto;

		}
		.grant{
			font-weight: bold;

		}
	</style>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body style="background-image:url('background.jpg'); background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed; ">
  <div class="jumbotron" style="margin-top: 60px;">
    <h1 align="center"><b><u>GRANT HISTORY</u></b></h1>
  </div>


<table align="center" class="table table-hover table-stripped" style="width:70%; font-size: 20px; border: 2px solid black; box-shadow: 10px 10px 5px grey;">
  <?php
    include('../dbcon.php');
  $qry = "SELECT * FROM `grant_history` WHERE 1;";

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
        <td>DATE</td>
      </tr>
  <?php
    $count = 0;
    while($data = mysqli_fetch_assoc($run)){
        $count++;
  ?>
  <tr align="center">
    <td><?php echo $data['item']; ?></td>
    <td><?php echo $data['grant_amount']; ?></td>
    <td><?php echo $data['club']; ?></td>
    <td><?php echo $data['status']; ?></td>
    <td><?php echo $data['timestamp']; ?></td>
  </tr>
        <?php
      }
    }

?>