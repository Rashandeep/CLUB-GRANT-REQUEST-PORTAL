<?php 

if(isset($_POST['approve'])){
	
	$s_id = $_GET['s_id'];
	//echo $s_id;
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
<div style="width: 60%; height: 600px; background-color: white; border: 2px solid black; box-shadow: 10px 10px 5px grey;"></div>
<a class="btn" href="inchargedash.php">RETURN</a>
<form action="approvegrant.php" method="POST">
<input type="hidden" readonly="readonly" name="s_no" value="<?php echo $s_id; ?>">	
<input class="btn" type="submit" name="submit" value="PROCEED" />
</form>
</body>
</html>


<?php
	if(isset($_POST['submit'])){
		include ('../dbcon.php');
		$s_id = $_POST['s_no'];
		$qry = "UPDATE `grant_history` SET `status`='A' WHERE `s_no`='$s_id';";
		$run1 = mysqli_query($conn,$qry);

		if($run1 == true){
			echo "SUCCESFUL!!";
			$qry1 = "SELECT * FROM `grant_history` WHERE `s_no`='$s_id';";
			$run2 = mysqli_query($conn,$qry1);	
			if($run2 == true){
				$data1 = mysqli_fetch_assoc($run2);
				$amount = $data1['grant_amount'];
				$club = $data1['club'];
				//echo $amount;
				//echo $club;
				echo "SUCCESS ";
				$qry = "SELECT * FROM `club_treasure` WHERE `club`='$club';";
				$run = mysqli_query($conn,$qry);

				if($run == true){
					$data = mysqli_fetch_assoc($run);
					$cur_bal = $data['current_balance'];
					$cur_bal = $cur_bal - $amount;
					echo $cur_bal;
					$qry = "UPDATE `club_treasure` SET `current_balance`='$cur_bal' WHERE `club`='$club';";
					$run = mysqli_query($conn,$qry);

					if($run == true){					
							echo "SUCCESFUL";
							header('location: inchargedash.php');
					}		
				}	

			}	
		}else{
			echo "UNSUCCESSFUL";
		}
	}
/*

				$qry = "SELECT * FROM `club_treasure` WHERE `club`='$club';";
				$run = mysqli_query($conn,$qry);

				if($run == true){
					$data = mysqli_fetch_assoc($run);
					$cur_bal = $data['current_balance'];
					$cur_bal = $cur_bal - $amount;
					$qry = "UPDATE `club_treasure` SET `current_balance`='$cur_bal' WHERE `club`='$club';";

					$run = mysqli_query($conn,$qry);

					if($run == true){					
							echo "SUCCESFUL";
							header('location: inchargedash.php');
					}
				}
			}	
*/
			?>