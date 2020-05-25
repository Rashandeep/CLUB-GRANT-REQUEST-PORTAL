<?php
	include('header1.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>CLUBS</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<style type="text/css">
	*{
		font-size: 18px;
	}
	body{
		background-image: url('background.jpg');
		background-size: cover;
	}
	.table{
		background-color: white;
	}
</style>
<body>
	<section class="container-fluid bg">
  		<section class="row justify-content-center">
  		<section class="col-12 col-sm-6 col-md-3">
  			<form class="form" action="club.php" method="POST">
  				<div class="form-group">
 		
				<select class="form-control" name="club" style="font-size: 24px; margin-top: 20px; margin-bottom: 20px;">
				<option>Select Club</option>
				<option>ACM</option>
 				<option>Dance</option>
  				<option>Painting</option>
 				<option>Photography</option>
 				<option>TPC</option>
 				</select>
        <input style="font-size: 18px;"type="submit" name="submit" value="show" class="btn btn-success">
 			</div>
 		</form>
 	</section>
 </section>
</section>

    <?php
      include('dbcon.php');

      if(isset($_POST['submit'])){
          $club = $_POST['club'];
          $qry = "SELECT `s_no`, `timestamp`, `item`, `grant_amount`, `club`, `status` FROM `grant_history` WHERE `club`='$club';";

          $run = mysqli_query($conn,$qry);

          if(mysqli_num_rows($run)<1){
            ?>
            <script type="text/javascript">
              alert("DATA NOT FOUND");
            </script>
            <?php
          }else{
            ?>
            
<table  class="table table-hover" style="width: 60%; margin-top: 2%; margin-bottom: 10%; border-collapse: collapse; font-size: 18px;" align="center" >
				<thead><tr style="background: #d5dbdb; ">
					<th>S NO</th>
					<th>DATE</th>
					<th>ITEM</th>
					<TH>AMOUNT</TH>
					<th>CLUB</th>
					<th>STATUS</th>
				</tr></thead>
          <tbody>
          <?php
            $count = 0;
            while($data = mysqli_fetch_assoc($run)){
              $count++;
          ?>  
          <tr>
				<td><?php echo $count;?></td>
                <td><?php echo $data['timestamp'];?></td>
                <td><?php echo $data['item'];?></td>
                <td><?php echo $data['grant_amount'];?></td>
                <td><?php echo $data['club'];?></td>
                <td><?php echo $data['status'];?></td>      
          </tr>
        <?php
      }
    }
  }
?>


    <?php
      include('dbcon.php');

      if(isset($_POST['submit'])){
          $club = $_POST['club'];
          $qry = "SELECT * FROM `transaction_history` WHERE `club`='$club';";

          $run = mysqli_query($conn,$qry);

          if(mysqli_num_rows($run)<1){
            ?>
            <script type="text/javascript">
              alert("DATA NOT FOUND");
            </script>
            <?php
          }else{
            ?>

<table  class="table table-hover" style="width: 60%; margin-top: 2%; margin-bottom: 10%; border-collapse: collapse; font-size: 18px;" align="center" >
				<thead><tr style="background: #d5dbdb; ">
					<th>S NO</th>
					<th>DATE</th>
					<th>ITEM</th>
					<TH>AMOUNT</TH>
					<th>BILL</th>
				</tr></thead>
          <tbody>
          <?php
            $count = 0;
            while($data = mysqli_fetch_assoc($run)){
              $count++;
          ?>  
          <tr>
            <td><?php echo $count;?></td>
            <td><?php echo $data['timestamp'];?></td>
            <td><?php echo $data['item'];?></td>
            <td><?php echo $data['amount'];?></td>
            <td><a href="">VIEW BILL</a></td>          
          </tr>
        <?php
      }
    }
  }
?>
  </tbody>
</table>
</div>
</body>
</html>
