<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        CHANGE PASSWORD
        
    </title>
        </head>
<body>
<?php

    $currErr= $reErr = "";
    $currPass = $Newpass = $Repass = "";

    if(isset($_POST['sub'])){
      if ($_SERVER["REQUEST_METHOD"] == "POST") 
      {
        $currPass = $_POST['curr'];
        $Newpass = $_POST['new'];
        $Repass = $_POST['re'];
        if(empty($_POST["pass"])){
     $passErr = "* password is required";

     }
     else if(strlen($_POST['pass']) < 8)
        {
        $passErr = "* Password must be at least 8 characters ";
        }
        else if(!(str_contains($_POST['pass'], '@') === true or str_contains($_POST['pass'], '$') === true or str_contains($_POST['pass'], '%') === true or str_contains($_POST['pass'], '#') === true))
        {
            $passErr = "* Password must be contain at least one of the special characters ";
            
        }
        if($currPass == $Newpass){
          $currErr = ' New Password should not be same as the Current Password';
        }elseif ($Newpass != $Repass) {
          $reErr = 'New Password must match with the Retyped Password';
        }else{
            $idx = 0;
          $userData = json_decode(file_get_contents("data.json"), true);
          if($userData != NULL){
            foreach ($userData as $user){
              if($user["username"] === $_SESSION['username']){
                $idx++;
                global $tmp_user;
                $tmp_user = $user;
                $tmp_user["password"] = $Newpass;
              }
            }
            if($idx > 0){
              $userData[$idx-1] = $tmp_user;
            }
            file_put_contents("data.json", json_encode($userData));
            echo "Successfully password changed";
          }
        }
      }
    }
          
    ?>
    <div class="container custom-form" style="width:500px;">  
	<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    <fieldset >
      <legend>CHANGE PASSWORD</legend>
      <label><span class="blue">Current Password: </span></label>
      <input type="text" name="curr"><span class="red">&nbsp;</span>
      <br>
      <label><span class="green">New Password:</span> </label>
      <input type="text" name="new"><span class="red">&nbsp;<?php echo $currErr ?></span>
      <br>
      <label><span class="red">Retype New Password: </span></label>
      <input type="text" name="re"><span class="red">&nbsp;<?php echo $reErr ?></span>
      <hr>
      
      <input type="submit" name="sub">
      <br>
     </fieldset>
</form>