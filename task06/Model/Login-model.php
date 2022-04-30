<?php 

require("db_connect.php");

function user_authentication($username){
	$conn = db_conn();
    $selectQuery =  "SELECT * FROM `admin_registration` WHERE `username`= ?;";
 
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]); //, $password
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}



?>