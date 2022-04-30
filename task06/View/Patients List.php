<?php require("head.php"); 
require("../Controller/Doctor-control.php"); 
if(!isset($_SESSION["username"])){
        header("location: Login.php");
    }
?>

<div class="container custom-form-dashboard">
  <div class="navitems">
    <table style="width: 100%;">
       <tr style="width: 100%;">

              <td style="width: 20%;">
         <ul id="list-of-url">

            <li >ADMIN</li>
            <hr>
                    <li><a href="../View/Dasboard.php">Dashboard</a></li>
                    <li><a href="../View/View Profile.php">View Profile</a></li>
                    <li><a href="../View/Edit Profile.php">Edit Profile</a></li>
                    <li><a href="../View/Change Password.php">Change Password</a></li>
                    <li><a href="../View/Doctors List.php">Doctors</a></li>
                    <li><a href="../View/Patients List.php">Patients</a></li>
                    <li><a href="../View/Patient's Coordinator List.php.php">Patient's Coordinator</a></li>
                </ul>
               </td>
               <td class="DoctorList" style="width: 70%; position: relative;">
                
                
                <table style="display: block; position: absolute; left: 50%; transform: translateX(-50%);">
                  
                  <h1>Patients List</h1>
                <table style="width:100%">
                  <tr>
                    <th>Patients Name</th>
                    <th>Patients Email</th>
                    <th>Patients age</th>
                    <th>Phone Number</th>

                  </tr>
                  <tr>
                    <td> Rashid Khan</td>
                    <td>Rashid123@gmail.com</td>
                    <td>58</td>
                    <td>01111111111</td>
                  </tr>
                  <tr>
                    <td>Ajad Rahman</td>
                    <td>Ajad23@gmail.com</td>
                    <td>22</td>
                    <td>0122222222</td>
                  </tr>
                  <tr>
                    <td>Rasmin Begum</td>
                    <td>rst@gmail.com</td>
                    <td>35</td>
                    <td>0133333333</td>
                  </tr>
                  <tr>
                    <td>Sadia Promi</td>
                    <td>sp15@gmail.com</td>
                    <td>28</td>
                    <td>0144444444</td>
                  </tr>
                  <tr>
                    <td>Mr. Talha</td>
                    <td>mrt@gmail.com</td>
                    <td>66</td>
                    <td>0155555555</td>
                  </tr>
                </table>
                 
                <form action=""> 
                <select name="patient_registraion" onchange="showdoctor(this.value)">
                <option value="">Select a patient</option>
                <option value="antu22">Antu Kumar</option>
                <option value="labony232">Lanony AKter</option>
                
              </select>
              <br><br>
              <h4>paitent's Details</h4>
                  <br>
              <br>
               <br>
              <br>
               <br>
              <br>
               <br>
              <br>
           </form>
                <p style="display: block; position: absolute; left: 50%; transform: translateX(-50%);" id="txtHint"></p>
                  
                  
                </table>

              

              
               </td>
             </tr>
            
    </table>            
    </div>
</div>
<li><a href="../View/PRegistration.php">ADD PAITENTS</a></li>
<script>
function showdoctor(str) {
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  const xhttp = new XMLHttpRequest();
  xhttp.onload = function() {
    document.getElementById("txtHint").innerHTML = this.responseText;
  }
  xhttp.open("GET", "../Controller/patient-control.php?q="+str);
  xhttp.send();
}
</script>
<br>
<br>
<br>

<?php include("foot.php"); ?>