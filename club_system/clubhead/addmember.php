
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

?>



<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link rel="stylesheet" href="addmember.css" />
<style>
@import https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css;
body{
	margin:0;
	padding:0;
	font-family:sans-serif;
	background-image:url(background.jpg);
	background-repeat:no-repeat;
	background-size: cover;
	background-attachment:fixed;
	background-position:center;
}
.login-box{
	width:350px;
	position:absolute;
	top:50%;
	left:50%;
	transform: translate(-50%,-50%);
	color:black;
	border:2px solid black;
	padding:5%;
	box-shadow: 10px 10px 5px grey;
}
.login-box h1{
	border:2px solid black;
	float:left;
	font-size: 35px;
	border-bottom:6px solid #4caf50;
	margin-bottom:50px;
	padding:13px 5px;
	color: black;
	box-shadow: 10px 10px 5px grey;
}
.textbox{
	width:100%;
	overflow:hidden;
	font-size:20px;
	padding:8px 0;
	margin:8px 0;
	border-bottom:1px solid #4caf50;
}
.textbox input{
	border:none;
	outline:none;
	background:none;
	color:black;
	font-size: 18px;
	width:80%;
	float:left;
	margin: 0 10px;
}
.btn{
	width:160px;
	background:none;
	border: 2px solid #4caf50;
	color:black;
	padding 5px;
	font-size:18px;
	cursor:pointer;
	margin:12px 0;
}
</style>
</head>

<body>

<div class="login-box">
<h1>ADD MEMBER</h1>
<form action="addmember.php" method="POST">
<div class="textbox">
<input type="text" placeholder="name" required="required" name="name"/>
</div>

<div class="textbox">
<input type="text" placeholder="branch" required="required" name="branch"/>
</div>

<div class="textbox">
<input type="text" placeholder="rollno" required="required" name="roll_no" />
</div>

<input class="btn" type="submit" name="submit" value="Confirm Member" />
</div>
</form>
</body>
 </body>
</html>
<?php
	if(isset($_POST['submit'])){
		include("../dbcon.php");
		$roll_no =$_POST["roll_no"];
		$name = $_POST["name"];
		$branch = $_POST["branch"];

/*
		$img_name = $name.'-'.$roll_no;
		$tempname = $_FILES["st_img"]['tmp_name'];

		move_uploaded_file($tempname, "../dataimg/$img_name");

		$qry ="INSERT INTO `student`(`stud_id`,`roll_no`, `name`,`std`, `city`, `p_contact`,`image`) VALUES (NULL, '$roll_no', '$name','$std', '$city', '$p_cont','$img_name');";
		//$qry="INSERT INTO `student` (`stud_id`, `roll_no`, `name`, `city`, `p_contact`, `image`) VALUES (NULL, '34664', 'EWRE', 'WERE', '435435', '');";*/

		$qry = "INSERT INTO `club_members`(`membership_id`, `name`, `roll_no`, `branch`, `club`) VALUES (NULL,'$name','$roll_no','$branch','$club')";
  
		$run = mysqli_query($conn,$qry);
		if($run == true){
			header('location: headdash.php');	
		}else{
			echo "INVALID !!";
		}




	}
?>
