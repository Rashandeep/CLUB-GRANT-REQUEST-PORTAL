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


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Request Grant</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <style>
    #heading{
    margin-bottom: 1.5rem;
    }
    .container{
        max-width: 700px;
        margin: auto;
        margin-top: 60px;
        padding:40px;
        border-radius: 5%;
        border: 1px solid blue;
        box-shadow: 10px 10px 5px grey;
    }
    .btn{
        margin-left: 45%;
        margin-top: 5%;
    }
    </style>
</head>

<body style="background-image:url('background.jpg'); background-repeat: no-repeat;
    background-size: cover;
    background-position: center;
    background-attachment: fixed; ">
    	<div class="jumbotron" style="margin-top: 40px;">
		<h1 align="center"><b><u>Request Grant</u></b></h1>
	</div>


<div class="container">
    <form action="grantrequest.php" method="POST"> 

  <div class="form-group">
    <label for="exampleFormControlInput1">Item</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="item">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">CLUB</label>
    <input type="text" value="<?php echo $club;?>" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="club" readonly>
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Quantity</label>
    <select class="form-control" id="exampleFormControlSelect1" name="quantity">
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
    </select>
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput1">Amount</label>
    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="" name="amount">
  </div>
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Description</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
  </div>
  <input type="submit" class="btn btn-primary" name="submit" value="REQUEST">
</form>
</div>
    </div>
  
</body>

</html>

<?php
  if(isset($_POST['submit'])){
    include('../dbcon.php');
    $item = $_POST['item'];
    $qty = $_POST['quantity'];
    $amount = $_POST['amount'];
    $club = $_POST['club'];
    $date = date("d-m-Y");
    //echo $date;
    //echo "reached";
    $qry = "INSERT INTO `grant_history`(`s_no`, `timestamp`, `item`, `grant_amount`, `club`, `status`) 
    VALUES (NULL,'$date','$item','$amount','$club','P')";
    $run = mysqli_query($conn,$qry);
    if($run == true){
      //echo "SUCCESSFUL";
      header("location: headdash.php");
    }else{
      echo "ERROR IS ".mysqli_error($conn);
    }
  }  

?>