<html>
<?php 
include 'utility.php';
class User_SignsUp 
{

public $name = $_POST["name"];
public $email = $_POST["email"];
public $emailC = $_POST["emailC"];
public $password = $_POST["password"];
public $passwordC = $_POST["passwordC"];
public $name_error;
public $email_error;
public $password_error;


  connectToDatabase();
  
  function EmptyBoxes()
  {
  	if(empty($_POST["name"]) || empty($_POST["email"]) || empty($_POST["emailC"]) || 
  					empty($_POST["password"]) || empty($_POST["passwordC"]))
  	{
  		$name_error = "Please fill out the empty box/boxes";
  		return false;
 	}
  }
  function checkMatchingEmails($email, $emailC)
  {
  	if ($email != $emailC)
  	{
  		$email_error = "emails does not match";
  		return false;
  	}
  }
  function checkMatchingPasswords($password, $passwordC)
  {
  	if($password != $passwordC)
  	{
  		$password_error = "passwords does not match";
  		return false;
  	}
  }
    
  function checkExistingName()
  {
   $get_u = mysql_query ("SELECT * FROM profile_tbl WHERE name='$name'");
   if (mysql_num_rows($get_u) > 0)
   {
  	$name_error = "Username already exists";
  	return false;
   }
  }
  function checkAndInsert()
  if (!checkExistingName() && !checkMatchingPasswords($password, $passwordC) 
  	 && !checkMatchingEmails($email, $emailC,) && !EmptyBoxes())
  {
 
  	insertInto("profile_tbl", "name", $name);
  	insertInto("profile_tbl", "email", $email);
  	insertInto("profile_tbl", "password", $password);
  }
  $conn->close();
}



?>
    <head>
        <link rel = "stylesheet" type="text/css" href="User_SignsUp.css">
    </head>
    <div id = "div1"> First Impression </div>
    <div id = "box1">
    <div class = "boxs">
    
<form name="myform" class = "boxs" action = "User_SignsUp.php" method = "POST">
	<span class = "error"><?= $name_error?></span>
	<span class = "error"><?= $email_error?></span> 
	<span class = "error"><?= $password_error?></span> 
	<h1> </h1>
	 Username: <input type = "text" name = "name">
     Email: <input type = "text" name = "email" placeholder = 'you@example.com'/>
     Email Confirmation: <input type = "text" name = "emailC" > 
   	 Password: <input type = "password" name = "password">
   	 Password confirmation: <input type = "password" name = "passwordC">
   	<select name = "category">
   	<option value = "0" selected = "selected"> Select a category </option>
    <option value = "fashCategory"> Fashion </option>
    <option value = "foodCategory"> Food </option>
    <option value = "histCategory"> History </option>
    <option value = "natuCategory"> Nature </option>
    <option value = "peopCategory"> People </option>
    <option value = "placCategory"> Places </option>
    <option value = "popCategory"> Pop culture </option>
    <option value = "otheCategory"> Other </option>
    </select>
    <h1> </h1>
    <input type = "submit" name = "signup-button" value = "Sign up"/>
    
    </form>
</div>
</div>
</html>
