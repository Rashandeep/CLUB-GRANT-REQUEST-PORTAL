
<?php
include('../header.php');
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
<title>Untitled Document</title>
</head>

<body>
<h1>CLUB HEAD DASHBOARD</h1>
<p><span style="float:left"><?php echo $club; ?></span><span style="float:right">Current balance:<?php echo $data['current_balance']; ?></span></p>
<br />
<br />
<ul>
<li><a href="addmember.php">add member</a></li>
<li><a href="deletemember.php">delete member</a></li>
<li><a href="grantrequest.php">grant request</a></li>
<li><a href="transaction.php">transaction</a></li>
</ul>
</body>
</html>
