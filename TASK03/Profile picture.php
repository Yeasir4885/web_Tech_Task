<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <title>
        PROFILE PICTURE
        
    </title>
        </head>
<body>

			<?php
					$img_name = "picture.png";
				// Check if image file is a actual image or fake image
				if(isset($_POST["sub"])) {
					
					$target_dir = "../uploads/";
					$target_file = $target_dir . basename($_FILES["img-file"]["name"]);
					$uploadOk = 1;
					$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
					$img_name =  $target_dir.basename($_FILES["img-file"]["name"]);

				 
				if ($_FILES["img-file"]["size"] > 400000) {
				  echo "Picture size should not be more than 4MB";
				  $uploadOk = 0;
				}

				// Allow certain file formats
				if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
				  echo " Picture format must be in jpeg or jpg or png";
				  $uploadOk = 0;
				}

				// Check if $uploadOk is set to 0 by an error
				if ($uploadOk == 0) {
				  echo "\nSorry, your file was not uploaded.";
				// if everything is ok, try to upload file
				} else {
				  if (move_uploaded_file($_FILES["img-file"]["tmp_name"], $target_file)) {
					$img_name = $_FILES["img-file"]["name"];
				} else {
				    echo "\nSorry, there was an error uploading your file.";
				  }
				}


				//update the img attribute
				$idx = 0;

				$userData = json_decode(file_get_contents("data.json"), true);
				if($userData != NULL){
					foreach ($userData as $user){
						if($user["username"] === $_SESSION['username']){
							$idx++;
							global $tmp_user;
							$tmp_user = $user;
							$tmp_user["image"] = $img_name;
						}
					}
					if($idx > 0){
						$userData[$idx-1] = $tmp_user;
					}
					file_put_contents("data.json", json_encode($userData));
				}
			}
				?>
<fieldset>
         <legend>PROFILE PICTURE</legend>
				<img src="../TASK03/<?php 
				if (isset($_SESSION['image'])){
					echo $_SESSION['image'];
				} else if(isset($img_name)){
					echo $img_name;
					} else{
					echo "picture.png";
				} 
			?>
			" width="220" height="300">
				<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post" enctype="multipart/form-data">
			      <br>
				  Choose photo: <input type="file" name="img-file"><br>
				  <hr>
				  <input type="submit" name="sub" value="Submit">
			      <br>
</fieldset>
			 	</form>
                      
</body>
</html>