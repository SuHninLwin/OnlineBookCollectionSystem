<?php 

    include 'database_connect.php';
    
    $stmt = $db->prepare("SELECT ReadingList.user_ID, COUNT(book_ID) AS `Books`, User.user_Name AS `user_Name` 
                            FROM ReadingList, User WHERE ReadingList.user_ID = User.user_ID 
                                GROUP BY user_ID");
    $stmt->execute();
    $json = []; 
    while($row=$stmt->fetch(PDO::FETCH_ASSOC))
    {
        extract($row); 
        $json[]=[(string)$user_Name, (int)$Books]; 
        
    }
    
    echo json_encode($json); 
    
?>