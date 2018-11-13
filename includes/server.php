<?php 
session_start();
$username="";
$email="";
$errors=array();


$db=mysqli_connect('localhost','root','password','registration');
if(isset($_POST['register']))
{
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$email=mysqli_real_escape_string($db,$_POST['email']);
	$password_1=mysqli_real_escape_string($db,$_POST['password_1']);
	$password_2=mysqli_real_escape_string($db,$_POST['password_2']);
	if(empty($username))
    {  
      array_push($errors,"Username is required");
     }
     if(empty($email))
     {
     	array_push($errors,"Email is required");
     }
     if(empty($password_1))
     {
     	array_push($errors,"Password is required");
     }
     if($password_1!=$password_2)
     {
     	array_push($errors,"The two passwords do not match");
     }
     $q="SELECT * FROM libreg WHERE username='$username'";
     $result=$db->query($q);
     if ($result->num_rows > 0) {
       array_push($errors,"Username already exists.");
     }

     if(count($errors)==0)
     {
     	$password_1=md5($password_1);
     	$query="INSERT INTO libreg(username,password) VALUES('$username','$password_1')";
     	mysqli_query($db,$query);
     	$_SESSION['username']=$username;
     	$_SESSION['success']="You are now logged in";
     	header('location: mainpage.php');
     }

}
if(isset($_POST['login']))
{
	$username=mysqli_real_escape_string($db,$_POST['username']);
	$password=mysqli_real_escape_string($db,$_POST['password']);
	if(empty($username))
    {  
      array_push($errors,"Username is required");
     }
     if(empty($password))
     {
     	array_push($errors,"Password is required");
     }
     if(count($errors)==0)
     {
     	$password=md5($password);
     	$query="SELECT * FROM libreg WHERE username='$username' AND password='$password' ";
     	$result=mysqli_query($db,$query);
     	if(mysqli_num_rows($result)==1)
     	{
     		//log user in
     		$_SESSION['username']=$username;
     		$_SESSION['success']="You are now logged in";
     		header('location: includes/mainpage.php');//redirect to main page
     	}
     	else
     	{
     		array_push($errors,"Incorrect username or password");
     	}
     }
}    

////logout yaad rakhna 

?>