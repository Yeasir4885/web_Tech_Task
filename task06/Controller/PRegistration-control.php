<?php
 session_start(); 
require("../Model/PRegistration-model.php");
$_SESSION["idErr"]=$_SESSION["nameErr"]=$_SESSION["unameErr"]=$_SESSION["emailErr"]=$_SESSION["genderErr"]=$_SESSION["dayErr"]=$_SESSION["passErr"]=$_SESSION["cPassErr"]=$_SESSION["fileErr"]="";
$idErr = $nameErr = $unameErr = $emailErr = $genderErr = $dayErr = $passErr = $cPassErr = $fileErr  = "";
$name = $username = $email = $gender = $day = $pass =  "";
if(isset($_POST["submit"]))  
{  
  $err = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {


  if (empty($_POST["name"])) {
    $nameErr = "* Name is required";
     $err = true;
  } 
  else {
    $name = $_POST["name"];
    if(str_word_count($name)<2){
     $nameErr= "* Name field at least two words";
     $err = true;
    }
  }

if (empty($_POST["email"])) {
    $emailErr = "* Email is required";
     $err = true;
  } 
  else if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)){
    $emailErr = "* Invalid email format";
     $err = true;

    }else{
     $email = $_POST["email"];
    }

  if (empty($_POST["username"])) {
    $unameErr = "* Username is required";
     $err = true;
  } 
  else {
    $username = $_POST["username"];
    $pattern = "/^[a-z]+([a-z]|[0-9]|\.|-)*/i";

    if (!preg_match($pattern,$username)) {
      $nameErr = "* Only letters . - numbers are allowed";
     $err = true;
    }
     $username = $_POST["username"];
    }

  if(empty($_POST["pass"])){
     $passErr = "* password is required";
     $err = true;
     }
     else if(strlen($_POST['pass']) < 8){
        $passErr = "* Password must be at least 8 characters ";
        $err = true;
      // }else if(!(str_contains($_POST['pass'], '@') === true or str_contains($_POST['pass'], '$') === true or str_contains($_POST['pass'], '%') === true or str_contains($_POST['pass'], '#') === true)){
        $passErr = "* Password must be contain at least one of the special characters ";
        $err = true;   
      }else if($_POST["pass"] != $_POST["c-pass"]){
        $cPassErr = "* password is not matched";
        $err = true;
     }else{   
        $pass = $_POST["pass"];
     }

  if (empty($_POST["day"])) {
    $dayErr = "* Date of birth is required";
     $err = true;
  } else {
    $day = $_POST["day"];
    $d = explode("-",$day);
    $dd = (int)$d[2];
    $mm = (int)$d[1];
    $yy = (int)$d[0];

    if(!($dd<=31 && $dd>=1 && $mm<=12 && $mm>=1 && $yy<=2001 && $yy>=1900)){
     $dayErr = "* Invalid date of birth<br>";
     $err = true;

     $day = $_POST["day"];
    }
  }

  if (empty($_POST["gender"])) {
    $genderErr = "* Gender is required";
     $err = true;

  } else {
    $gender = $_POST["gender"];
  }



  if(!$err){
  /* $data['id'] = $_POST['id']; */
  $data['name'] = $_POST['name'];
  $data['e-mail'] = $_POST['email'];
  $data['username'] = $_POST['username']; 
  $data['password'] = password_hash($_POST['pass'], PASSWORD_BCRYPT, ["cost"=>12]);//password_hash($_POST['pass'], PASSWORD_BCRYPT, ["cost" => 12]);
  $data['gender'] = $_POST['gender'];
  $data['day'] = $_POST['day'];
  //var_dump($data);
    if (addpatient($data)) {
    echo 'Successfully added!!';
  } 
}
   
 else
   {

    $_SESSION["idErr"]=$idErr;
    $_SESSION["nameErr"]=$nameErr;
    $_SESSION["unameErr"]=$unameErr;
    $_SESSION["emailErr"]=$emailErr;
    $_SESSION["genderErr"]=$genderErr;
    $_SESSION["dayErr"]=$dayErr;
    $_SESSION["passErr"]=$passErr;
    $_SESSION["cPassErr"]=$cPassErr;
    $_SESSION["fileErr"]=$fileErr;
    header("location: ../View/PRegistration.php");

   }
  }
}
else 
{
  echo 'You are not allowed to access this page.';
}
 ?> 