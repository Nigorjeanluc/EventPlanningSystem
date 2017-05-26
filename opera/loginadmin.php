<?php
session_start();
include("../connect.php");
	if(isset($_POST['poo'])){
		$username = htmlentities($_POST['name']);
        $password = htmlentities($_POST['password']);
		$sql= "SELECT * FROM admin WHERE Name='$username' AND Password='$password'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			$_SESSION['admin']=$username;
			$_SESSION['id']=$row['ID'];
			echo "<meta http-equiv='refresh' content='0;url=../admin/index.php'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../logadmin/index.php?yes=0'>";
		}
	}
	//Companies
	if(isset($_POST['pooo'])){
		$username = htmlentities($_POST['name']);
        $password = htmlentities($_POST['password']);
		$sql= "SELECT * FROM company WHERE (Owner='$username' OR Company='$username') AND Password='$password'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			$_SESSION['company']=$username;
			$_SESSION['idd']=$row['ID'];
			echo "<meta http-equiv='refresh' content='0;url=../admin/index1.php'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../logadmin/index1.php?yes=0'>";
		}
	}
	//orders
	if(isset($_POST['kbss'])){
		$content = htmlentities($_POST['contents']);
		$user=$_SESSION['user'];
		$prod=htmlentities($_POST['pro']);
		$serviceId=htmlentities($_POST['SID']);
		$phone=htmlentities($_POST['phone']);
		$pipsql = mysqli_query($dbcon,"SELECT * FROM users WHERE Username='$user'");
  		while($myrow = mysqli_fetch_array($pipsql)){
			  $name=$myrow['Username'];
		}
		$pipsqli = mysqli_query($dbcon,"SELECT * FROM company WHERE Username='$user'");
  		while($myrow = mysqli_fetch_array($pipsqli)){
			  $name=$myrow['Username'];
		}
		$sql= "INSERT INTO orders(fromuser,Phone,userID,serviceID,Date)
	              VALUES('$content','$phone','$name','$prod',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo '<meta http-equiv="refresh" content="0;url=../order.php?SID='.$serviceId.'&&yes=1">';
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../order.php?no=0'>";
		}
	}
	//users
	if(isset($_POST['freee'])){
		$username = htmlentities($_POST['name']);
        $password = htmlentities($_POST['password']);
		$sql= "SELECT * FROM users WHERE Username='$username' AND Password='$password'";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		$row= mysqli_fetch_array($res);
		if(isset($row)){
			$_SESSION['user']=$username;
			$_SESSION['id']=$row['ID'];
			echo "<meta http-equiv='refresh' content='0;url=../index.php?yes=1#hh'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../index.php?yes=0'>";
		}
	}
?>