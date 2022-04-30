<?php
include '../Model/patient-model.php';

$data = doc_authentication($_GET['q']);

if($data != null){?>

<table>
  
    <tr>

    <th>Name</th>

    <th>Email</th>

    <th>username</th>

    <th>Birthday</th>

    <th>Gender</th>

</tr>

<tr>

    <td><?php echo $data["patient_name"] ; ?></td>

    <td><?php echo $data["e-mail"] ; ?></td>

    <td><?php echo $data["username"] ; ?></td>

    <td><?php echo $data["dob"] ; ?></td>

    <td><?php echo $data["gender"] ; ?></td>

</tr>
</table>
 
<?php
}else{
  echo $_GET['q']." does not exist";
}





?>