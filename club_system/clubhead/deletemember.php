
<?php
include('header.php');
  session_start();
    
  if(isset($_SESSION['head_id'])){
    $club = $_SESSION['head_id'];
    //echo date("F Y h:i:s A");

  }else{
    echo "NOT LOGIN!!";
  header('location:../headlogin.php');
  }
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
        <td>DELETE</td>
      </tr>
  <?php
    $count = 0;
    while($data = mysqli_fetch_assoc($run)){
        $count++;
  ?>
  <tr align="center">
  	<td><?php echo $count; ?></td>
    <td><?php echo $data['roll_no']; ?></td>
    <td><?php echo $data['name']; ?></td>
    <td><?php echo $data['branch']; ?></td>
    <form method="post" action="deletedata.php?membership_id=<?php echo $data['membership_id'] ?>">
		<td><input type="submit" value="Delete" name="delete"></td>
	</form>	
  </tr>
        <?php
      }
    }
?>