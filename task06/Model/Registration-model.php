<?php 
require_once 'db_connect.php';
function addpatient($data){
     $conn = db_conn();
     $selectQuery = "INSERT INTO `Admin_registration`(`Admin_name`, `A_Email`, `username`, `password`, `gender`, `dey`) VALUES (:name, :email, :username, :password, :gender, :day)";
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([
          /* ':id' => $data['id'], */
          ':name' => $data['name'],
          ':email' => $data['e-mail'],
          ':username' => $data['username'],
          ':password' => $data['password'],
          ':gender' => $data['gender'],
          ':day' => $data['day']
        ]);
    }catch(PDOException $e){
        echo $e->getMessage();
    }

    
    $conn = null;
    return true;
}



function get_patient_by_username($username){
    

    $conn = db_conn();
    $selectQuery =  "SELECT * FROM `admin_registration` WHERE `username` LIKE '?%';"; 
 
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]); 
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function get_patient_by_actual_username($username){
    

    $conn = db_conn();
    $selectQuery =  "SELECT * FROM `Admin_registration` WHERE `username` = ?;"; 
 
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$username]); 
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function get_patient_by_email($email){
    

    $conn = db_conn();
    $selectQuery =  "SELECT * FROM `patient_registration` WHERE `A_Email` LIKE '?%';"; 
 
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]); 
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}

function get_patient_by_actual_email($email){
    

    $conn = db_conn();
    $selectQuery =  "SELECT * FROM `Admin_registration` WHERE `A_Email` = ?;"; 
 
    try{
        $stmt = $conn->prepare($selectQuery);
        $stmt->execute([$email]); 
    }catch(PDOException $e){
        echo $e->getMessage();
    }
    $row = $stmt->fetch(PDO::FETCH_ASSOC);
    return $row;
}
?>