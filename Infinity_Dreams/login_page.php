<?php 

    include 'database_connect.php';
    
    session_start(); 
    
    if(isset($_POST['login']))
    {
        if($_POST['useremail'] != "" || $_POST['password'] != "")
        {
            $em = $_POST['useremail'];
            $pw = $_POST['password'];
            
            $qy = "SELECT * FROM `User` WHERE `user_Email` =? AND `user_Password` =?";
            
            $res = $db->prepare($qy);
            $res->execute(array($em, $pw));
            $row = $res->rowCount();
            $fetch = $res->fetch();
            
            $e=$_POST['useremail'];
            $p = $_POST['password'];
            
            $viewquery="SELECT * FROM User WHERE user_Email='". $e."' AND user_Password='". $p."'";
            
            foreach ($db->query($viewquery) as $row)
            {
                $level = $row['user_Level']; 
                
                if($level == "Admin")
                {
                    $_SESSION["user_Name"] = $row[1];
                    $_SESSION["user_level"] = $row[4];
                    header("Location: admin_home_page.php");
                }
                else if($level == "User")
                {
                    $_SESSION["user_ID"] = $row[0];
                    $_SESSION["user_Name"] = $row[1];
                    $_SESSION["user_level"] = $row[4];
                    header("Location: user_home_page.php");
                }
            }
        }
        echo '<script type="text/javascript">';
        echo 'alert("Login Failed! Please try again.")';
        echo '</script>';
    }
    
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Dreamy Stories Login Page</title>

		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<style type="text/css">

		.infinity_dreams
		{
			height: 120px;
			background-image: url(images/header_backup_4.gif);
			background-color: black; 
			text-align: center;
			color: pink;
			text-shadow: 3px 3px black; 
			font-family: Snell Roundhand; 
			font-size: 80px;
			font-style: bold;  
			animation-name: text_color_changing;
  			animation-duration: 5s;
  			animation-delay: 5s;
  			animation-iteration-count: infinite;
		}

		.login_container_full
		{
			height: 500px;
			margin-top: 10px; 
			background-color: black;
		}

		@keyframes text_color_changing 
		{
  			from 
  			{
  				color: white;
  			}
  			to 
  			{
  				color: pink;
  			}
		}

		* 
		{
			box-sizing: border-box;
		}

		body 
		{
			font-family: Verdana, sans-serif;
		}

		.mySlides 
		{	
			display: none;
		}

		img 
		{
			vertical-align: middle;
		}

		.login_container_ad
		{
			height: 500px; 
			width: 1000px;
			float: left;
			background-color: black;
  			position: relative;
  			margin: auto;
		}

		.text 
		{
  			color: #f2f2f2;
  			font-size: 40px;
  			padding: 8px 12px;
  			position: absolute;
  			bottom: 8px;
  			width: 100%;
  			text-align: center;
  			color: pink;
  			font-family: bold; 
		}

		.numbertext 
		{
  			color: #f2f2f2;
  			font-size: 12px;
  			padding: 8px 12px;
  			position: absolute;
  			top: 0;
		}

		.dot 
		{
  			height: 5px;
  			width: 5px;
  			margin: 0 2px;
  			background-color: #bbb;
  			border-radius: 50%;
  			display: inline-block;
  			transition: background-color 2s ease;
		}

		.active 
		{
  			background-color: #717171;
		}

		.fade 
		{
  			-webkit-animation-name: fade;
  			-webkit-animation-duration: 5s;
  			animation-name: fade;
  			animation-duration: 5s;
		}

		@-webkit-keyframes fade 
		{
  			from 
  			{
  				opacity: .4
  			} 

  			to 
  			{
  				opacity: 1
  			}
		}

		@keyframes fade 
		{
  			from 
  			{
  				opacity: .4
  			} 

  			to 
  			{
  				opacity: 1
  			}
		}

		@media only screen and (max-width: 300px) 
		{
  			.text 
  			{
  				font-size: 11px
  			}
		}

		.login_container_choice_button
		{
			height: 500px; 
			width: 410px;
			margin-left: 14px;
			float: left;
			background-color: black; 
		}

		.Login
		{
			margin-top: 85px;
			background-color: black; 
			height: 50px; 
			width: 200px;
			border: 2px solid pink; 
			border-radius: 10px;
			color: pink; 
			font-size: 30px;
			font-style: bold; 
			text-align: center;
			font-family: Snell Roundhand; 
			margin-left: 100px;
			transition: all 0.1s;
  			cursor: pointer;
  			padding-top: 2px;
  			box-shadow: 0 0 10px 0 pink inset, 0 0 10px 3px pink;
		}

		.Login span
		{
			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.1s;
		}

		.Login span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.1s;
		}

		.Login:hover span 
		{
  			padding-right: 25px;
		}

		.Login:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		.Free_Reading
		{
			margin-top: 80px;
			background-color: black; 
			height: 50px; 
			width: 200px;
			border: 2px solid pink; 
			border-radius: 10px;
			color: pink; 
			font-size: 30px;
			font-style: bold; 
			text-align: center;
			font-family: Snell Roundhand; 
			margin-left: 100px;
			transition: all 0.1s;
  			cursor: pointer;
  			padding-top: 2px;
  			box-shadow: 0 0 10px 0 pink inset, 0 0 10px 3px pink;
		}

		.Free_Reading span
		{
			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.1s;
		}

		.Free_Reading span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.1s;
		}

		.Free_Reading:hover span 
		{
  			padding-right: 25px;
		}

		.Free_Reading:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		.Sign_Up
		{
			margin-top: 80px;
			background-color: black; 
			height: 50px; 
			width: 200px;
			border: 2px solid pink; 
			border-radius: 10px;
			color: pink; 
			font-size: 30px;
			font-style: bold; 
			font-family: Snell Roundhand; 
			margin-left: 100px;
			transition: all 0.1s;
  			cursor: pointer;
  			padding-top: 2px; 
  			box-shadow: 0 0 10px 0 pink inset, 0 0 10px 3px pink;
		}

		.Sign_Up span
		{
			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.1s;
		}

		.Sign_Up span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.1s;
		}

		.Sign_Up:hover span 
		{
  			padding-right: 25px;
		}

		.Sign_Up:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		body 
		{
			font-family: Snell Roundhand, Snell Roundhand, Snell Roundhand;
			font-size: 25px;
			color: black;
		}

		input[type=text], input[type=password] 
		{
  			width: 100%;
  			height: 35px;
  			padding: 12px 20px;
  			margin: 8px 0;
  			display: inline-block;
  			border: 2px solid pink;
  			border-radius: 20px;
  			box-sizing: border-box;
  			font-size: 17px;
  			font-family: Times New Romen;
  			background-color: black;
  			color: pink; 
		}

		button 
		{
  			background-color: black;
  			color: pink;
  			font-family: Snell Roundhand; 
  			font-size: 20px;
  			font-style: bold; 
  			border-radius: 15px;
  			padding: 14px 20px;
  			margin: 8px 0;
  			cursor: pointer;
  			width: 100px;
  			height: 40px;
  			padding-top: 3px; 
  			margin-top: 25px;
  			margin-left: 90px;
		}

		button:hover 
		{
  			background-color: pink;
  			border: 2px solid pink;
  			color: black; 
		}

		.cancelbtn 
		{
  			background-color: pink;
  			color: black;
  			font-family: Snell Roundhand; 
  			font-size: 20px;
  			font-style: bold; 
  			border-radius: 15px;
  			padding: 14px 20px;
  			margin: 8px 0;
  			cursor: pointer;
  			width: 100px;
  			height: 40px;
  			padding-top: 3px; 
  			margin-top: 25px;
  			margin-left: 70px;
		}

		.imgcontainer 
		{
  			text-align: center;
  			margin: 24px 0 12px 0;
  			position: relative;
		}

		img.avatar 
		{
  			width: 100px;
  			height: 100px;
  			border-radius: 50px;
  			background-color: transparent; 	
  		}

		.container 
		{
  			padding: 16px;
		}

		span.psw 
		{
  			float: right;
  			padding-top: 16px;
		}

		.modal 
		{
  			display: none; 
  			position: fixed; 
  			z-index: 1;
  			left: 0;
  			top: 0;
  			width: 600px; 
  			height: 650px; 
  			overflow: auto; 
  			padding-top: 23px;
  			margin-top: 105px;
  			margin-left: 422px;
  			background-color: transparent;
  			color: pink; 
		}

		.modal-content 
		{
  			background-color: #fefefe;
  			border: 1px solid #888;
  			margin-left: 50px;
  			width: 500px; 
  			height: 520px;
  			background-color: black;
  			border: 4px pink solid; 
  			border-radius: 30px; 
		}

		.close 
		{
  			position: absolute;
  			right: 25px;
  			top: 0;
  			font-size: 35px;
  			font-weight: bold;
  			color: pink; 
		}

		.close:hover, .close:focus 
		{
  			font-size: 45px;
  			color: pink;
  			text-decoration: underline;
  			cursor: pointer;
		}

		.animate 
		{
  			-webkit-animation: animatezoom 0.6s;
  			animation: animatezoom 0.6s
		}

		@-webkit-keyframes animatezoom 
		{
  			from 
  			{
  				-webkit-transform: scale(0)
  			} 
  			
  			to 
  			{
  				-webkit-transform: scale(1)
  			}
		}
  
		@keyframes animatezoom 
		{
  			from 
  			{
  				transform: scale(0)
  			} 
  			
  			to 
  			{
  				transform: scale(1)
  			}
		}

		@media screen and (max-width: 300px) 
		{
  			span.psw 
  			{
     			display: block;
     			float: none;
  			}
  			
  			.cancelbtn 
  			{
     			width: 100%;
  			}
		}

		.footer_container_full
		{
			height: 180px; 
			margin-top: 10px; 
			background-color: black;
		}

		.infinity_dreams_logo
		{ 
			color: pink;
			background-color: transparent; 
			height: 180px;
			margin-top: 0px; 
			font-size: 48px;
			text-decoration: bold; 
			text-align: center;
			padding-top: 50px; 
			font-family: Snell Roundhand; 
			background-image: url(images/header_backup_4.gif);
			animation-name: text_color_changing;
  			animation-duration: 5s;
  			animation-delay: 5s;
  			animation-iteration-count: infinite;
		}

		.footer_left
		{
			height: 180px;
			width: 420px; 
			background-color: black; 
			float: left;
			color: pink;
			text-align: center;
		}

		.footer_center
		{
			height: 180px;
			width: 594px; 
			background-color: black; 
			float: left;
		}

		.social_media
		{
			height: 125px;
			width: 594px; 
			background-color: transparent; 
			float: left;
		}

		.fa
		{
			padding-top: 50px;
			padding-left: 100px;
  			font-size: 40px;
  			width: 40px;
  			text-align: center;
  			text-decoration: none;
  			margin: 5px 2px;
  			animation-name: text_color_changing;
  			animation-duration: 5s;
  			animation-delay: 5s;
  			animation-iteration-count: infinite;
		}

		.fa:hover
		{
			opacity: 0.7;
		}

		.about_us
		{
			height: 55px; 
			background-color: black;
			width: 594px; 
			color: pink; 
			font-size: 45px;
			font-style: bold;
			text-decoration: underline; 
			font-family: Snell Roundhand; 
  			padding-top: 12px;
  			text-align: center;
		}

		.about_us:hover
		{
			color: pink;
			text-decoration: oblique;
			font-size: 30px; 
		}

		.about_us_full 
		{
  			background-color: transparent;
  			padding: 20px;
  			height: 125px;
  			width: 450px;
  			margin-left: 70px;
  			display: none;
  			color: white;
  			font-size: 22px;
  			text-align: center;
  			padding-top: 0px;
		}
  
		.about_us:hover + .about_us_full
		{
  			display: block;
		}

		.footer_right
		{
			height: 180px;
			width: 410px; 
			background-color: black; 
			float: left;
			background-image: url(images/header_backup_4.gif) ;
		}

		.contact_us
		{
			height: 50px; 
			width: 200px; 
			color: pink; 
			font-size: 30px;
			font-style: bold; 
			text-align: center;
			font-family: Snell Roundhand; 
			margin-left: 100px;
  			padding-top: 12px;
  			animation-name: text_color_changing;
  			animation-duration: 5s;
  			animation-delay: 5s;
  			animation-iteration-count: infinite;
		}

		.contact_us:hover
		{
			color: pink;
			text-decoration: underline;
			font-size: 35px; 
		}

		.contact_us_full 
		{
  			background-color: transparent;
  			padding: 20px;
  			height: 130px;
  			width: 280px;
  			margin-left: 70px;
  			display: none;
  			color: white;
  			font-size: 20px;
  			text-align: center;
  			padding-top: 1px;
		}
  
		.contact_us:hover + .contact_us_full
		{
  			display: block;
		}

		.get_help
		{
			height: 50px; 
			width: 200px; 
			color: pink; 
			font-size: 30px;
			font-style: bold; 
			text-align: center;
			font-family: Snell Roundhand; 
			margin-left: 100px;
  			padding-top: 12px;
		}

		.our_policy
		{
			height: 50px; 
			width: 200px; 
			color: pink; 
			font-size: 30px;
			font-style: bold; 
			text-align: center;
			font-family: Snell Roundhand; 
			margin-left: 100px;
  			padding-top: 16px;
		}

		a:link
		{
			color: pink; 
			text-decoration: none;
			animation-name: text_color_changing;
  			animation-duration: 5s;
  			animation-delay: 5s;
  			animation-iteration-count: infinite; 
		}

		a:visited
		{
			color: pink;
			text-decoration: none;
		}

		a:hover
		{
			color: pink;
			text-decoration: underline;
			font-size: 35px; 
		}

		a:active
		{
			color: pink; 
			text-decoration: none;
		}

	</style>

	</head>

	<body>

		<div class="infinity_dreams">&#10017; Infinity Dreams &#10017;</div>

		<div class="login_container_full">
			
			<div class="login_container_ad">
				
				<div class="mySlides fade">
  					<div class="numbertext">1 / 3</div>
  					<img src="images/Novel_adv.png" style="height: 440px; width: 1000px;">
  					<div class="text">Novel</div>
				</div>

				<div class="mySlides fade">
  					<div class="numbertext">2 / 3</div>
  					<img src="images/Detective_and_Mystery_adv.png" style="height: 430px; width: 850px; padding-left: 140px;">
  					<div class="text">Detective and Mystery</div>
				</div>

				<div class="mySlides fade">
  					<div class="numbertext">3 / 3</div>
  					<img src="images/Fantasy_adv.jpg" style="height: 430px; width: 800px; padding-left: 200px;">
  					<div class="text">Fantasy</div>
				</div>

				<br>

				<div style="text-align:center">
  					<span class="dot"></span> 
  					<span class="dot"></span> 
  					<span class="dot"></span> 
				</div>

			</div>

			<div class="login_container_choice_button">
				
				<button class="Login" onclick="document.getElementById('id01').style.display='block'"><span>Login Now</span></button>

				<div id="id01" class="modal">
  
  					<form class="modal-content animate" action="#" method="post">

    					<div class="imgcontainer">
      						<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
      						&#10017;&#10017;&#10017; <img src="images/Logo1.png" alt="Avatar" class="avatar"> &#10017;&#10017;&#10017;
    					</div>

    					<div class="container">
      						<label for="uname"><b>Username</b></label>
      						<input type="text" placeholder="Enter Username" name="useremail" id="useremail" value="" required>

      						<br><br>

      						<label for="psw"><b>Password</b></label>
      						<input type="password" placeholder="Enter Password" name="password" id="password" value="" required>
        
      						<button type="submit" name="login" style="font-style: Snell Roundhand;">Login</button>

      						<button type="reset" style="font-style: Snell Roundhand;">Cancel</button>

      						<br><br>
      						<span class="psw"><a href="sign_up_page.php">Don't have an account!</a></span>
    					</div>
  					</form>
				</div>

				<script>

					var modal = document.getElementById('id01');

					window.onclick = function(event) 
					{
    					if (event.target == modal) 
    					{
        					modal.style.display = "none";
    					}
					}
				</script>

				<button class="Free_Reading" onclick="window.location.href='home_page.php';"><span>Get Free</span></button>

				<button class="Sign_Up" onclick="window.location.href='sign_up_page.php';"><span>Sign Up</span></button>

			</div>

		</div>

		<div class="footer_container_full">

				<div class="footer_left">

					<h3 class="infinity_dreams_logo">&#10017; Infinity Dreams &#10017;</h3>

				</div>

				<div class="footer_center">
					
					<div class="about_us"><span>Our Vision</span></div>
						<div class="about_us_full">

							<p>
								Our Company, Infinity Dreams Ltd, is established for book lovers. We aim for any users being able to read books during this pandemic.   
							</p>

						</div>

					<div class="social_media">

						<a href="https://www.facebook.com" class="fa fa-facebook"></a>
						<a href="https://twitter.com" class="fa fa-twitter"></a>
						<a href="https://www.google.com/?client=safari" class="fa fa-google"></a>
						<a href="https://www.redditinc.com" class="fa fa-reddit"></a>
						
					</div>

				</div>

				<div class="footer_right">

					<div class="contact_us"><span>Contact Us &#9743;</span></div>
						<div class="contact_us_full">

							<p>
								&#128241; (+95) 944 477 1857
								<br>
								&#128231; InfinityDreams@gmail.com
								<br>
								&#127760; InfinityDreams.org.mm 
							</p>

						</div>

					<div class="get_help"><a href="#">Get Help &#9831;</a></div>
					<div class="our_policy"><a href="#">Our Policy &#9997;</a></div>

				</div>

		</div>

		<script>

		var slideIndex = 0;
		showSlides();

		function showSlides() 
		{
  			var i;
  			var slides = document.getElementsByClassName("mySlides");
  			var dots = document.getElementsByClassName("dot");
  			
  			for (i = 0; i < slides.length; i++) 
  			{
    			slides[i].style.display = "none";  
  			}

  			slideIndex++;

  			if (slideIndex > slides.length) 
  			{
  				slideIndex = 1
  			} 

  			for (i = 0; i < dots.length; i++) 
  			{	
    			dots[i].className = dots[i].className.replace(" active", "");
  			}

  			slides[slideIndex-1].style.display = "block";  
  			dots[slideIndex-1].className += " active";
  			setTimeout(showSlides, 2000);
		}
		</script>

	</body>

</html>