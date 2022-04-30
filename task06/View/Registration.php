<?php 

include("head.php"); ?>



<br>  
           <div class="container custom-form" style="width:500px;">  
                                
                <form method="post" action="../Controller/Registration-control.php">  
                      
                     <br>  
                     <fieldset>
                         <legend> ADMIN REGISTRATION</legend>
                         <br> <br> 
                         
                         <fieldset>
                              <legend>NAME</legend> 
                              <input type="text" id= "p-name" name="name" class="form-control" onkeyup="checkName()"/><span class="red">&nbsp;<?php if(isset($_SESSION["nameErr"])){echo $_SESSION["nameErr"]; $_SESSION["nameErr"] = "";} ?></span><p id="nameErr"></p>   
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>E-mail</legend>
                               <p> <span class="red" id="txtHint1"></span></p> 
                               <input type="text" id="e-ml" name = "email" onchange="showHint1(this.value);"class="form-control" onkeyup="checkEmail()"/><span class="red">&nbsp;<?php if(isset($_SESSION["emailErr"])){echo $_SESSION["emailErr"]; $_SESSION["emailErr"] = "";} ?></span><p id="emailErr"></p>
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>User Name</legend>
                              <p> <span class="red" id="txtHint"></span></p> 
                              <input type="text" id="u-name" name = "username" onchange="showHint(this.value);" class="form-control" onkeyup="checkUserName()"/><span class="red">&nbsp;<?php if(isset($_SESSION["unameErr"])){echo $_SESSION["unameErr"]; $_SESSION["unameErr"] = "";} ?></span><p id="unameErr"></p>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Password</legend>
                              <input type="text" id="password" name = "pass" class="form-control" onkeyup="checkPass()"/><span class="red">&nbsp;<?php if(isset($_SESSION["passErr"])){echo $_SESSION["passErr"]; $_SESSION["passErr"] = "";} ?></span><p id="passErr"></p>
                         </fieldset>
                         <hr>
                         <fieldset>
                              <legend>Confirm Password</legend>
                              <input type="password" id="cpassword" name = "c-pass" class="form-control" onkeyup="checkCPass()"/><span class="red">&nbsp;<?php if(isset($_SESSION["passErr"])){echo $_SESSION["passErr"]; $_SESSION["passErr"] = "";} ?></span><p id="cpassErr"></p>
                         </fieldset>
                         <hr>

                         <fieldset>
                         <legend>Gender</legend> 
                          <input type="radio" id="male" name="gender" value="male">
                          <label for="male">Male</label>                     
                          <input type="radio" id="female" name="gender" value="female">
                          <label for="female">Female</label>
                          <input type="radio" id="other" name="gender" value="other">
                          <label for="other">Other</label><span class="red">&nbsp;<?php if(isset($_SESSION["genderErr"])){echo $_SESSION["genderErr"]; $_SESSION["genderErr"] = "";} ?></span><br><br>
                         </fieldset>
                         <hr> 
                         <legend>Date of Birth:</legend>
                         <input type="date" name="day"> <span class="red">&nbsp;<?php if(isset($_SESSION["dayErr"])){echo $_SESSION["dayErr"]; $_SESSION["dayErr"] = "";} ?></span><br><br>
                         <fieldset>
                         <hr> 
                          </fieldset>
                          <input type="submit" name="submit" value="Submit" class="btn btn-info" />
                          <input type="reset" name="reset" value="Reset" class="btn btn-info" /><br />                      
                          <?php  
                          if(isset($message))  
                          {  
                               echo $message;  
                          }  
                          
                          ?> 
                           
                          </fieldset>
                          <hr> 
                     
                </form>  
                <p><?php if(isset($_SESSION['regErr'])){echo $_SESSION['regErr']; $_SESSION['regErr'] = '';}?></p>
           </div>  
           <br>  
<script>

     function checkName() {
              
               if(document.getElementById("p-name").value === "") {
                    document.getElementById("nameErr").innerHTML = "Name can't be blank";
                    document.getElementById("p-name").style.outlineColor = "red";
               }else if (document.getElementById("p-name").value.length <= 2) {
                    document.getElementById("nameErr").innerHTML = "Name must have at least 2 characters";
                    document.getElementById("p-name").style.outlineColor = "red";
               }
               else{
                    document.getElementById("nameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
        function checkUserName() {
               if(document.getElementById("p-name").value === "/^[a-zA-Z]+ [a-zA-Z]+$/") {
               document.getElementById("nameErr").innerHTML = "Name must be used in upper and lower case";
               document.getElementById("p-name").style.outlineColor = "red";
               }else if (document.getElementById("u-name").value === "") {
                    document.getElementById("unameErr").innerHTML = "Username can't be blank";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else if (document.getElementById("u-name").value.length <= 2) {
                    document.getElementById("unameErr").innerHTML = "Username must have at least 2 characters";
                    document.getElementById("u-name").style.outlineColor = "red";
               }else{
                    document.getElementById("unameErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
        function checkEmail() {
               if (document.getElementById("e-ml").value === "") {
                    document.getElementById("emailErr").innerHTML = "Email can't be blank";
                    document.getElementById("e-ml").style.outlineColor = "red";
               }else{
                    document.getElementById("emailErr").innerHTML = "";
                    document.getElementById("name").style.borderColor = "black";

               }
               
        }
        function checkPass(){
          if (document.getElementById("password").value == "") {
                    document.getElementById("passErr").innerHTML = "Password can't be blank";
                    document.getElementById("password").style.borderColor = "red";
          }else if (document.getElementById("password").value.length < 8) {
                    document.getElementById("passErr").innerHTML = "Password must be at least 8 charecters";
                    document.getElementById("password").style.borderColor = "red";
          }else{
                    document.getElementById("passErr").innerHTML = "";
                    document.getElementById("password").style.borderColor = "black";
                   
          }

        }
        function checkCPass(){
          if (document.getElementById("cpassword").value == "") {
                    document.getElementById("cpassErr").innerHTML = "Confirm password can't be blank";
                    document.getElementById("cpassword").style.borderColor = "red";
          }else if (document.getElementById("cpassword").value=== password) {
                    document.getElementById("cpassErr").innerHTML = "Confirm Password must be matched with password";
                    document.getElementById("cpassword").style.borderColor = "red";
          }
          else{
                    document.getElementById("passErr").innerHTML = "";
                   
          }
        }

     function showHint(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "../Controller/gethint.php?q="+str);
  xhttp.send();   
}

function showHint1(str) {
  if (str.length == 0) { 
    document.getElementById("txtHint1").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint1").innerHTML =
    this.responseText;
  }
  xhttp.open("GET", "../Controller/gethint.php?q="+str);
  xhttp.send();   
}
</script>
<?php include("foot.php"); ?>