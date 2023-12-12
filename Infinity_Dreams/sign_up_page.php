<?php 

    include 'database_connect.php';
    
    $User_Name = ""; 
    $User_Email = ""; 
    $User_Password = ""; 
    $User_RePassword = ""; 
    
    if(isset($_POST['submit']))
    {
        $User_Name = $_POST["User_Name"];
        $User_Email = $_POST["User_Email"];
        $User_Password = $_POST["User_Password"];
        $User_RePassword = $_POST["User_RePassword"];
        
        if($User_Password == $User_RePassword)
        {
            try
            {
                $qy = "INSERT INTO User (user_Name, user_Email, user_Password, user_Level)
                                VALUES('$User_Name', '$User_Email', '$User_Password', 'User')";
                $db->exec($qy);
                
                echo "<script type='text/javascript'> alert('Your registeration is successfully done! 
                        You can go back and login to get unlimited assess');</script>";
            }
            catch (Exception $exception)
            {
                echo $db. "<br>" . $exception->getMessage();
            }
        }
    }

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Dreamy Stories Sign Up Page</title>

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

		.signup_container_full
		{
			height: 500px;
			margin-top: 10px; 
			background-color: black;
		}

		.signup_image_adv
		{
			height: 470px;
			width: 740px;
			margin-top: 15px;
			margin-left: 10px;
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
			font-family: Snell Roundhand, Snell Roundhand, Snell Roundhand;
			font-size: 25px;
			color: pink;
		}

		.signup_images_adv_left
		{
			width: 800px;
			height: 500px;
			float: left;
		}

		input[type=text], input[type=password], input[type=Email] 
		{
  			width: 250px;
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

		.imgcontainer 
		{
  			text-align: center;
  			margin: 18px 0 10px 0;
  			position: relative;
		}

		img.avatar 
		{
  			width: 100px;
  			height: 100px;
  			border-radius: 50px;
  			background-color: transparent; 	
  		}

		.signup_form_right
		{
			background-color: black; 
			width: 624px;
			height: 500px;
			float: left; 
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

		<div class="signup_container_full">
			
			<div class="signup_container_ad">

				<div class="signup_images_adv_left">
					
					<img class="signup_image_adv" src="images/book_store_images_sign_up.jpg">

				</div>

				<div class="signup_form_right">

					<form method="post">

						<div class="imgcontainer">
      						&#10017;&#10017;&#10017; <img src="images/Logo1.png" alt="Avatar" class="avatar"> &#10017;&#10017;&#10017;
    					</div>

						<table>
					
							<tr>
						
								<td style="padding-left: 60px;">
									<label for="uname"><b>Username</b></label>
								</td>
								<td style="padding-left: 75px;">
									<input type="text" placeholder="Enter Username" name="User_Name" required>
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 60px;">
									<label for="Email"><b>Email</b></label>
								</td>
								<td style="padding-left: 75px;">
									<input type="Email" placeholder="Enter Email" name="User_Email" required>
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 60px;">
									<label for="psw"><b>Password</b></label>
								</td>
								<td style="padding-left: 75px;">
									<input type="password" placeholder="Enter Password" name="User_Password" required>
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 55px;">
									<label for="psw"><b>Confirm Password</b></label>
								</td>
								<td style="padding-left: 75px;">
									<input type="password" placeholder="Re-enter Password" name="User_RePassword" required>
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 58px;">
									<button type="submit" name="submit" style="font-style: Snell Roundhand;">Submit</button>
								</td>
								<td>
									<button type="reset" style="font-style: Snell Roundhand;">Cancel</button>
								</td>

							</tr>

							<tr>
								<td></td>
								<td style="padding-left: 85px; padding-top: 10px;">
									<span class="psw"><a href="login_page.php">Back to login!</a></span>
								</td>
								
							</tr>

						</table>

					</form>

				</div>

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

	</body>

</html>