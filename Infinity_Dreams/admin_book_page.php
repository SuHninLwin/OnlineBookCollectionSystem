<?php 

    include 'database_connect.php';
    
    session_start();
    
    $book_Name = ""; 
    $book_Title = ""; 
    $book_Genre = ""; 
    $book_Author = ""; 
    $book_Level = ""; 
    $book_Image = ""; 
    $book_Link = ""; 
    
    if(isset($_POST['insert']))
    {
        $book_Name = $_POST["book_Name"];
        $book_Title = $_POST["book_Title"];
        $book_Genre = $_POST["book_Genre"];
        $book_Author = $_POST["book_Author"];
        $book_Level = $_POST["book_Level"];
        $book_Image = $_POST["book_Image"];
        $book_Link = $_POST["book_Link"]; 
        
        try
        {
            $qy = "INSERT INTO Book (book_Type_ID, book_Name, book_Title, book_Genre, book_Author, book_Level, book_Image, book_Link) VALUES(0, '$book_Name', '$book_Title', '$book_Genre', '$book_Author', '$book_Level', '$book_Image', '$book_Link')";
            
            if($book_Genre == "Adventure" || $book_Genre == "Ancient" || $book_Genre == "Fantasy" || $book_Genre == "Humor" || $book_Genre == "Mystery" || $book_Genre == "Myths" || $book_Genre == "Nature" || $book_Genre == "Psychology" || $book_Genre == "Science Fiction")
            {
                $db->exec($qy);
                echo "<script type='text/javascript'> alert('New book is added!');</script>";
            }
            else
            {
                echo "<script type='text/javascript'> alert('Book genre must be one of these; Adventure, Ancient, Fantasy, Humor, Mystery, Myths, Nature, Psochology, Science Fiction!');</script>";
            }
        }
        catch (Exception $exception)
        {
            echo $db. "<br>" . $exception->getMessage();
        }
    }
    
    if(isset($_POST['update']))
    {
        $book_Name = $_POST["book_Name"];
        $book_Title = $_POST["book_Title"];
        $book_Genre = $_POST["book_Genre"];
        $book_Author = $_POST["book_Author"];
        $book_Level = $_POST["book_Level"];
        $book_Image = $_POST["book_Image"];
        $book_Link = $_POST["book_Link"];
        $book_Type_ID = 0; 
        
        try
        {
            $qry = $db->prepare("UPDATE Book SET book_Type_ID=:book_Type_ID, book_Name=:book_Name, book_Title=:book_Title, book_Genre=:book_Genre, book_Author=:book_Author, book_Level=:book_Level, book_Image=:book_Image, book_Link=:book_Link WHERE book_Name=:book_Name");
            $qry->execute(array(":book_Type_ID"=>$book_Type_ID, ":book_Name"=>$book_Name, ":book_Title"=>$book_Title, ":book_Genre"=>$book_Genre, ":book_Author"=>$book_Author, ":book_Level"=>$book_Level, "book_Image"=>$book_Image, "book_Link"=>$book_Link));
            
            $qry->bindParam(':book_Type_ID', $book_Type_ID);
            $qry->bindParam(':book_Title', $book_Title);
            $qry->bindParam(':book_Genre', $book_Genre);
            $qry->bindParam(':book_Author', $book_Author);
            $qry->bindParam(':book_Level', $book_Level);
            $qry->bindParam(':book_Image', $book_Image);
            $qry->bindParam(':book_Link', $book_Link);
            $qry->bindParam(':book_Name', $book_Name);
            
            echo "<script type='text/javascript'> alert('Book is updated!');</script>";
        }
        catch (Exception $exception)
        {
            echo $db. "<br>" . $exception->getMessage();
        }
    }
    
    if(isset($_POST['delete']))
    {
        $book_Name = $_POST["book_Name"];
        
        try
        {
            $qury="DELETE FROM Book WHERE book_Name=:book_Name";
            $res = $db->prepare($qury);
            $res->bindParam(':book_Name', $book_Name);
            $res->execute();
            
            echo "<script type='text/javascript'> alert('Book is deleted!');</script>";
        }
        catch (Exception $exception)
        {
            echo $db. "<br>" . $exception->getMessage();
        }
    }
    
    if(isset($_POST['search']))
    {
        $book_Name = $_POST['book_Name'];
        
        try
        {
            $qay = "SELECT * FROM Book WHERE book_Name = :book_Name";
            $res = $db->prepare($qay);
            
            if($res->execute(array(":book_Name"=>$book_Name)))
            {
                if($res->rowCount()>0)
                {
                    foreach($res as $row)
                    {
                        $book_Name = $row['book_Name'];
                        $book_Title = $row['book_Title'];
                        $book_Genre = $row['book_Genre'];
                        $book_Author = $row['book_Author'];
                        $book_Level = $row['book_Level'];
                        $book_Image = $row['book_Image'];
                        $book_Link = $row['book_Link'];
                    }
                }
                else
                {
                    echo "<script type='text/javascript'> alert('No book with this name!');</script>";
                }
            }
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
		<title>Dreamy Stories Admin Books Page</title>

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
			height: 480px;
			width: 880px;
			background-color: black;
			border: 3px solid pink; 
			border-radius: 30px; 
			margin-left: 270px;
			overflow: scroll;
		}

		.admin_book_form
		{
			padding-top: 15px;
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
		
		.image_upload
		{
		    width: 250px;
		    height: 35px;
		    display: inline-block;
		    border: 2px solid pink;
		    border-radius: 20px;
		    box-sizing: border-box;
  			font-size: 17px;
  			font-family: Times New Romen;
  			background-color: black;
  			color: pink; 
  			padding-top: 3px;
  			padding-left: 20px;
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
					
					<form method="post" class="admin_book_form">

						<table>
					
							<tr>
						
								<td style="padding-left: 200px;">
									<label for="book_Name"><b>Book Name</b></label>
								</td>
								<td>
									<input type="text" placeholder="Enter Bookname" name="book_Name" value="<?php echo $book_Name;?>" required>
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 200px;">
									<label for="book_Title"><b>Book Title</b></label>
								</td>
								<td>
									<input type="text" placeholder="Enter Title" name="book_Title" value="<?php echo $book_Title;?>">
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 200px;">
									<label for="book_Genre"><b>Book Genre</b></label>
								</td>
								<td>
									<input type="text" placeholder="Enter Book Genre" name="book_Genre" value="<?php echo $book_Genre;?>">
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 200px;">
									<label for="book_Author"><b>Book Author</b></label>
								</td>
								<td>
									<input type="text" placeholder="Enter Book Author" name="book_Author" value="<?php echo $book_Author;?>">
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 200px;">
									<label for="book_Level"><b>Book Level</b></label>
								</td>
								<td>
									<input type="text" placeholder="Enter Book Level" name="book_Level" value="<?php echo $book_Level;?>">
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 200px;">
									<label for="book_Image"><b>Book Image</b></label>
								</td>
								<td>
									<input type="text" placeholder="Enter Book Image" name="book_Image" value="<?php echo $book_Image;?>">
								</td>

							</tr>

							<tr>
								
								<td style="padding-left: 200px;">
									<label for="book_Link"><b>Book Link</b></label>
								</td>
								<td>
									<input type="text" placeholder="Enter Book Link" name="book_Link" value="<?php echo $book_Link;?>">
								</td>

							</tr>

							<tr>
								
								<td>
									<button type="submit" name="insert" style="font-style: Snell Roundhand;">Insert</button>
									<button type="submit" name="update" style="font-style: Snell Roundhand;">Update</button>
								</td>

								<td>
									<button type="submit" name="delete" style="font-style: Snell Roundhand;">Delete</button>
									<button type="submit" name="search" style="font-style: Snell Roundhand;">Search</button>
								</td>

							</tr>

							<tr>
								
								<td>~~~~~~~~~~~~~~~~~~~~~~~~~~~</td>
								<td>~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~</td>

							</tr>

							<tr>
								
								<td style="padding-top: 5px;">
									<button style="font-style: Snell Roundhand;" onclick="window.location.href='admin_user_page.php';"><span>Users</span></button>
									<button style="font-style: Snell Roundhand;" onclick="window.location.href='admin_readinglist_page.php';"><span>Lists</span></button>
								</td>

								<td style="padding-top: 5px;">
									<button style="font-style: Snell Roundhand;" onclick="window.location.href='admin_home_page.php';"><span>Home</span></button>
									<button type="reset" style="font-style: Snell Roundhand;">Cancel</button>
								</td>

							</tr>

						</table>

					</form>

				</div>

			</div>

			<div class="view_div">
				
				<div class="user_title">Book Table</div>
				
				<div class="view_user_table">
				
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
			
		</div>

		<div class="footer_container_full">

				<div class="footer_left">

					<h3 class="infinity_dreams_logo"> &#10017; Infinity Dreams &#10017; <br> -Books- </h3>

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