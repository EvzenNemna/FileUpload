<?php

$filename = $_FILES['file']['name'];
$pathname = $_FILES['file']['tmp_name'];

$location = "upload/".$filename;

if ( move_uploaded_file($_FILES['file']['tmp_name'], $location) ) { 
  echo "$location";
} else { 
  echo 'Failure'; 
}
?>