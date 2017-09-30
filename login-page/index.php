<!DOCTYPE HTML>
<!--
	Prologue by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<?php
  $servername = "ip-172-31-49-162";
  $username = "hectorrshr";
  $password = "Superior11";
  $dbname = "userDb";

  if(isset($_REQUEST["submit"])){
   $conn = new mysqli($servername, $username, $password, $dbname);
  if ($conn->connect_error)
  {
   die("Connection failed: " . $conn->connect_error);
  }
   $u_Name = $_POST['UserName'];
   $u_Password = $_POST['Password'];
   $u_final = $u_Name . ':' . $u_Password;
   $u_Hash = password_hash($u_final, PASSWORD_DEFAULT);
   $u_dbPass = "";
   $sql = "SELECT `Password` FROM `userLogin` WHERE userName='$u_Name'";
   $result = $conn->query($sql);
  if($result->num_rows > 0){
   while($row= $result->fetch_assoc())
   {
     $u_dbPass =$row["Password"];
   }
  }
  if (password_verify($u_final, $u_dbPass)){
   header('Location: http://icarus.cs.weber.edu/~va84547/userGame.php');
  }
  else {
   echo 'invalid password.';
  }
  $conn->close();
  }
?>

	<head>
		<title>Pitch In</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<!--[if lte IE 8]><script src="assets/js/ie/html5shiv.js"></script><![endif]-->
		<link rel="stylesheet" href="assets/css/main.css" />
		<!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
		<!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
	</head>

	<style>
	/* Full-width input fields */
	input[type=text], input[type=password] {
	    width: 100%;
	    padding: 12px 20px;
	    margin: 8px 0;
	    display: inline-block;
	    border: 1px solid #ccc;
	    box-sizing: border-box;
	}

	/* Set a style for all buttons */
	button {
	    color: white;
	    padding: 14px 20px;
	    margin: 8px 0;
	    border: none;
	    cursor: pointer;
	    width: 100%;
	}

	button:hover {
	    opacity: 0.8;
	}

	/* Extra styles for the cancel button */
	.cancelbtn {
	    width: auto;
	    padding: 10px 18px;
	    background-color: #000000;
	}

	/* Center the image and position the close button */
	.imgcontainer {
	    text-align: center;
	    margin: 24px 0 12px 0;
	    position: relative;
	}

	img.avatar {
	    width: 40%;
	    border-radius: 50%;
	}

	.container {
	    padding: 16px;
	}

	span.psw {
	    float: right;
	    padding-top: 16px;
	}

	/* The Modal (background) */
	.modal {
	    display: none; /* Hidden by default */
	    position: fixed; /* Stay in place */
	    z-index: 1; /* Sit on top */
	    left: 0;
	    top: 0;
	    width: 100%; /* Full width */
	    height: 100%; /* Full height */
	    overflow: auto; /* Enable scroll if needed */
	    background-color: rgb(0,0,0); /* Fallback color */
	    background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
	    padding-top: 60px;
	}

	/* Modal Content/Box */
	.modal-content {
	    background-color: #fefefe;
	    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
	    border: 1px solid #888;
	    width: 80%; /* Could be more or less, depending on screen size */
	}

	/* The Close Button (x) */
	.close {
	    position: absolute;
	    right: 25px;
	    top: 0;
	    color: #000;
	    font-size: 35px;
	    font-weight: bold;
	}

	.close:hover,
	.close:focus {
	    color: red;
	    cursor: pointer;
	}

	/* Add Zoom Animation */
	.animate {
	    -webkit-animation: animatezoom 0.6s;
	    animation: animatezoom 0.6s
	}

	@-webkit-keyframes animatezoom {
	    from {-webkit-transform: scale(0)}
	    to {-webkit-transform: scale(1)}
	}

	@keyframes animatezoom {
	    from {transform: scale(0)}
	    to {transform: scale(1)}
	}

	/* Change styles for span and cancel button on extra small screens */
	@media screen and (max-width: 300px) {
	    span.psw {
	       display: block;
	       float: none;
	    }
	    .cancelbtn {
	       width: 100%;
	    }
	}
	</style>

	<body>

		<!-- Header -->
			<div id="header">

				<div class="top">

					<!-- Logo -->
						<div id="logo">
							<span class="image avatar48"><img src="images/avatar.jpg" alt="" /></span>
							<h1 id="title">Pitch in!</h1>
							<p>Together we win.</p>
						</div>

					<!-- Nav -->
						<nav id="nav">
							<!--

								Prologue's nav expects links in one of two formats:

								1. Hash link (scrolls to a different section within the page)

								   <li><a href="#foobar" id="foobar-link" class="icon fa-whatever-icon-you-want skel-layers-ignoreHref"><span class="label">Foobar</span></a></li>

								2. Standard link (sends the user to another page/site)

								   <li><a href="http://foobar.tld" id="foobar-link" class="icon fa-whatever-icon-you-want"><span class="label">Foobar</span></a></li>

							-->
							<ul>
								<li><a href="../home-page/index.html" id="top-link" class="skel-layers-ignoreHref"><span class="icon fa-home">Home</span></a></li>
								<!-- <li><a href="#portfolio" id="portfolio-link" class="skel-layers-ignoreHref"><span class="icon fa-th">About Us</span></a></li> -->
								<li><a href="../studentportfolios/index.html" id="about-link" class="skel-layers-ignoreHref"><span class="icon fa-user">Students</span></a></li>
								<li><a href="index.html" id="contact-link" class="skel-layers-ignoreHref"><span class="icon fa-envelope">Login</span></a></li>
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

		<!-- Main -->
			<div id="main">

				<!-- Intro -->
					<section id="top" class="one dark cover">
						<div class="container">

							<header>
								<h2 class="alt"><strong>Already involved?</strong></h2>
								<p>Login here to post updates!</p>
							</header>

							<footer>
								<button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
									Login as a Mentor
								</button>


                <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">
									Login as a Student
								</button>
							</footer>

							<div id="id01" class="modal">

							  <form class="modal-content animate" >
							    <div class="imgcontainer">
							      <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
							      <h3> <b>Login as a Mentor</b> </h3>
							    </div>

							    <div class="container">

                    <form id="userForm" method="post">
                      <label><b> UserName: <input type="text" placeholder="Enter Username" name="UserName" id="uName"> </b></label>
                      <label><b> Password: <input type="password" name="Password" placeholder="Enter Password" id="uPass"></label>

                       <input type="submit" name="submit" value="LOGIN"/>
                     </form>


							      <!-- <button type="submit">Login</button> -->
							      <input type="checkbox" checked="checked"> <b>Remember me</b>
							    </div>

							    <!-- <div class="container" style="background-color:#f1f1f1"> -->
							      <!-- <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button> -->
							      <!-- <span class="psw">Forgot <a href="#">password?</a></span>
							    </div> -->
							  </form>
							</div>

						</div>
					</section>

			</div>

		<!-- Footer -->
			<div id="footer">

				<!-- Copyright -->
					<ul class="copyright">
						<li>&copy; Team 10. All rights reserved.</li><li>Design: <a href="http://html5up.net">HTML5 UP</a></li>
					</ul>

			</div>

			<script>
			// Get the modal
			var modal = document.getElementById('id01');

			// When the user clicks anywhere outside of the modal, close it
			window.onclick = function(event) {
					if (event.target == modal) {
							modal.style.display = "none";
					}
			}
			</script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/jquery.scrollzer.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

	</body>
</html>
