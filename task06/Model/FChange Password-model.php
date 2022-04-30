<?php 

require_once 'db_connect.php';
function updatepatient($data){
     $conn = db_conn();
     $selectQuery = "UPDATE `admin_registration` SET `password`=:password WHERE `A_Email`=:email;";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
         /* ':id' => $data['id'],*/
          /*':name' => $data['name'],
          ':email' => $data['e-mail'],*/
          ':email' => $data["email"],
          ':password' => $data['password']
          /*':gender' => $data['gender'],
          ':day' => $data['day']*/
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    
    $conn = null;
    return true;
}




?>