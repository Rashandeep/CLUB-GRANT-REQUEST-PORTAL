<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	
	<link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">

	
	<title>Document</title>
	<style>
	*{
		font-family: "Roboto";
		
	}
		.nav{
			background-color: black;
			height: 40px;
		}
		.nav a{
			color: white;
			margin: 5px 20px;
			padding:5px

		}
		.nav a:hover{
			text-decoration: none;
			background-color: white;
			color: black;
			transition: linear 0.3s;
		}
		#right{
			margin-left: 80%;
		}

	</style>	
</head>
<body>
	<nav class="nav">
	
			<a  href="../index.php">Home</a>
	
			<a  href="../about.php" style="float: left;">About</a>
			<a  id="right" href="logout.php">Log out</a>
	  </nav>
</body>
</html>