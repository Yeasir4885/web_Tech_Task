<?php require("head.php"); ?>
<?php 
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
               <td style="width: 20%;">
               	<h1>
                    <table style="width:20%">
  <tr>
    <th><b>TOTAL REGISTERED PATIENTS</b></th>
    <th><b>TOTAL REGISTERED DOCTORS</b></th>
    <th><b>TOTAL REGISTERED COORDINATORS</b></th>
    <th><b>TODAY TOTAL APPOINTMENT</b></th>
    <th><b>YESTERDAY TOTAL APPOINTMENT</b></th>
  </tr>
  <tr>
    <td>2257</td>
    <td>358</td>
    <td>4</td>
    <td>17</td>
    <td>27</td>
  </tr>
 
</table>
               </td>
             </tr>
           
</table>
               	<?php
		

				    

				?></h1>
               </td>
             </tr>
            
		</table>            
    </div>
</div>
<?php require("foot.php"); ?>