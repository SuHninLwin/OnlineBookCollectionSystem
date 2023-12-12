<?php 

    include 'database_connect.php';
    
    session_start();
    
    $user = $_SESSION["user_Name"];
    
?>

<!DOCTYPE html>
<html>

	<head>
		<title>Dreamy Stories Admin Report Page</title>
		
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

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

		.signup_container_full
		{
			height: 500px;
			margin-top: 10px; 
			background-color: black;
			overflow: scroll;
		}

		.left_buttons
		{
			height: 500px;
			width: 300px;
			background-color: white; 
			float: left;
		}

		.right_report_table
		{
			height: 500px;
			width: 1124px; 
			background-color: white; 
			float: left;
			border: 2px solid black;
		}

		.tabs
		{
			height: 50px;
			color: pink;
			font-size: 30px;
			background-color: white;
		}

		.btn_tab1
		{
			background-color: black; 
			width: 260px;
			height: 58px;
			border: 2px solid pink;
			color: pink; 
			text-align: center;
			font-size: 30px;
			padding-top: 10px;
			font-style: bold; 
			font-family: Snell Roundhand; 
			transition: all 0.5s;
  			cursor: pointer;
  			padding-top: 2px;
  			position: relative;
  			margin-left: 20px;
  			margin-top: 105px;
  			border-radius: 50px;
  		}

  		.btn_tab1:hover
  		{
  			background-color: pink;
  			font-family: Snell Roundhand; 
  			border: 2px solid black; 
  			color: black; 
  			font-size: 30px;
  			border-radius: 50px;
  		}

  		.btn_tab1 span
		{
			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.04s;
		}

		.btn_tab1 span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.04s;
		}

		.btn_tab1:hover span 
		{
  			padding-right: 25px;
		}

		.btn_tab1:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		.btn_tab2
		{
			background-color: black; 
			width: 260px;
			height: 58px;
			border: 2px solid pink;
			color: pink; 
			text-align: center;
			font-size: 30px;
			padding-top: 10px;
			font-style: bold; 
			font-family: Snell Roundhand; 
			transition: all 0.5s;
  			cursor: pointer;
  			padding-top: 2px;
  			position: relative;
  			margin-left: 20px;
  			margin-top: 50px;
  			border-radius: 50px;
  		}

  		.btn_tab2:hover
  		{
  			background-color: pink;
  			font-family: Snell Roundhand; 
  			border: 2px solid black; 
  			color: black; 
  			font-size: 30px;
  			border-radius: 50px;
  		}

  		.btn_tab2 span
		{
			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.04s;
		}

		.btn_tab2 span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.04s;
		}

		.btn_tab2:hover span 
		{
  			padding-right: 25px;
		}

		.btn_tab2:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		.btn_tab3
		{
			background-color: black; 
			width: 260px;
			height: 58px;
			border: 2px solid pink;
			color: pink; 
			text-align: center;
			font-size: 30px;
			padding-top: 10px;
			font-style: bold; 
			font-family: Snell Roundhand; 
			transition: all 0.5s;
  			cursor: pointer;
  			padding-top: 2px;
  			position: relative;
  			margin-left: 20px;
  			margin-top: 50px;
  			border-radius: 50px;
  		}

  		.btn_tab3:hover
  		{
  			background-color: pink;
  			font-family: Snell Roundhand; 
  			border: 2px solid black; 
  			color: black; 
  			font-size: 30px;
  			border-radius: 50px;
  		}

  		.btn_tab3 span
		{
			cursor: pointer;
  			display: inline-block;
  			position: relative;
  			transition: 0.04s;
		}

		.btn_tab3 span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.04s;
		}

		.btn_tab3:hover span 
		{
  			padding-right: 25px;
		}

		.btn_tab3:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

  		.modal 
		{
  			display: none; 
  			position: fixed; 
  			z-index: 1;
  			left: 0;
  			top: 0;
  			width: 730px; 
  			height: 420px; 
  			overflow: auto; 
  			padding-top: 23px;
  			margin-top: 140px;
  			margin-left: 310px;
  			background-color: transparent;
  			color: pink; 
		}

		.modal-content 
		{
  			background-color: #fefefe;
  			border: 1px solid #888;
  			margin-left: 50px;
  			width: 1120px; 
  			height: 496px;
  			margin-left: 310px;
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

		#myInput 
		{
  			width: 665px;
  			height: 50px;
  			padding-left: 10px;
  			margin-top: 45px;
  			margin-left: 30px;
  			font-size: 15px;
  			border: 2px solid pink;
  			border-radius: 20px;
  			margin-bottom: 12px;
  			color: pink;
  			background-color: transparent;
  			overflow: scroll;
		}

		#myUL 
		{
  			list-style-type: none;
  			padding: 0;
  			margin: 0;
  			color: pink;
  			margin-left: 30px;
  			animation: none; 
		}

		#myUL li a 
		{
  			margin-top: -1px; 
  			background-color: transparent;
  			padding: 12px;
  			text-decoration: none;
  			font-size: 18px;
  			color: black;
  			display: block;
  			color: pink;
  			font-size: 25px;
  			animation: none; 
		}

		#myUL li a:hover:not(.header) 
		{
  			background-color: pink;
  			border-radius: 20px;
  			color: black;
  			width: 665px;
  			animation: none; 
		}

		.genre_name
		{
			background-color: black;
			height: 70px;
			padding-left: 60px;
			color: pink;
			font-size: 45px;
			padding-top: 20px;
			float: left;
		}

		.btn_genre
		{
			background-color: black; 
			width: 200px;
			height: 60px;
			border-color: transparent;
			color: pink; 
			text-align: left;
			font-size: 40px;
			font-style: bold; 
			font-family: Snell Roundhand; 
			transition: all 0.5s;
  			cursor: e-resize;
  			padding-top: 2px;
  			position: relative;
		}

		.btn_genre span
		{
			cursor: e-resize;
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

		.btn_rl
		{
			background-color: black; 
			width: 500px;
			height: 60px;
			border-color: transparent;
			color: pink; 
			text-align: left;
			font-size: 40px;
			font-style: bold; 
			font-family: Snell Roundhand; 
			transition: all 0.5s;
  			cursor: e-resize;
  			padding-top: 2px;
  			position: relative;
		}

		.btn_rl span
		{
			cursor: e-resize;
  			display: inline-block;
  			position: relative;
  			transition: 0.5s;
		}

		.btn_rl span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.5s;
		}

		.btn_rl:hover span 
		{
  			padding-right: 50px;
		}

		.btn_rl:hover span:after 
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

		.flip-card 
  		{
  			background-color: black;
  			width: 220px;
			height: 350px;
  			perspective: 1000px;
  			margin-left: 55px;
			margin-top: 15px;
			float: left;
			border: 2px solid pink; 
			border-radius: 20px;
			color: pink; 
			box-shadow: 0 0 10px 0 pink inset, 0 0 10px 3px pink;
		}

		.flip-card-inner 
		{
  			position: relative;
  			width: 200px;
			height: 340px;
			margin-left: 7px;
			margin-top: 7px;
			border: 0px solid; 
			border-radius: 20px;
			color: pink; 
  			text-align: center;
  			transition: transform 0.6s;
  			transform-style: preserve-3d;
  			box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
		}

		.flip-card:hover .flip-card-inner 
		{
  			transform: rotateY(180deg);
		}

		.flip-card-front, .flip-card-back 
		{
  			position: absolute;
  			width: 200px;
			height: 340px;
			border-radius: 20px;
  			-webkit-backface-visibility: hidden;
  			backface-visibility: hidden;
		}

		.flip-card-front 
		{
  			color: black;
  			border-radius: 20px;
  			width: 200px;
			height: 340px;
		}

		.flip-card-back 
		{
			background-color: black; 
			width: 200px;
			height: 340px;
  			color: pink; 
			border-radius: 20px;
  			transform: rotateY(180deg);
		}

		.image
		{
			width: 198px;
			height: 330px;
			border-radius: 20px;
		}

		.link_hover_title
		{
			font-size: 25px;
			text-align: center;
			color: white; 
		}

		.link_hover_title:hover
		{
			font-size: 25px;  
			text-decoration: underline; 
			color: pink; 
			text-shadow: 2px 2px 5px pink;
		}	

		.link_hover_author
		{
			font-size: 25px;
			text-align: center;
			color: white;
		}

		.link_hover_genre
		{
			font-size: 25px;
			text-align: center;
			color: white;
		}

		.link_hover_list
		{
			font-size: 20px;
			font-family: Snell Roundhand; 
			border: 1px solid pink; 
			color: pink; 
			background-color: transparent;
			border-radius: 5px;
		}

		.link_hover_list:hover
		{
			border: 1px solid black; 
			color: black; 
			background-color: pink;
			border-radius: 5px;
			text-decoration: underline;
		}

		.option_check_submit
		{
			width: 1112px; 
			height: 100px; 
			background-color: transparent;
			color: white;
			margin-top: 10px;
		}

		.option
		{
			width: 400px; 
			height: 100px;
			background-color: transparent; 
			color: white;
			float: left;
		}

		.option_chose
		{
			width: 250px;
			height: 30px;
			border: 3px solid white; 
			margin-top: 5px;
			margin-left: 100px;
			font-family: Times New Romen; 
			font-size: 15px;
			border-radius: 10px;
			padding-left: 10px;
		}

		select 
		{
			width: 250px;
			height: 40px;
			border: 2px solid white;
			font-size: 20px;
			font-family: Times New Romen; 
			border-radius: 10%;
			margin-top: 25px;
			margin-left: 65px; 
			box-shadow: 2px pink; 
		}

		label
		{
			color: white;
			font-size: 25px; 
			font-family: Times New Romen;
			padding-left: 100px; 
		}

		.check
		{
			width: 400px; 
			height: 100px;
			background-color: transparent; 
			color: white;
			float: left;
			text-align: center; 
		}

		.submit_btn
		{
			width: 312px; 
			height: 100px;
			background-color: transparent; 
			color: white;
			float: left;
		}

		.submit
		{
			background-color: black; 
			width: 120px;
			height: 45px;
			border-color: 1px solid white;
			border-radius: 20px;
			color: white; 
			text-align: center;
			font-size: 16px;
			font-family: Times New Romen; 
			transition: all 0.5s;
  			padding-top: 2px;
  			position: relative;
  			margin-top: 25px;
  			margin-left: 80px;
		}

		.submit span
		{
			cursor: e-resize;
  			display: inline-block;
  			position: relative;
  			transition: 0.5s;
		}

		.submit span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.5s;
		}

		.submit:hover span 
		{
  			padding-right: 30px;
		}

		.submit:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		.table
		{
			width: 1112px; 
			height: 150px; 
			background-color: transparent;
			color: white;
			margin-top: 10px;
			border: 2px solid white;
		}
		
		.img
		{
		    width: 1112px;
		    height: 498px;
		}

		.count_display
		{
			width: 662px; 
			height: 480px;
			margin-left: 225px; 
			background-color: transparent;
			border: 2px solid white;
			color: white;
			margin-top: 10px;
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
			
			<div class="left_buttons">
				
				<button class="btn_tab1" onclick="document.getElementById('id01').style.display='block'">

					<span>
						Book Reports
					</span>

				</button>

				<button class="btn_tab2" onclick="document.getElementById('id02').style.display='block'">

					<span>
						User Reports 
					</span>

				</button>

				<button class="btn_tab3" onclick="window.location.href='admin_home_page.php';">

					<span>
						Back To Home 
					</span>

				</button>

			</div>

			<div class="right_report_table">
				
				<div>
				
					<img alt="" src="images/creating-sales-report-open-graph.png" class="img">
				
				</div>
				
				<div id="id01" class="modal modal-content animate">

  					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>

					<form action="admin_report_page.php" method="post">
  						
  						<div class="option_check_submit">
  						
  							<div class="option">
  							
  								<label>See Book Genre</label>
  								<input class="option_chose" name="book_Genre" placeholder="Enter Book Genre">

  							</div>

  							<div class="submit_btn">
  								
  								<input class="submit" type="submit" name="submit_books" value="submit">

  							</div>

  						</div>
  						
  					</form>

  					<div class="table" style="overflow: scroll;">
  						
  						<table style="font-family: Times New Romen; padding-top: 20px; padding-left: 20px;">
  							
  							<tr>
  								
  								<td style="font-size: 20px; font-style: bold; text-decoration: underline; text-align: center; width: 100px;">Book ID</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 20px; font-style: bold; text-decoration: underline; text-align: center; width: 250px;">Book Title</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 20px; font-style: bold; text-decoration: underline; text-align: center; width: 150px;">Book Genre</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 20px; font-style: bold; text-decoration: underline; text-align: center; width: 200px;">Book Author</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 20px; font-style: bold; text-decoration: underline; text-align: center; width: 150px;">Book Image</td>

  							</tr>

  							<tr style="height: 20px;"></tr>
  							
  							<?php 
  							
  					         if(isset($_POST['submit_books']))
  							 {
  							       $book_Genre = $_POST['book_Genre'];
  							           
  							       $qary = "SELECT * FROM Book WHERE book_Genre='".$book_Genre."' GROUP BY book_ID";
  							       foreach ($db->query($qary) as $row)
  							       {
  							           
  							?>

  							<tr>
  								
  								<td style="font-size: 15px; font-style: bold; text-align: center; width: 100px; color: white; overflow: scroll;">
  									<?php echo $row['book_ID']; ?>
  								</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 15px; font-style: bold;  text-align: center; width: 250px; color: white; overflow: scroll;">
  									<?php echo $row['book_Title']; ?>
  								</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 15px; font-style: bold;   text-align: center; width: 150px; color: white; overflow: scroll;">
  									<?php echo $row['book_Genre']; ?>
  								</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 15px; font-style: bold;  text-align: center; width: 200px; color: white; overflow: scroll;">
  									<?php echo $row['book_Author']; ?>
  								</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 15px; font-style: bold; text-align: center; width: 150px; color: white; overflow: scroll;">
  									<?php echo $row['book_Image']; ?>
  								</td>

  							</tr>
  							
  							<?php 
  							
  							       }
  							   }
  							       
  							?>

  						</table>
  						
  					</div>

  					<div class="count_display">
  						
  						<div style="height: 40px; font-family: Times New Romen; border: 1px solid white; text-align: center; padding-top: 5px;">Chart Report</div>

  						<div id="container_book" style="width:100%; height:400px; font-family: Times New Romen; border: 1px solid white; text-align: center; 
  						                            padding-top: 5px; font-size: 80px; font-weight: 700; padding-top: 20px;"></div>
						
  						<script type="text/javascript">

    						document.addEventListener('DOMContentLoaded', function (){
    							var options = 
    								{
    									chart:{
    										renderTo: 'container_book', 
    										type: 'pie'
    									},
    									title:
    									{
    										text: "Popularity of book"
    									},
    									series: [{}]
    								};
    
    							$.getJSON('data_book.php', function(data)
    							{
    								options.series[0].data = data;
    								var chart = new Highcharts.Chart(options) 
    							});
    					    });

						</script>
  					
  					</div>

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

				<div id="id02" class="modal modal-content animate">

  					<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>

  					<form action="admin_report_page.php" method="post">

  						<div class="option_check_submit">
  						
  							<div class="option">
  							
  								<label>See User Level</label>
  								<input class="option_chose" name="user_Level" placeholder="Enter User Level">

  							</div>

  							<div class="submit_btn">
  								
  								<input class="submit" type="submit" name="submit_users" value="submit">

  							</div>

  						</div>

  					</form>

  					<div class="table" style="overflow: scroll;">
  						
  						<table style="font-family: Times New Romen; padding-top: 20px; padding-left: 225px;">
  							
  							<tr>
  								
  								<td style="font-size: 20px; font-style: bold; text-decoration: underline; text-align: center; width: 100px;">User ID</td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 20px; font-style: bold; text-decoration: underline; text-align: center; width: 250px;">User Name</td>
  								
  								<td style="width: 50px;"></td>

  								<td style="font-size: 20px; font-style: bold; text-decoration: underline; text-align: center; width: 250px;">User Gmail</td>

  							</tr>

  							<tr style="height: 20px;"></tr>

  							<tr>
  							
  							<?php 
  							
  							       if(isset($_POST['submit_users']))
  							       {
  							           $user_Level = $_POST['user_Level'];
  							           
  							           $qary = "SELECT * FROM User WHERE user_Level='".$user_Level."' GROUP BY user_ID";
  							           foreach ($db->query($qary) as $row)
  							           {
  							           
  							?>
  								
  								<td style="font-size: 15px; font-style: bold; text-align: center; width: 100px; color: white; overflow: scroll;"><?php echo $row['user_ID']; ?></td>

  								<td style="width: 50px;"></td>

  								<td style="font-size: 15px; font-style: bold;  text-align: center; width: 250px; color: white; overflow: scroll;"><?php echo $row['user_Name']; ?></td>
  								
  								<td style="width: 50px;"></td>
  								
  								<td style="font-size: 15px; font-style: bold;  text-align: center; width: 250px; color: white; overflow: scroll;"><?php echo $row['user_Email']; ?></td>

  							</tr>
  							
  							<?php 
  							           }
  							       }
  							?>

  						</table>

  					</div>

  					<div class="count_display">
  						
  						<div style="height: 40px; font-family: Times New Romen; border: 1px solid white; text-align: center; padding-top: 5px;">Chart Report</div>

						<div id="container_user" style="width:100%; height:400px; font-family: Times New Romen; border: 1px solid white; text-align: center; padding-top: 5px; font-size: 80px; font-weight: 700; padding-top: 20px;"></div>
						
						<script type="text/javascript">

    						document.addEventListener('DOMContentLoaded', function (){
    							var options = 
    								{
    									chart:{
    										renderTo: 'container_user', 
    										type: 'pie'
    									},
    									title:
    									{
    										text: "Activity of user"
    									},
    									series: [{}]
    								};
    
    							$.getJSON('data.php', function(data)
    							{
    								options.series[0].data = data;
    								var chart = new Highcharts.Chart(options) 
    							});
    					    });

						</script>

  					</div>

				</div>

				<script>

					var modal = document.getElementById('id02');

					window.onclick = function(event) 
					{
    					if (event.target == modal) 
    					{
        					modal.style.display = "none";
    					}
					}

				</script>

			</div>

		</div>

		<div class="footer_container_full">

				<div class="footer_left">

					<h3 class="infinity_dreams_logo">&#10017; <?php echo $user; ?> &#10017;</h3>

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