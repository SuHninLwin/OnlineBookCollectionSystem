<?php 

    include 'database_connect.php';
    
    session_start();
    
    $user_ID = $_SESSION["user_ID"];
    $user = $_SESSION["user_Name"];
    
    if(isset($_POST["add_to_list"]))
    {
        if(isset($_SESSION["rl_list"]))
        {
            $item_array_id = array_column($_SESSION["rl_list"], "book_ID");
            if(!in_array($_GET["id"], $item_array_id))
            {
                $count = count($_SESSION["rl_list"]);
                $item_array = array(
                    'book_ID'		=>	$_GET["id"],
                    'book_Title'		=>	$_POST["book_Title"],
                    'book_Author'		=>	$_POST["book_Author"],
                    'book_Link'		=>	$_POST["book_Link"],
                    'book_Genre'		=>	$_POST["book_Genre"]
                );
                $_SESSION["rl_list"][$count] = $item_array;
            }
        }
        else
        {
            $item_array = array(
                'book_ID'		=>	$_GET["id"],
                'book_Title'		=>	$_POST["book_Title"],
                'book_Author'		=>	$_POST["book_Author"],
                'book_Link'		=>	$_POST["book_Link"],
                'book_Genre'		=>	$_POST["book_Genre"]
            );
            $_SESSION["rl_list"][0] = $item_array;
        }
    }
    
    if(isset($_POST['add_to_list']))
    {
        $book_ID = $_POST["book_ID"];
        
        try
        {
            $qy = "INSERT INTO ReadingList (book_ID, user_ID, date) VALUES('$book_ID', '$user_ID', now())";
            $db->exec($qy);
        }
        catch (Exception $exception)
        {
            echo $db. "<br>" . $exception->getMessage();
        }
    }
    
    if(isset($_POST['remove_from_list']))
    {
        $book_ID = $_POST["book_ID"];
        try
        {
            $removeqy = "DELETE FROM ReadingList WHERE book_ID=".$book_ID;
            $db->exec($removeqy);
            echo '<script>alert("Deleted successfully!")</script>';
        }
        catch (Exception $exception)
        {
            echo $db. "<br>" . $exception->getMessage();
        }
    }
    
?>
		
