<?php
$filedir = "Profile Picture/";
$filedir = $filedir . basename($_FILES["ProfilePicture"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($filedir,PATHINFO_EXTENSION));


if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["ProfilePicture"]["tmp_name"]);
  if($check !== false) {
    echo "File is an image - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an image.";
    $uploadOk = 0;
  }
}


if (file_exists($filedir)) {
  echo "Sorry, file already exists.";
  $uploadOk = 0;
}


if ($_FILES["ProfilePicture"]["size"] > 500000) {
  echo "Sorry, your file is too large.";
  $uploadOk = 0;
}


if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
  echo "Sorry, only JPG, JPEG & PNG are allowed.";
  $uploadOk = 0;
}

if ($uploadOk == 0) {
  echo "Sorry! Your file was not uploaded.";

} else {
  if (move_uploaded_file($_FILES["ProfilePicture"]["tmp_name"], $filedir)) {
    echo "The file ". basename( $_FILES["ProfilePicture"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
?>