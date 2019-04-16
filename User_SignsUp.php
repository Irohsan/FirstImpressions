<?php

include 'utility.php';

class User_login
{

$name_error;
$password_error;

  
  function EmptyBoxes()
  {
  	if(empty($_POST["name"]) || empty($_POST["password"]))
  	{
  		$name_error = "Please fill out the empty box/boxes";
  		return false;
 	}
 	return true;
 	
  }
 
 function nameExisting($name)
 {
 	$query = queryDatabase('profile_tbl','name',"WHERE name=$name", 1);
 	if($name != $query)
 	{
 		$name_error = "User not found";
 		return false;
 	}
 	return true
 	
 }
 
 function passwordExisting($password)
 {
 	$query = queryDatabase('profile_tbl','password',"WHERE password=$password", 1);
 	if ($password != $query)
 	{
 		$password_error = "password not correct";
 		return false;
 	}
 	return true;
	
 }
 
 function login($name, $pasword)
 {
 	if (nameExisting($name) == true && passwordExisting($password) == true)
 	{
 		
 	} 
 	
 	
 		

 		
 		
  
  
  
  
}
  
  
