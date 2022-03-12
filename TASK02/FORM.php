<!DOCTYPE HTML>  
<html>
<head>
<style>
.error {color: #FF0000;}
</style>
</head>
<body>  

<?php

$nameErr = $emailErr = $genderErr = $websiteErr = $dayErr= "";
$name = $email = $gender = $comment = $website  = $day = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["name"])) {
    $nameErr = "Name is required";
  } else {
    $name = test_input($_POST["name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z-' ]*$/",$name)) {
      $nameErr = "Only letters and white space allowed";
    }
  }
  
  if (empty($_POST["email"])) {
    $emailErr = "Email is required";
  } else 
  {
    $email = test_input($_POST["email"]);
    // check if e-mail address is well-formed
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) 
    {
      $emailErr = "Invalid email format";
    }
  }

  if (empty($_POST["day"])) {
    $dayErr = "Date of birth is required";
  } else 
  {
    $day = $_POST["day"];
    $d = explode("-",$day);
    $dd = (int)$d[2];
    $mm = (int)$d[1];
    $yy = (int)$d[0];
    //yyyy-mm-dd

    if(!($dd<=31 && $dd>=1 && $mm<=12 && $mm>=1 && $yy<=1998 && $yy>=1953))
    {
      $dayErr = "Invalid date of birth";
      $day = "";
    }
  }


 if (empty($_POST["gender"])) {
    $genderErr = "Gender is required";
  } 
  else {
    $gender = test_input($_POST["gender"]);
        }
  }

  if (empty($_POST["degree"])) 
  {
    $degreeErr = "Degree is required";
  } 
  else 
  {
     $degree = $_POST["degree"];
    if(count($degree)<2)
    {
      $degreeErr = "At least two of degree must be selected";
    }
  }


function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">  
 <fieldset><legend>Name </legend>  
  <input type="text" name="name">
  <span class="error">* <?php echo $nameErr;?></span>
  </fieldset>
  <br><br>
  <fieldset><legend>Email </legend> 
  <input type="text" name="email">
  <span class="error">* <?php echo $emailErr;?></span>
  </fieldset>
  <br><br>
  <fieldset><legend>Date of Birth</legend>
  <input type="date" name="day"> 
  <span class="error">* <?php echo $dayErr; ?></span>
  </fieldset>
  <br><br>
  <fieldset><legend>Gender </legend>
  <input type="radio" name="gender" value="female">Female
  <input type="radio" name="gender" value="male">Male
  <input type="radio" name="gender" value="other">Other
  <span class="error">* <?php echo $genderErr;?></span>
  </fieldset>
  <br><br>
  <fieldset><legend>Degree</legend>
  <input type="radio" name="Degree" value="SSC">SSC
  <input type="radio" name="Degree" value="HSC">HSC
  <input type="radio" name="Degree" value="BSc">Bsc
  <input type="radio" name="Degree" value="MSc">Msc
  <span class="error">* <?php echo $genderErr;?></span>
  </fieldset>
 <br><br>
</form>

<?php
echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $email;
echo "<br>";
echo $gender;
echo "<br>";
echo $day;
?>

</body>
</html>
