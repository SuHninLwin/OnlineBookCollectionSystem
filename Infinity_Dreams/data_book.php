<?php 

    include 'database_connect.php';
    
    $stmt = $db->prepare("SELECT ReadingList.book_ID, COUNT(user_ID) AS `Users`, Book.book_Title AS `book_Name` FROM ReadingList, Book WHERE ReadingList.book_ID = Book.book_ID GROUP BY book_ID");
    $stmt->execute();
    $json = []; 
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        extract($row); 
        $json[]=[(string)$book_Name, (int)$Users]; 
        
    }
    
    echo json_encode($json); 
    
?>