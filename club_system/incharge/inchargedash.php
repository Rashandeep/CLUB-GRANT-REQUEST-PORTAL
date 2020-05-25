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

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="https://fonts.googleapis.com/css?family=Anton&display=swap" rel="stylesheet">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<style type="text/css">
	#heading{
		font-family: "Anton";
		font-weight: bold;
		text-align: center;
}
#name
{
	text-align: center;
	margin-top: 100px;
	font-family: "Anton";

}
.buttons{
	margin: 50px 150px;
	text-align: center;

}
.btn{
	width: 100%;
	font-size: 25px;
}
a{
	margin: 10px;

}
body{
	background-image: url(background.jpg);
	background-size: cover;
	background-repeat: no-repeat;
	background-position: center;
	background-attachment: fixed;
}
.cont{
	margin: 10% 20%;
	background-color: white;
	padding: 15px;
	padding-top: 55px;
	border-radius: 20px;
	box-shadow: 10px 10px 5px grey;
}

</style>
<title>INCHARGE DASHBOARD</title>
</head>

<body>
	<div class="cont">
	<div id="heading">
		<h1>CLUB INCHARGE DASHBOARD</h1>
		
	</div>
<div class="club">

<div class="buttons">
<a class="btn btn-primary" href="headdetails.php" role="button">Club Head Details</a><br>
<a class="btn btn-primary" href="grantpermission.php" role="button">Grant Pending</a><br>
<a class="btn btn-primary" href="granthistory.php" role="button">Grant History</a><br>
<a class="btn btn-primary" href="clubmembers.php" role="button">View Club Members</a>
</div></div>
</body>
</html>