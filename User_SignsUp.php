<?php 
include 'utility.php';

class User_SignsUp 
{
$message_error
$name = $_POST["name"];
$email = $_POST["email"];
$emailC = $_POST["emailC"];
$password = $_POST["password"];
$passwordC = $_POST["passwordC"];
 
  function EmptyBoxes()
  {
  	if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["emailC"]) || 
  					empty($_POST["password"]) || empty($_POST["passwordC"]))
  	{
  		$message_error = "Please fill out the empty box/boxes";
  		return false;
 	}
 	return true;
  }
  
  function checkMatchingEmails()
  {
  	return checkExisting($email, $emailC);
  }
  
  function checkMatchingPasswords($password, $passwordC)
  {
  	return checkExisting($password, $passwordC);
  }
    
  function checkExistingName()
  {
   $query = queryDatabase('profile_tbl','name',"WHERE name=$name", 1);
   return checkExisting($name, $query);
  }
  
  function checkAndInsert()
  {
  if (checkExistingName() == true && checkMatchingPasswords() == true
  	 && checkMatchingEmails() == true && EmptyBoxes() == true)
	{
 	insertInto("profile_tbl", "name", $name);
  	insertInto("profile_tbl", "email", $email);
  	insertInto("profile_tbl", "password", $password);
  	}
  }
}

?>
