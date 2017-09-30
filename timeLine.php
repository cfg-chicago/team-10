<!––Sample static timeline to use as a demo if a dynamic timeline takes too long to implement.-->

<!DOCTYPE html>
<html>


<head>

<?php
$servername = "ip-172-31-49-162";
$username = "hectorrshr";
$password = "";
$dbname = "ImageDb";

if(isset($_REQUEST["submit"])){
 $conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error)
{
 die("Connection failed: " . $conn->connect_error);
}

 $u_Name =  $_SESSION["userName"];
 $u_highScore = $_COOKIE["counter"];
 $sql = "INSERT INTO `userHighScore`(`userName`,`uHighScore`) VALUES('$u_Name', '$u_highScore')";
 if (mysqli_query($conn, $sql)) {
 echo '<p> You may now start a new game </p>' ;
 }
 else{
  echo "Error: " . $sql . "<br>" . $conn->error;
  ;}
$conn->close();
}
 
?>

<title>Prologue by HTML5 UP</title>
<meta charset="utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1" />
<link rel="stylesheet" href="home-page/assets/css/main.css" />

<style>
h2 {
    padding: 0px;
    font-size: 45px;
}
div.desc {
    padding: 30px;
    width: 400px;
    text-align: center;
    font-size: 20px;
    font-color: white;
}
</style>

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
    box-sizing: border-box;
}

body {
    background-color: #E0E0E0;
    font-family: Helvetica, sans-serif;
    font-color:white;
}

  .button{
    padding: 10px 40px;
    position: absolute;
    top:0%;
    right: 0%;
    background-color: inherit;
    width: 30%;   
  }

  .fixed{
    position: fixed;
    left: 54%;
    height: 100px;
    width: 100px;
    bottom: 0;
    top: 69%;
    z-index: 2;


}

/* The actual timeline (the vertical ruler) */
.timeline {
    position: relative;
    max-width: 1200px;
    margin: 0 auto;
}
/* The actual timeline (the vertical ruler) */
.timeline::after {
   content: '';
    position: absolute;
    width: 60px;
    background-image: url("pics/road.jpg");
     background-position: center;
    background-color: dimgrey;
    top: 0;
    bottom: 0;
    left: 56%;
    margin-left: -3px;
}
/* Container around content */
.container {
    padding: 10px 40px;
    position: relative;
    background-color: inherit;
    width: 40%;
}
/* The circles on the timeline */
.container::after {
   content: '';
    position: absolute;
    width: 25px;
    height: 5px;
    right: -17px;
   /* background-color: black;
    /*border: 4px solid #FF9F55;*/
    top: 20px;
  /* border-radius: 50%;*/
    z-index: 1;
}



