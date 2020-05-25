<?php
	include('header.php');

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Clubs</title>
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro|Roboto+Slab" rel="stylesheet">
    <style>
    .header{
    min-height: 800px;
	  background-image:url(main.jpg);
    background-repeat: no-repeat;
    background-size:cover;
    background-position: center;
    background-attachment: fixed;
    

}

#clubs{
    color: white;
    text-align: center;
    margin: 0;
    padding-top: 15px;
    font-family: roboto slab;
    font-size: 70px;
    font-weight: bold;
    font-weight: normal;
    margin-right: 20%;
    margin-left: 20%;
}
body{
    margin: 0;
}
hr{
    color: #e6e6e6;
    width: 200px;
}
#title{
    color: white;
    text-align: center;
    margin: 0;
    padding-top: 15%;
    font-family: roboto slab;
    font-size: 26px;
    font-weight: normal;
    margin-right: 20%;
    margin-left: 20%;
    font-weight: 100 ;
    transition: linear 0.3s;
}
#title:hover{
    font-size: 30px;
    transition: linear 0.3s;
}
#title span{
    padding: 0;
    color: black;
}
#overlay{
    height: 800px;
    width: 100%;
    background-color: rgba(0,0,0,0.3);
}
#overlay img{
    margin-top: 550px ;
    margin-left: 46%;
    margin-bottom: 0;
}
#profile img{
    margin-top: -50px;
    height: 100px;
    border-radius: 100%;
    border: 2px solid black;
    background-color: white;
    
}
#profile{
    font-family: sans-serif;
    font-size: 18px;
    color: rgb(51,51,51);
    line-height: 24px;
    text-align: center;
}
#profile p{
    margin: 0;
}
.container{
    width: 66.67%;
    margin: 0 auto;
    font-family: Roboto Slab
    
}
.container h1{
    margin-top: 60px;
    font-size: 36px;
    color: rgb(51,51,51);
}
.inner-container img{
    width: 100%;
}
.inner-container
{
    font-family: sans-serif;
    font-size: 18px;
    line-height: 32px;
    color: rgb(51,51,51);
    padding-left: 65px;
}
span{
    padding-right: 40px;
    color: rgba(0,0,0,.25);
}
.inner-container a{
    color: #42b4d6;
    text-decoration: none;
}
.inner-container a:hover{
    text-decoration: underline;
}
.image{
	height:500px;
	border:5px solid black;
	box-shadow:10px 10px 5px grey;
}
    </style>
    </head>
<body>
 
  <div class="header" >
    <div id="overlay">
      <h1 id="title">Thapar Institute of Engineering and Technology</h1 id="title">
        <h1 id="clubs">CLUBS</h1>
    </div>
  </div>
  <div id="profile">
    <img src="ccet.jpg" alt=""> 
    <p><strong> Team Turing</strong></p>
    <hr>
  </div>
  <div class="container">
  	<a name="acm1"></a>
    <h1><span>1.</span>ACM </h1>

    
    <div class="inner-container">
      <img class="image" src="acm.jpg" alt="acm photo">

      <p>The Association for Computing Machinery (ACM) is an international learned society for computing. It was founded in 1947, and is the world's largest scientific and educational computing society.[1] The ACM is a non-profit professional membership group,[2] claiming nearly 100,000 student and professional members as of 2019.[3] Its headquarters are in New York City.[4]

The ACM is an umbrella organization for academic and scholarly interests in computer science. Its motto is "Advancing Computing as a Science & Profession".
      </p>

      <a href="club.php">More info</a>

    </div>


<a name="dance1"></a>
    <h1><span>2.</span>Dance </h1>
    
    <div class="inner-container">
      <img class="image" src="dance.PNG" alt="dance">

      <p>Our aim is to teach seemingly complicated dance to faculty and students person in a simple and step by step manner by means of one to one and group instruction , there are opportunities for general practice to enhance and improve your technique. Dance clubs are not just for people who want to become competitive dancers, but also for those who want to meet people of all ages with a similar interest. Dancing is a great way to keep fit, socialise and learn a new skill!

      </p>
     
      <a href="club.php">More info</a>

    </div>
    <a name="painting1"></a>

    <h1><span>3.</span>Painting </h1>

    <div class="inner-container">
      <img class="image" src="painting.jpg" alt="painting photo">

      <p>Painting is the practice of applying paint, pigment, color or other medium[1] to a solid surface (called the "matrix" or "support"). The medium is commonly applied to the base with a brush, but other implements, such as knives, sponges, and airbrushes, can be used. The final work is also called a painting.
      </p>
    <a href="club.php">More info</a>

    </div>

<a name="photo1"></a>
    <h1><span>4.</span>Phototgraphy </h1>
    
    <div class="inner-container">
      <img class="image" src="photography.jpg" alt="photography photo">

      <p>The art or practice of capturing and processing photograph is called photography. Photography is all about study of light, composition and a good understanding of the equipment. Photography club of chandighar college of engineering and technology organizes activities to enable the members to get a chance to learn photography, utilize their camera to the fullest and become sensitized to the world around us.

      </p>
            <a href="club.php">More info</a>

    </div>
<a name="tpc1"></a>
    <h1><span>5.</span>TPC </h1>
    
    <div class="inner-container">
      <img class="image" src="tpc.jpg" alt="tpc photo">

      <p>The fast growing industries have great potential to absorb the budding engineers, who are well equipped with a sound technical background, required competency, personality to compliment and reflect the grooming they have gone through during their degree course. The training and placement cell of institute is a fervent proponent of the idea of seeing the career as an on-going process of learning and development, and we make endeavours to imbibe the same in our students. The institute is affiliated with Panjab University, which is one of the oldest and most reputed Universities in the field of providing high quality education. The faculty and students of CCET always work hard to achieve better academic credibility and maintain its position of leadership in engineering and technology

      </p>

            <a href="club.php">More info</a>

    </div>



  </div>
  </body>
</html>
