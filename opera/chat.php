<?php
session_start();
include("../connect.php");
	if(isset($_POST['toadmin'])){
        $content = htmlentities($_POST['content']);
        $user = htmlentities($_POST['user']);
		$sql= "INSERT INTO messagetoadmin(User,Content,Date) 
	              VALUES('$user','$content',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../user/index.php?yes=1'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
	if(isset($_POST['toadminn'])){
        $content = htmlentities($_POST['content']);
		$to = htmlentities($_POST['to']);
        $user = htmlentities($_POST['user']);
		$sql= "INSERT INTO messagetouser(User,Toooo,Content,Date) 
	              VALUES('$user','$to','$content',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/talktouser.php?user=$to#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=login.php?yes=0'>";
		}
	}
	//jay
?>