/* Place the container to the left */
.left {
    left: -12%;
}
/* Place the container to the right */
.right {
    left: 30%;
}
/* Add arrows to the left container (pointing right) */
.left::before {
    content: " ";
    height: 300;
    position: absolute;
    top: 22px;
    width: 300;
    z-index: 1;
    right: 30px;
    border: medium solid white;
    border-width: 10px 0 10px 10px;
    border-color: transparent transparent transparent white;
}
/* Add arrows to the right container (pointing left) */
.right::before {
    content: " ";
    height: 0;
    position: absolute;
    top: 22px;
    width: 0;
    z-index: 1;
    left: 30px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
}
/* Fix the circle for containers on the right side */
.right::after {
    left: -16px;
}
/* The actual content */
.content {
    padding: 20px 30px;
    background-color: white;
    position: relative;
    border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media all and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
    left: 31px;
  }
  
  /* Full-width containers */
  .container {
    width: 100%;
    padding-left: 10px;
    padding-right: 10px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
    left: 60px;
    border: medium solid white;
    border-width: 10px 10px 10px 0;
    border-color: transparent white transparent transparent;
  }
  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
    left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
    left: 0%;
  }
}
</style>


    <!-- Header -->
      <div id="header">

        <div class="top">

          <!-- Logo -->
            <div id="logo">
              <span class="image avatar48"><img src="home-page/images/avatar.jpg" alt="" /></span>
              <h1 id="title">Pitch in!</h1>
              <p>Together we win.</p>
            </div>

          <!-- Nav -->
            <nav id="nav">
              <ul>
                <li><a href="home-page/index.html" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
                <!-- <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">About Us</span></a></li> -->
                <li><a href="studentportfolios/index.html" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Students</span></a></li>
                <li><a href="login.html" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Login</span></a></li>
              </ul>
            </nav>

        </div>

        <div class="bottom">

          <!-- Social Icons -->
            <ul class="icons">
              <li><a href="#" class="icon fa-twitter"><span class="label">Twitter</span></a></li>
              <li><a href="#" class="icon fa-facebook"><span class="label">Facebook</span></a></li>
              <li><a href="#" class="icon fa-envelope"><span class="label">Email</span></a></li>
            </ul>

        </div>

      </div>




   <h2 align = "center">Robert N.</h2>
    <center> <img src="profilePics/happychild.jpg" alt="4th Grader" width="250" height="200" align="middle"> </center>

  <center> <div class="desc"> Hi! My name is Robert N. I am a 4th grader at Lawndale Elementary School. This is my first year as a part of Pitch In and I absolutely love it! My favorite mentor is Kerry Wood. </div> </center>



<div class="button">

  <div class="form-group">
    <input type="file" name="img[]" class="file">
    <div class="input-group col-xs-12">
      <span class="input-group-addon"><i class="glyphicon glyphicon-picture"></i></span>
      <input type="text" class="form-control input-lg" disabled placeholder="Upload Image">
      <span class="input-group-btn">
      
        <input class="browse btn btn-primary input-lg" name="submit" type="submit"><i class="glyphicon glyphicon-search"></i> Send</input>
      </span>
    </div>
  </div>


</div>
</head>
<body>



<div class="timeline">
<center><image src="pics/dragon.svg" height="95" width="269" class="fixed" /></center>

  <div class="container left">
    <div class="content">
      <h2>2017</h2>
      <img src="pics/dragon.svg" height="200" width="200">
      <p>Completed your 8th grade milestone! Your glipglop is now full grown!</p>
      </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2016</h2>
                  <article class="item">
                    <a class="image fit"><img src="home-page/images/pic13.jpg" alt="" height="200" width="200"/></a>
                    <header>
                      <h3><b>Hand Poem<br/>
                        <i>by Robert N.</i> </b></h3>
                    </header>
                  </article>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2015</h2>
      <img src="pics/baby.jpeg">
      <p>Completed three community activities! Your hatchling grew!</p>
      </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2012</h2>
                  <article class="item">
                    <a class="image fit"><img src="home-page/images/pic09.jpg" alt="" height="200" width="200"/></a>
                    <header>
                      <h3><b>Basketball Poem<br/>
                        <i>by Robert N.</i> </b></h3>
                    </header>
                  </article>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      <h2>2011</h2>
      <img src="pics/hatching.jpeg">
      <p>You graduated elementary school! Your egg hatched!</p>
      </div>
  </div>
  <div class="container right">
    <div class="content">
      <h2>2007</h2>
                  <article class="item">
                    <a class="image fit"><img src="home-page/images/pic05.jpg" alt="" height="200" width="200"/></a>
                    <header>
                      <h3><b>Fourth Grade Art Project</b></h3>
                    </header>
                  </article>
    </div>
  </div>
</div>
      <script src="assets/js/jquery.min.js"></script>
      <script src="assets/js/jquery.scrolly.min.js"></script>
      <script src="assets/js/jquery.scrollzer.min.js"></script>
      <script src="assets/js/skel.min.js"></script>
      <script src="assets/js/util.js"></script>
      <!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
      <script src="assets/js/main.js"></script>
</body>
</html>po
