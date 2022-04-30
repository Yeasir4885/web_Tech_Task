<?php
include '../Model/Doctor-model.php';
if(isset($_GET['q'])){
$data = doc_authentication($_GET['q']);

if($data != null){?>

<table>
  
    <tr>

    <th>Doctor_Name</th>

    <th>Email</th>

    <th>Specialist</th>

    <th>Mobile</th>

    <th>Available time</th>

</tr>

<tr>

    <td><?php echo $data["name"] ; ?></td>

    <td><?php echo $data["email"] ; ?></td>

    <td><?php echo $data["specialist"] ; ?></td>

    <td><?php echo $data["mobile"] ; ?></td>

    <td><?php echo $data["available time"] ; ?></td>

</tr>
</table>
 
<?php
}else{
  echo $_GET['q']." ===No doctor with this name";
}



}

?>