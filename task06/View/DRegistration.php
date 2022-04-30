<?php 

include("head.php"); ?>



<br>  
           <div class="container custom-form" style="width:500px;">  
                                
                <form method="post" action="../Controller/DRegistration-control.php">  
                      
                     <br>  
                     <fieldset>
                         <legend> DOCTOR REGISTRATION</legend>
                         <br> <br> 
                         
                         <fieldset>
                              <legend>DOCTOR NAME</legend> 
                              <input type="text" id= "name" name="name" class="form-control" onkeyup="checkName()"/><span class="red">&nbsp;<?php if(isset($_SESSION["nameErr"])){echo $_SESSION["nameErr"]; $_SESSION["nameErr"] = "";} ?></span><p id="nameErr"></p>   
                         </fieldset>
                         <hr>
                          <fieldset>
                               <legend>E-mail</legend>
                               <p> <span class="red" id="txtHint1"></span></p> 
                               <input type="text" id="email" name = "email" onchange="showHint1(this.value);"class="form-control" onkeyup="checkEmail()"/><span class="red">&nbsp;<?php if(isset($_SESSION["emailErr"])){echo $_SESSION["emailErr"]; $_SESSION["emailErr"] = "";} ?></span><p id="emailErr"></p>
                          </fieldset>
                          <hr>
                         <fieldset>
                              <legend>Specialist</legend>
                              <p> <span class="red" id="txtHint"></span></p> 
                              <input type="text" id="Specialist" name = "Specialist" onchange="showHint(this.value);" class="form-control" onkeyup="checkUserName()"/><span class="red">&nbsp;<?php if(isset($_SESSION["unameErr"])){echo $_SESSION["unameErr"]; $_SESSION["unameErr"] = "";} ?></span><p id="unameErr"></p>
                         </fieldset>
                         <hr>
                         
                         <hr>
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