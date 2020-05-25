<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge, chrome=1">
    <link href="https://fonts.googleapis.com/css?family=Roboto&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Roboto&display=swap" rel="stylesheet">
    <style>
    @import url('https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap');
*{
    font-family: "Roboto";
}
body{
  font-family: 'Montserrat', sans-serif;
  margin: 0;
}
.navbar {
    
    background-color:black;
    font-family: Arial;
    position: fixed;
    width: 100%;
}
.navbar a {
    float: left;
    font-size: 16px;
    color: rgba(255, 255, 255, 0.616);
    text-align: center;
    padding: 14px 50px;
    text-decoration: none;
}
.dropdown {
    float: left;
    overflow: hidden;
}
.dropdown .dropbtn {
    font-size: 16px; 
    border: none;
    outline: none;
    color:  rgba(255, 255, 255, 0.616);
    padding: 14px 50px;
    background-color: inherit;
    font-family: inherit;
    margin: 0;
    cursor: pointer;;
}
.navbar a:hover, .dropbtn, .dropbtn:hover {
    color: white;
}
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}
.dropdown-content a:hover {
    background-color: #ddd;
    color: black;
}
.dropdown:hover .dropdown-content {
    display: block;
}
.flowright{
    float: right;
}
    </style>
    <!-- <title>club transaction</title> -->
</head>
<body>
    <div class="navbar">
        <a href="index.php">Home</a>
        
        <div class="dropdown">
          <button class="dropbtn">Clubs
            <i class="fa fa-caret-down"></i>
          </button>
          <div class="dropdown-content">
            <a href="#acm1">ACM</a>
            <a href="#dance1">Dance</a>
            <a href="#painting1">Painting</a>
            <a href="#photo1">Photography</a>
            <a href="#tpc1">TPC</a>
          </div>
        </div>
        <a href="about.html">About</a>
        <div class ="flowright">
          <div class="dropdown">
            <button class="dropbtn">Login
              <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-content">
              <a href="inchargelogin.php">Incharge</a>
              <a href="headlogin.php">Club Head</a>
            </div>
        </div>
    </div>
</div>






































































































































































































































































































































































