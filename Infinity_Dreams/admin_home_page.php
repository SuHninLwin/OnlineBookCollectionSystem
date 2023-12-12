<?php 

    include 'database_connect.php';
    
    session_start();
    
    $user = $_SESSION["user_Name"];

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Dreamy Stories Admin Home Page</title>

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

		.home_div
		{
			height: 500px;
			margin-top: 10px;
			background-color: black; 
			overflow: scroll;
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
			color: black;
		}
		
		.free_ad_division
		{
			height: 50px;
			width: 1424px;
			margin-top: 0px;
			background-color: black;
			color: pink;
			font-family: Snell Roundhand; 
			font-size: 38px;
			padding-top: 2px;
			font-style: bold;
			animation-name: text_color_changing;
  			animation-duration: 5s;
  			animation-delay: 5s;
  			animation-iteration-count: infinite;
		}

		.back_to_sign_up_btn
		{
			background-color: black; 
			height: 40px; 
			width: 220px;
			border: 2px solid pink; 
			border-radius: 10px;
			color: pink; 
			font-size: 25px;
			font-style: bold; 
			font-family: Snell Roundhand; 
			margin-left: 230px;
			transition: all 0.5s;
  			cursor: pointer;
  			padding-top: 2px;
			box-shadow: 0 0 10px 0 pink inset, 0 0 10px 3px pink;
  			animation: btn_animation_left_right 0.5s infinite alternate;
  			position: relative;
		}

		@keyframes btn_animation_left_right 
		{
  			from {left: 0px;}
  			to {left: 10px;}
		}

		.back_to_sign_up_btn span
		{
			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.5s;
		}

		.back_to_sign_up_btn span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.5s;
		}

		.back_to_sign_up_btn:hover span 
		{
  			padding-right: 25px;
		}

		.back_to_sign_up_btn:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		.signup_form_right
		{
			background-color: black; 
			height: 440px;
			width: 1424px;
			margin-top: 10px;
			overflow: scroll;
			scroll-behavior: smooth;
		}

  		.flip-card 
  		{
  			background-color: black;
  			width: 220px;
			height: 350px;
  			perspective: 1000px;
  			margin-left: 55px;
			margin-top: 50px;
			float: left;
			border: 2px solid pink; 
			border-radius: 20px;
			color: pink; 
			box-shadow: 0 0 10px 0 pink inset, 0 0 10px 3px pink;
		}

		.admin_btn
		{
			height: 150px;
			width: 1424px;
			background-color: black;
			float: left;
			margin-top: 20px;
		}

		.img
		{
			height: 300px;
			width: 300px;
			margin-top: 30px;
			margin-left: 130px;
			float: left;
			border-radius: 20px;
			box-shadow: 0 4px 8px 0 pink, 0 6px 20px 0 pink;
		}

		.genre_name
		{
			background-color: black;
			height: 70px;
			padding-left: 70px;
			color: pink;
			font-size: 45px;
			padding-top: 20px;
			float: left;
		}

		.btn_genre
		{
			background-color: black; 
			width: 300px;
			height: 60px;
			border-color: transparent;
			color: pink; 
			text-align: center;
			font-size: 40px;
			font-style: bold; 
			font-family: Phosphate; 
			transition: all 0.5s;
  			cursor: pointer;
  			padding-top: 2px;
  			position: relative;
  			margin-left: 60px;
  			margin-top: 30px;
  			text-shadow: 2px 2px 3px black, 0 0 25px pink, 0 0 5px black;
		}

		.btn_genre span
		{
			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.5s;
		}

		.btn_genre span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.5s;
		}

		.btn_genre:hover span 
		{
  			padding-right: 50px;
		}

		.btn_genre:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		.genre_book
		{
			height: 400px;
			background-color: black;
			float: left;
			width: 1424px;
			border-bottom: 2px dashed pink;
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

		<div class="home_div">
			
			<div class="images_for_btn">
				
				<div class="img">
					<img src="images/user.jpg" style="width: 280px; height: 280px; padding-left: 20px; padding-top: 20px;">
				</div>

				<div class="img">
					<img src="images/book.jpg" style="width: 280px; height: 280px; padding-left: 20px; padding-top: 20px;">
				</div>

				<div class="img">
					<img src="images/readinglist.jpeg" style="width: 280px; height: 280px; padding-left: 20px; padding-top: 20px;">
				</div>

			</div>

			<div class="admin_btn">
				
				<div class="genre_name">
					<button class="btn_genre">
						<span onclick="window.location.href='admin_user_page.php';">Users</span>
					</button>
				</div>

				<div class="genre_name">
					<button class="btn_genre">
						<span onclick="window.location.href='admin_book_page.php';">Books</span>
					</button>
				</div>

				<div class="genre_name">
					<button class="btn_genre">
						<span onclick="window.location.href='admin_readinglist_page.php';">ReadingList</span>
					</button>
				</div>

			</div>
			
			<div class="images_for_btn">
				
				<div class="img">
					<img src="images/reports.jpg" style="width: 280px; height: 280px; padding-left: 20px; padding-top: 20px;">
				</div>

				<div class="img">
					<img src="images/viewdata.jpg" style="width: 280px; height: 280px; padding-left: 20px; padding-top: 20px;">
				</div>

				<div class="img">
					<img src="images/logout.jpg" style="width: 280px; height: 280px; padding-left: 20px; padding-top: 20px;">
				</div>

			</div>

			<div class="admin_btn">
				
				<div class="genre_name">
					<button class="btn_genre">
						<span onclick="window.location.href='admin_report_page.php';">Reports</span>
					</button>
				</div>

				<div class="genre_name">
					<button class="btn_genre">
						<span onclick="window.location.href='admin_view_data_page.php';">View Data</span>
					</button>
				</div>

				<div class="genre_name">
					<button class="btn_genre">
						<span onclick="window.location.href='logout_page.php';">Logout</span>
					</button>
				</div>

			</div>

		</div>

		<div class="footer_container_full">

				<div class="footer_left">

					<h3 class="infinity_dreams_logo">&#10017; Infinity Dreams &#10017; <br> -<?php echo $user; ?>- </h3>

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