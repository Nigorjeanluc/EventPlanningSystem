<?php
	include("../connect.php");
	if(isset($_REQUEST['del'])){
		$ID = $_REQUEST['del'];
		$sql= "DELETE FROM service WHERE ID=$ID";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		echo "<meta http-equiv='refresh' content='0;url=../admin/items.php?yes=1'>";
	}
?>