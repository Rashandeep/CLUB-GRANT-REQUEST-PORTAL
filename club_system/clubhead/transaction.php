
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
    <title>Upload bill</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="bill.css"> -->
    <style>
      body{
        background-image: url(blue.jpg);
        
        
      }
    #heading{
        margin-bottom: 1.5rem;
    }
    .container{
      background-color: white;
        max-width: 700px;
        margin: auto;
        margin-top: 80px;
        padding:40px;
        border-radius: 5%;
        border: 1px solid blue;
        box-shadow: 10px 10px 5px;
    }
    .btn{
        margin-left: 47%;
        margin-top: 5%;
    }   
    .form-group{
      background-color: white;
    }

    </style>
</head>
<body>    
<div class="container">
    <h2 id="heading">Upload Bill</h2>
<form action="transaction.php" method="POST" enctype="multipart/form-data">
  <div class="form-group">
    <label for="exampleFormControlInput1">Item</label>
    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Name" name="item">
  </div>
    <div class="form-group">
    <label for="exampleFormControlInput1">Club</label>
    <input type="text" name="club" class="form-control" id="exampleFormControlInput1" placeholder="Name" value="<?php echo $club;?>">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect1">Quantity</label>
    <select class="form-control" name="quantity" id="exampleFormControlSelect1">
      <option>Select Quantity</option>
      <option>1</option>
      <option>2</option>
      <option>3</option>
      <option>4</option>
      <option>5</option>
      <option>6</option>
      <option>7</option>
      <option>8</option>
      <option>9</option>
      <option>10</option>
    </select>
    <div class="form-group">
        <label for="exampleFormControlInput1">Amount</label>
        <input type="number" name="amount" class="form-control" id="exampleFormControlInput1" placeholder="">
      </div>
    
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload Bill</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1" name="bill" required="required">
  </div>

  <input type="submit" class="btn btn-primary" name="submit" value="REQUEST">

</form>
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
    $bill_name=$item.'-'.$amount;
    $tempname = $_FILES["bill"]['tmp_name'];
    
    move_uploaded_file($tempname, "../bills/$bill_name");
    //echo $date;
    //echo "reached";
    $qry = "INSERT INTO `transaction_history`(`s_no`, `timestamp`, `item`, `amount`, `club`, `bill`) VALUES (NULL,'$date','$item','$amount','$club','$bill_name')";
    $run = mysqli_query($conn,$qry);
    if($run == true){
      
      $qry = "SELECT `club`, `current_balance`, `monthly_increment` FROM `club_treasure` WHERE `club`='$club';";
      $run = mysqli_query($conn,$qry);
      if($run == true){
        $data = mysqli_fetch_assoc($run);
        //echo $data['current_balance'];}
        $current_balance = $data['current_balance'] - $amount;
        $qry = "UPDATE `club_treasure` SET `current_balance`='$current_balance' WHERE `club`='$club'";
        $run = mysqli_query($conn,$qry);
        if($run == true){
          echo "SUCCESSFUL";
         header("location: headdash.php");
        } 
      } 
    }else{
      echo "ERROR IS ".mysqli_error($conn);
    }
  }  

?>