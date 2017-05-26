<?php
session_start();
include("../connect.php");
	if(isset($_POST['edit'])){
        $name = htmlentities($_POST['admin']);
		$password = htmlentities($_POST['password']);
		$sql= "UPDATE users SET , Username = '$name' WHERE Username ='$name'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../dashboard/editadmin.php?yes=0'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
		$_SESSION['user']=$name;
	}
?>