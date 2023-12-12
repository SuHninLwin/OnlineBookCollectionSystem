<?php 

    include 'database_connect.php';
    
    session_start();

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Dreamy Stories Admin ReadingList Page</title>

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
			color: pink;
		}
		
		.insert_update_delete_search
		{
			margin-top: 10px;
			height: 70px;
			width: 880px;
			background-color: black;
			border: 3px solid pink; 
			border-radius: 20px; 
			margin-left: 270px;
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
  			margin-top: 5px;
  			margin-left: 90px;
		}

		button:hover 
		{
  			background-color: pink;
  			border: 2px solid pink;
  			color: black; 
		}

		.view_div
		{
			margin-top: 10px;
			margin-bottom: 10px;
			height: 480px;
			width: 1424px;
			background-color: black; 
		}

		.user_title
		{
			height: 80px;
			width: 1424px;
			background-color: black; 
			font-size: 50px;
			text-align: center;
			padding-top: 10px;
			text-decoration: underline;
		}

		.view_user_table
		{
			height: 400px;
			width: 1424px; 
			background-color: black; 
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

			<div class="insert_update_delete_search">
				
				<div class="insert_update_delete_search_form">
					
					<table>

						<tr>
								
							<td style="padding-top: 5px;">
									
								<button style="font-style: Snell Roundhand;" onclick="window.location.href='admin_book_page.php';"><span>Books</span></button>
								<button style="font-style: Snell Roundhand;" onclick="window.location.href='admin_user_page.php';"><span>Users</span></button>

							</td>

							<td style="padding-top: 5px;">
									
								<button style="font-style: Snell Roundhand;" onclick="window.location.href='admin_report_page.php';"><span>Report</span></button>
								<button style="font-style: Snell Roundhand;" onclick="window.location.href='admin_home_page.php';"><span>Home</span></button>
							</td>

						</tr>

					</table>

				</div>

			</div>

			<div class="view_div">
				
				<div class="user_title">Reading List Table</div>
				
				<div class="view_user_table">
				
					<div class="show_table">
  				
  					<?php
  					
  					     $viewquery = "SELECT ReadingList.readingList_ID, User.user_Name AS `User_name`, Book.book_Title AS `Book_name`, ReadingList.date 
                                            FROM ReadingList, User, Book 
                                                   WHERE ReadingList.user_ID = User.user_ID AND ReadingList.book_ID = Book.book_ID 
                                                        GROUP BY readingList_ID";
  					
  				         echo "<table border= '2' color= 'pink' border-style=' groove' width='100%'>";
  					     echo "<tr> 
                               
                               <th>ReadingList ID</th> 
                               <th>Book ID</th> 
                               <th>User ID</th> 
                               <th>Date</th>";
  					     
  					     foreach($db->query($viewquery)as $row)
  					     {
  					        echo "<tr>";
  					        
  					        echo "<td>". $row['readingList_ID']."</td>";
  					        echo "<td>". $row['Book_name']."</td>";
  					        echo "<td>". $row['User_name']."</td>";
  					        echo "<td>". $row['date']."</td>";
  					        
  					        echo "</tr>";
  					     }
  					     echo "</table>";
  					
                    ?>
  				
  					</div>
				
				</div>

			</div>
			
		</div>

		<div class="footer_container_full">

				<div class="footer_left">

					<h3 class="infinity_dreams_logo"> &#10017;Infinity Dreams &#10017; <br> -R_Lists- </h3>

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