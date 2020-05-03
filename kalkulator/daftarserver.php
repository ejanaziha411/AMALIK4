<?php
include('connection.php');
if(empty($_SESSION))
	session_start();
if(isset($_POST['submit']))
	header("location:index.php");
exit;


$test_query = "SELECT*FROM user WHERE username".$_POST[username]."";
$query_result=mysqli_query($test_query);

if(mysqli_num_rows($query_result)==0){
	echo"The username you entered is invalid";
}else{
	while($row_query=mysqli_fetch_array($query_result)){
		if($row_query['password']==$_POST['password']){
			$_SESSION['password']=$_POST['password'];
			header("location:index.php");
			exit;
		}else{echo "Invalid password";}
	}
}
?>