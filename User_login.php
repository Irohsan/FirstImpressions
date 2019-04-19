<?php

include 'utility.php';

class User_login
{

$name = $_POST["name"];
$password = $_POST["password"];
  
  function EmptyBoxes()
  {
  	if(empty($_POST["name"]) || empty($_POST["password"]))
  	{
  		$name_error = "Please fill out the empty box/boxes";
  		return false;
 	}
 	return true;
 	
  }
 
 function nameExisting()
 {
 	$query = queryDatabase('profile_tbl','name',"WHERE name=$name", 1);
 	return checkExisting($name, $query);	
 }
 
 function passwordExisting()
 {
 	$query = queryDatabase('profile_tbl','password',"WHERE password=$password", 1);
 	return checkExisting($password, $query);
	
 }
 
 //rechecking
 function login()
 {
 	if (nameExisting() == true && passwordExisting() == true)
 	{
		$profile_Link = "cefns.nau.edu/~ma2594/User_login.php/". $name;
		echo "<a href = '" . $profile_Link . "'>" . "</a>";
 	} 
 }	
 	
 		

 		
 		
  
  
  
  
}
  
  
