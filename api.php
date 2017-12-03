<?php



function getDatabaseConnection() {
     $host = "us-cdbr-iron-east-05.cleardb.net";
     $username = "bbf7de8df9454c";
     $password = "441ff6f0";
     $dbname="heroku_6ed4258c62bdf7f";
    
    // Create connection
    $dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
    $dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $dbConn; 
}



function getUsersThatMatchUserName() {
    
    $username = $_GET['username']; 
    
    echo "$username";

    
     $dbConn = getDatabaseConnection(); 

     $sql = "SELECT * from user WHERE username='$username'"; 
     
     $statement = $dbConn->prepare($sql); 
    
     $statement->execute(); 
     $records = $statement->fetchAll(); 
     echo json_encode($records); 
}


getUsersThatMatchUserName(); 

?>
