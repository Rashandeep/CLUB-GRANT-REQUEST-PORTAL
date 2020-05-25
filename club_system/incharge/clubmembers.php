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

</head>
<body>
  
<div class="cont">
  <form action="clubmembers.php" method="POST">
    <p style="font-weight:bold"> Club Name</p>
    <select class="form-control" name="club">
      <option>---SELECT---</option>
      <option>TPC</option>
      <option>ACM</option>
      <option>Dance</option>
      <option>Photography</option>
      <option>Painting</option>
    </select>

    <input class="btn btn-outline-dark" type="submit" name="submit" value="Submit">
  </form>

<?php   
  if(isset($_POST['submit'])){
    $club = $_POST['club'];
  include('../dbcon.php');
   $qry = "SELECT * FROM `club_members` WHERE `club`='$club';";
   $run = mysqli_query($conn,$qry);

	if(mysqli_num_rows($run)<1){
      ?>
      <script type="text/javascript">
        alert("NO DATA FOUND");
      </script>
      <?php
    }else{
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
    <h1 align="center"><b><u>MEMBER'S LIST</u></b></h1>
  </div>

      <table align="center" class="table table-hover table-stripped" style="width:70%; font-size: 20px; border: 2px solid black; box-shadow: 10px 10px 5px grey;">
      <tr style="background: #b4b4b4;" align="center">
        <td>S NO</td>
        <td>ROLL NO</td>
        <td>NAME</td>
        <td>BRANCH</td>
      </tr>
  <?php
    $count = 0;
    while($data = mysqli_fetch_assoc($run)){
        $count++;
  ?>
  <tr>
  	<td><?php echo $count; ?></td>
    <td><?php echo $data['roll_no']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['branch']; ?></td>
  </tr>
        <?php
      }
    }
  }
?>