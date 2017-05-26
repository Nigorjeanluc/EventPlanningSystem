<?php
	include("../connect.php");
	if(isset($_REQUEST['SID'])){
		$ID = $_REQUEST['SID'];
		$sql= "DELETE FROM orders WHERE ID=$ID";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=../admin/allorders.php?yes=1'>";
	}
    if(isset($_REQUEST['OID'])){
		$ID = $_REQUEST['OID'];
		$sql= "DELETE FROM orders WHERE ID=$ID";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=../admin/allorders1.php?yes=1'>";
	}
?>