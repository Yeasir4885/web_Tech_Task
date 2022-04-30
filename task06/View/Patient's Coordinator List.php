<?php require("head.php"); 
require("../Controller/patient Coordinator-control.php"); 
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

            <li style="padding: 180px;">User Account</li>
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
               <td class="Patient's Coordinator List" style="width: 70%; position: relative;">
                
                
                <table style="display: block; position: absolute; left: 50%; transform: translateX(-50%);">
                  
                  
                 
                <form action=""> 
                <select name="doctors" onchange="showdoctor(this.value)">
                <option value="">Select a doctor</option>
                <option value="anika15">Anika Saba Ibte Sum</option>
                <option value="yeasir67 ">Md. Yeasir Hossain</option>
                <option value="pranto45">Zuhare Pranto</option>
                <option value="ovi90">Md. Washim Akram</option>
                <option value="safrin12">Sadia Afrin</option>
                <option value="nafis67">Nafis Siddique</option>
                <option value="abir234">Faisal Abir</option>
                <option value="nasrin12">Nasrin Akter</option>
                <option value="laboni34">Laboni Sarkar</option>
                <option value="talha1234">Talha Obaid</option>
              </select>
              <br><br>
              <h4>paitent Coordinator's Details</h4>
           </form>
                <p style="display: block; position: absolute; left: 50%; transform: translateX(-50%);" id="txtHint"></p>
                  
                  
                </table>

              

              
               </td>
             </tr>
            
    </table>            
    </div>
</div>
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
  xhttp.open("GET", "../Controller/patient Coordinator-control.php?q="+str);
  xhttp.send();
}
</script>

<?php include("foot.php"); ?>