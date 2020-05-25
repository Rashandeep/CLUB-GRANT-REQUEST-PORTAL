

<?php
include('header.php');
  session_start();
    
  if(isset($_SESSION['head_id'])){
    $club = $_SESSION['head_id'];
    //echo $club;
    include('../dbcon.php');
    $qry = "SELECT * FROM `club_treasure` WHERE `club` = '$club'";
    $run = mysqli_query($conn,$qry);
    $row = mysqli_num_rows($run);
    $data = mysqli_fetch_assoc($run);
    //echo $data['current_balance'];
  }else{
    echo "NOT LOGIN!!";
    header('location:../headlogin.php');
  }


?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">
<style type="text/css">
	#heading{
		font-family: "Roboto", sans-serif;
		font-weight: 800;
		text-align: center;
}
#name
{
	text-align: center;
	margin-top: 100px;
	margin-bottom: 0px;
	font-family: "Playfair";

}
.buttons{
	margin: 50px 150px;
	text-align: center;
}
.btn{
	width: 100%;
}
a{
	margin: 10px;

}
body{
	background-image: url(background.jpg);
	background-size: cover;
	background-repeat: no-repeat;
}
.cont{
	margin: 5% 20%;
	background-color: white;
	padding: 15px;
	padding-top: 55px;
	border-radius: 20px;
	box-shadow: 10px 10px 5px gray;
}
#balance{
	margin-top: 0;
	margin-bottom: 75px;
	width: 200px
}
</style>
<title>ACM</title>
</head>
<body>
	<div class="cont">
	<div id="heading">
		<h1><u>CLUB HEAD DASHBOARD</u></h1>
		
	</div>
<div class="club">
<h1 id="name"><?php echo $club; ?></h1></div>
<div class="buttons">
<a class="btn btn-success disabled" id="balance" >Current Balance: <?php echo $data['current_balance']; ?></a><br>	
<a class="btn btn-primary" href="addmember.php" role="button">ADD MEMBER </a><br>
<a class="btn btn-primary" href="deletemember.php" role="button">DELETE MEMBER</a><br>
<a class="btn btn-primary" href="grantrequest.php" role="button">GRANT REQUEST</a><br>
<a class="btn btn-primary" href="transaction.php" role="button">TRANSACTION</a><br>
</div></div>
</body>
</html>
