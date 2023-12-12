<?php 

    include 'database_connect.php';
    
    session_start();

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Dreamy Stories Admin View Data Page</title>

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

		.btns
		{
			margin-top: 10px;
			height: 100px;
			width: 1424px; 
			background-color: black;
		}

		.btn_tabs
		{
			background-color: pink; 
			width: 260px;
			height: 58px;
			border: 2px solid white;
			color: black; 
			text-align: center;
			font-size: 30px;
			padding-top: 10px;
			font-style: bold; 
			font-family: Snell Roundhand; 
			transition: all 0.1s;
  			cursor: pointer;
  			padding-top: 2px;
  			position: relative;
  			margin-left: 73px;
  			margin-top: 20px;
  			border-radius: 20px;
  		}

  		.btn_tabs span
		{
			cursor: e-resize;
  			display: inline-block;
  			position: relative;
  			transition: 0.1s;
		}

		.btn_tabs span:after 
		{
  			content: '\00bb';
  			position: absolute;
  			opacity: 0;
  			top: 0;
  			right: -20px;
  			transition: 0.1s;
		}

		.btn_tabs:hover span 
		{
  			padding-right: 50px;
		}

		.btn_tabs:hover span:after 
		{
  			opacity: 1;
  			right: 0;
		}

		.btn_tabs:hover
		{
			background-color: black;
  			font-family: Snell Roundhand; 
  			border: 2px solid pink; 
  			color: pink; 
  			font-size: 30px;
  			text-decoration: underline;
		}

		.home_div
		{
			height: 400px;
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

		.title
		{
			height: 80px;
			width: 1424px;
			background-color: black; 
			color: pink; 
			text-align: center;
			padding-top: 15px;
			font-size: 50px;
			font-family: Snell Roundhand; 
			text-decoration: underline;
		}

		.table
		{
			height: 500px;
			width: 1424px;
			margin-top: 20px;
			background-color: black; 
			overflow: scroll;
		}

		.view_data_user
		{
			height: 600px;
			width: 1424px;
			background-color: black; 
		}

		.view_data_book
		{
			height: 600px;
			width: 1424px;
			background-color: black;  
		}

		.view_data_readinglist
		{
			height: 600px;
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

		<div class="btns">
			
			<button class="btn_tabs">
				<span onclick="window.location.href='#users';">
					Users Lists
				</span>
			</button>

			<button class="btn_tabs">
				<span onclick="window.location.href='#books';">
					Book Lists
				</span>
			</button>


			<button class="btn_tabs">
				<span onclick="window.location.href='#readinglist';">
					Reading Lists
				</span>
			</button>

			<button class="btn_tabs">
				<span onclick="window.location.href='admin_home_page.php';">
					Go Back Home
				</span>
			</button>

		</div>

		<div class="home_div">

			<div class="view_data_user" id="users">
				
				<div class="title">Users List</div>
				
				<div class="table">
				
					<div class="show_table">
  				
  					<?php
  					
  					     $viewquery = "SELECT * FROM User";
  					
  				         echo "<table border= '2' color= 'pink' border-style=' groove' width='100%'>";
  					     echo "<tr> 
                               
                               <th>User ID</th> 
                               <th>User Name</th> 
                               <th>User Email</th> 
                               <th>User Password</th> 
                               <th>User Level</th>";
  					     
  					     foreach($db->query($viewquery)as $row)
  					     {
  					        echo "<tr>";
  					        
  					        echo "<td>". $row['user_ID']."</td>";
  					        echo "<td>". $row['user_Name']."</td>";
  					        echo "<td>". $row['user_Email']."</td>";
  					        echo "<td>". $row['user_Password']."</td>";
  					        echo "<td>". $row['user_Level']."</td>";
  					        
  					        echo "</tr>";
  					     }
  					     echo "</table>";
  					
                    ?>
  				
  					</div>
				
				</div>

			</div>

			<div class="view_data_book" id="books">
				
				<div class="title">Books List</div>
				<div class="table">
				
					<div class="show_table">
  				
  					<?php
  					
  					     $viewquery = "SELECT * FROM Book";
  					
  				         echo "<table border= '2' color= 'pink' border-style=' groove' width='100%'>";
  					     echo "<tr> 
                               
                               <th>Book ID</th> 
                               <th>Book Name</th> 
                               <th>Book Title</th> 
                               <th>Book Genre</th> 
                               <th>Book Author</th>
                               <th>Book Level</th>
                               <th>Book Image</th>
                               <th>Book Link</th>";
  					     
  					     foreach($db->query($viewquery)as $row)
  					     {
  					        echo "<tr>";
  					        
  					        echo "<td>". $row['book_ID']."</td>";
  					        echo "<td>". $row['book_Name']."</td>";
  					        echo "<td>". $row['book_Title']."</td>";
  					        echo "<td>". $row['book_Genre']."</td>";
  					        echo "<td>". $row['book_Author']."</td>";
  					        echo "<td>". $row['book_Level']."</td>";
  					        echo "<td> <img src='images/". $row['book_Image']."' width = '100px' height = '100px'> </td>";
  					        echo "<td>". $row['book_Link']."</td>";
  					        
  					        echo "</tr>";
  					     }
  					     echo "</table>";
  					
                    ?>
  				
  					</div>
				
				</div>

			</div>

			<div class="view_data_readinglist" id="readinglist">
				
				<div class="title">Reading List</div>
				
				<div class="table">
				
					<div class="show_table">
  				
  					<?php
  					
  					     $viewquery = "SELECT ReadingList.readingList_ID, User.user_Name AS `User_name`, Book.book_Title AS `Book_name`, ReadingList.date 
                                            FROM ReadingList, User, Book 
                                                   WHERE ReadingList.user_ID = User.user_ID AND ReadingList.book_ID = Book.book_ID 
                                                        GROUP BY readingList_ID";
  					
  				         echo "<table border= '2' color= 'pink' border-style=' groove' width='100%'>";
  					     echo "<tr> 
                               
                               <th>ReadingList ID</th> 
                               <th>Book Name</th> 
                               <th>User Name</th> 
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