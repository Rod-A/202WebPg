<?php
include_once "newdbconnect.php";

$error=array();
if (!empty($_POST['username']))
  {
   
   if (!ctype_alnum($_POST['username']))
      {
	$error[] = 'username can only contain letters and digits <a href="index.html">sign up</a>';
	
      }
   if (strlen($_POST['username'])>10)
      {
      $error[] = 'cant be more than ten char long <a href="index.html">sign up</a>';
      
      }      
  }
else
  {
  $error[] = 'username cant be left empty <a href="index.html">sign up</a>';
  }
if ($_POST['selectionField'] == 'Producer')
  {
  
  }
if (!empty($error))
    {
    echo "some fields arent entered correctly <a href='index.html'>sign up</a>";
    
    echo '<ul>';
    foreach ($error as $value)
      {
      echo '<li>' . $value . '</li>'; //generates an ordered list of errors
      }
    echo '</ul>';
   
    }
