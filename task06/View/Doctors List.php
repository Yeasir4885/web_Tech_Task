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

            <li>ADMIN</li>
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
              <h1>Doctor's List</h1>
                <table style="width:100%">
                  <tr>
                    <th>Doctor Name</th>
                    <th>Doctor Username</th>
                    <th>Specialist</th>
                    <th>Available Time</th>

                  </tr>
                  <tr>
                    <td>Md.Harunur Rashid</td>
                    <td>Rashid123</td>
                    <td>Medicine</td>
                    <td>4.00pm</td>
                  </tr>
                  <tr>
                    <td>Md.Abul Kalam Ajad</td>
                    <td>Ajad23</td>
                    <td>Heart</td>
                    <td>7.00pm</td>
                  </tr>
                  <tr>
                    <td>Mst.Abeda Banu</td>
                    <td>Abeda2356</td>
                    <td>Gynecologist</td>
                    <td>5.00pm</td>
                  </tr>
                  <tr>
                    <td>Md.Nurul Islam</td>
                    <td>nurul5</td>
                    <td>Eye</td>
                    <td>6.00pm</td>
                  </tr>
                  <tr>
                    <td>Md.Baset</td>
                    <td>baset67</td>
                    <td>Neuro</td>
                    <td>4.00pm</td>
                  </tr>
                </table>    
                
</td>
</table>
                 
                <form action=""> 
                <select name="doctors" onchange="showdoctor(this.value)">
                <option value="">Select a doctor</option>
                <option value="Anika Tabassum">Anika Saba Ibte Sum</option>
                <option value="Faisal khan ">FAISAL KHAN</option>
                <option value="sadia promi">SADIA PROMI</option>
                <option value="Kotha">Kotha tinni</option>

              </select>
              <br><br>
              <h4>Doctor's Details</h4>
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
<li><a href="../View/DRegistration.php">ADD DOCTOR</a></li>
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
  xhttp.open("GET", "../Controller/Doctor-control.php?q="+str);
  xhttp.send();
}
</script>
  <br>
             
              

<?php include("foot.php"); ?>