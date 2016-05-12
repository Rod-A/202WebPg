<?php
$conn = mysqli_connect("localhost", "root", "centuary21", "newdata");
if (mysqli_connect_errno())
  {
  echo "not connected";
  echo mysqli_connect_error();
  }
 else
 {
  echo "Database connected!!!";
 }
 


  $newvae = $_POST['selectionField'];
 print_r($newvae);
# $username = $_GET['username'];
 #echo $username;
 
$select_all = ("SELECT * FROM $newvae WHERE username = '" . mysqli_real_escape_string($conn, $_POST['username']) . "' AND password = '" . sha1($_POST['password']) . "'");  
$result3 = mysqli_query($conn, $select_all);

if(mysqli_num_rows($result3) == 1)
 header("refresh:3; url=https://soundcloud.com/dj-rod-a");
 else {	$insert = "Insert into $newvae (username, password) 
	     Values('" . mysqli_real_escape_string($conn, $_POST['username']) . "',
		    '" . sha1($_POST['password']) . "')";
	$result = mysqli_query($conn, $insert);
	
	if($result)
	  {
	   echo "new record added successfully";
	  }	    
}
 
 
 
 function idk($username, $password){
 
 
 }

?>