<!DOCTYPE html>
<html>

	<head>
		<title>Dreamy Stories Diamond Level Page</title>

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
			height: 450px;
			margin-top: 10px; 
			background-color: black;
			overflow: scroll;
		}

		.tabs
		{
			height: 50px;
			color: pink;
			font-size: 30px;
			background-color: white;
		}

		.btn_tabs
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
  			margin-left: 70px;
  		}

  		.btn_tabs:hover
  		{
  			background-color: pink;
  			font-family: Snell Roundhand; 
  			border: 2px solid black; 
  			color: black; 
  			font-size: 30px;
  			text-decoration: underline;
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
  			margin-top: 200px;
  			margin-left: 350px;
  			background-color: transparent;
  			color: pink; 
		}

		.modal-content 
		{
  			background-color: #fefefe;
  			border: 1px solid #888;
  			margin-left: 50px;
  			width: 730px; 
  			height: 420px;
  			margin-left: 350px;
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
			width: 434px;
			margin-top: 35px;
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
		
		.fav_list
		{
		    width: 1100px;
		    height: 70px;  
		    color: pink; 
		    float: left;
		    border-bottom: 2px solid pink;
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

		<div class="tabs">

			<button class="btn_tabs">
				<span onclick="window.location.href='user_home_page.php';">
					Back to Home
				</span>
			</button>

			<button class="btn_tabs">
				<span onclick="document.getElementById('id02').style.display='block'">			
					FavouriteList
				</span>
			</button>

			<button class="btn_tabs">
				<span onclick="window.location.href='logout_page.php';">
					Logout Here
				</span>
			</button>

			<button class="btn_tabs" onclick="document.getElementById('id01').style.display='block'">
				<span>
					Search Here
				</span>
			</button>

				<div id="id01" class="modal modal-content animate">

  					<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close">&times;</span>

  					<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for genres, title.." title="Type in a name">

  					<ul id="myUL">
  					
  						<?php 
                       	
                            $vq = "SELECT * FROM `Book`";
                            foreach($db->query($vq)as $row)
                            {
                        ?>

  						<li><a href="<?php echo $row['book_Link'] ?>"><?php echo $row['book_Genre'] ?>, <?php echo $row['book_Name'] ?></a></li>
  						
  						<?php } ?>
  						
					</ul>

				</div>

				<script>

					function myFunction() 
					{
    					var input, filter, ul, li, a, i, txtValue;
    					input = document.getElementById("myInput");
    					filter = input.value.toUpperCase();
    					ul = document.getElementById("myUL");
    					li = ul.getElementsByTagName("li");
    					
    					for (i = 0; i < li.length; i++) 
    					{
        					a = li[i].getElementsByTagName("a")[0];
        					txtValue = a.textContent || a.innerText;
        	
        					if (txtValue.toUpperCase().indexOf(filter) > -1) 
        					{
            					li[i].style.display = "";
        					} 
        					else 
        					{
            					li[i].style.display = "none";
        					}
    					}
					}

				</script>

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

		</div>

		<div class="signup_container_full">
			
			<?php 
                       	
                $vq = "SELECT * FROM `Book` ORDER BY book_Author";
                foreach($db->query($vq)as $row)
                {
                            
            ?>
			
			<div class="genre_name"><button class="btn_genre"><span><?php echo $row['book_Genre'] ?></span></button></div>
			
			<form method="post" action="diamond_level_page.php?action=add&id=<?php echo $row['book_ID']?>">
			
				<input type = "hidden" name = "book_ID" value="<?= $row['book_ID']?>">
				
				<div class="genre_book">
				
					<div class="flip-card">

  						<div class="flip-card-inner">

    						<div class="flip-card-front">
      
      							<img src="images/<?php echo $row['book_Image'] ?>" class="image">
    
    						</div>
    
    						<div class="flip-card-back">
      
      							<p class="link_hover_title" onclick="window.location.href='<?php echo $row['book_Link'] ?>';">" <?php echo $row['book_Title'] ?> "</p> 
								
								<input type = "hidden" name = "book_Link" value="<?= $row['book_Link'] ?>">
								<input type = "hidden" name = "book_Title" value="<?= $row['book_Title'] ?>">
								
      							<p class="link_hover_author">" <?php echo $row['book_Author'] ?> "</p>
      							
      							<input type = "hidden" name = "book_Author" value="<?= $row['book_Author']?>">
      							
      							<p class="link_hover_genre">" <?php echo $row['book_Genre'] ?> "</p>
      							
      							<input type = "hidden" name = "book_Genre" value="<?= $row['book_Genre']?>">	
      							
      							<input class="link_hover_list" type="submit" name="add_to_list" value="Add To List">

    						</div>

  						</div>

					</div>
					
				</div>
				
			</form>
			
			<?php } ?>
			
		</div>
			
		<div id="id02" class="modal modal-content animate">
		
			<span onclick="document.getElementById('id02').style.display='none'" class="close" title="Close">&times;</span>
				
			<div class="fav_list"><button class="btn_rl" id="rl"><span><?php echo $user;?> &#9829; Favourite List</span></button></div>

			<div class="genre_book">
				
				<form method="post">
				
					<table style="margin-top: 20px; width:1100px; border: 1px solid black;">
							
						<tr>
							
							<td></td>		
							<td style="color: pink; text-decoration: underline; font-size: 35px; width: 300px; height: 50px; text-align: center;">Book Title</td>
							<td style="color: pink; text-decoration: underline; font-size: 35px; width: 300px; height: 50px; text-align: center;">Book Author</td>
							<td style="color: pink; text-decoration: underline; font-size: 35px; width: 300px; height: 50px; text-align: center;">Book Genre</td>
							<td style="color: pink; text-decoration: underline; font-size: 35px; width: 300px; height: 50px; text-align: center;">Date</td>
							<td style="color: pink; text-decoration: underline; font-size: 35px; width: 300px; height: 50px; text-align: center;">Action</td>
					
						</tr>
						
						<?php
						  
						  $q = "SELECT ReadingList.book_ID,ReadingList.user_ID,Book.book_Title,Book.book_Author,Book.book_Link,Book.book_Genre,ReadingList.date 
                                    FROM ReadingList,Book 
                                        WHERE ReadingList.book_ID=Book.book_ID AND ReadingList.user_ID=".$user_ID;
						
						  foreach($db->query($q)as $row)
						  {
						      
		                ?>
						
						<tr>
							 
							<td><input type="hidden" name="book_ID" value="<?php echo $row['book_ID']; ?>"></td>		
							<td style="color: pink; font-size: 25px; width: 300px; height: 50px; text-align: center;"><a href="<?php echo $row['book_Link']; ?>"><?php echo $row['book_Title']; ?></a></td>
							<td style="color: pink; font-size: 25px; width: 300px; height: 50px; text-align: center;"><?php echo $row['book_Author']; ?></td>
							<td style="color: pink; font-size: 25px; width: 300px; height: 50px; text-align: center;"><?php echo $row['book_Genre']; ?></td>
							<td style="color: pink; font-size: 25px; width: 300px; height: 50px; text-align: center;"><?php echo $row['date']; ?></td>
							<td style="color: pink; font-size: 25px; width: 300px; height: 50px; text-align: center;">
								<input class="link_hover_list" type="submit" name="remove_from_list" value="Remove">
							</td>
					
						</tr>
						
						<?php 
						  
						
						  }
						
						?>
							
					</table>
				
				</form>

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