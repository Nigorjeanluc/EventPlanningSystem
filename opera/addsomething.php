<?php
session_start();
include("../connect.php");
	if(isset($_POST['yeah'])){
        $company = htmlentities($_POST['company']);
		$phone=htmlentities($_POST['phone']);
        $name = htmlentities($_POST['item']);
        $gender=htmlentities($_POST['sex']);
		$price = htmlentities($_POST['price']);
		$period= htmlentities($_POST['period']);
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
		$quantity= htmlentities($_POST['quantity']);
        $quality = htmlentities($_POST['quality']);
        $categorie = htmlentities($_POST['catwed']);
        $weddd=htmlentities($_POST['weddd']);
        $about = htmlentities($_POST['about']);
        $event = "Wedding&clothes";
        $currency=htmlentities($_POST['currency']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['id'];
		$sql= "INSERT INTO service(Name,Sex,CompanyName,Phone,Price,Currency,PeriodOfRent,Event,Categorie,picone,pictwo,picthree,Quantity,Types,Quality,MoreAbout,Province,District,Sector,Date,AdminId,Available) 
	              VALUES('$name','$gender','$company','$phone','$price','$currency','$period','$event','$categorie','$piconein','$pictwoin','$picthreein','$quantity','$weddd','$quality','$about','$province','$district','$sector',now(),'$id',1)";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/clothes.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/clothes.php?no=0'>";
		}
	}
	//cars
	if(isset($_POST['yeahh'])){
        $company = htmlentities($_POST['company']);
		$phone=htmlentities($_POST['phone']);
        $name = htmlentities($_POST['item']);
        $gender="none";
		$price = htmlentities($_POST['price']);
		$period= htmlentities($_POST['period']);
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
		$quantity= 1;
        $quality = htmlentities($_POST['quality']);
        $categorie = htmlentities($_POST['catwed']);
        $about = htmlentities($_POST['about']);
        $event = "Car";
        $currency=htmlentities($_POST['currency']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['id'];
		$sql= "INSERT INTO service(Name,Sex,CompanyName,Phone,Price,Currency,PeriodOfRent,Event,Categorie,picone,pictwo,picthree,Quantity,Types,Quality,MoreAbout,Province,District,Sector,Date,AdminId,Available) 
	              VALUES('$name','$gender','$company','$phone','$price','$currency','$period','$event','$categorie','$piconein','$pictwoin','$picthreein','$quantity','$quality','$about','$province','$district','$sector',now(),'$id',1)";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/cars.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/cars.php?no=0'>";
		}
	}
	//Venue
	if(isset($_POST['yeahhh'])){
        $company = htmlentities($_POST['company']);
		$phone=htmlentities($_POST['phone']);
        $name = htmlentities($_POST['item']);
        $gender="none";
		$price = htmlentities($_POST['price']);
		$period= htmlentities($_POST['period']);
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
		$quantity= 1;
        $quality = htmlentities($_POST['quality']);
        $categorie = htmlentities($_POST['cat']);
        $about = htmlentities($_POST['about']);
        $event = "Venue";
        $currency=htmlentities($_POST['currency']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['id'];
		$sql= "INSERT INTO service(Name,Sex,CompanyName,Phone,Price,Currency,PeriodOfRent,Event,Categorie,picone,pictwo,picthree,Quantity,Types,Quality,MoreAbout,Province,District,Sector,Date,AdminId,Available)
	              VALUES('$name','$gender','$company','$phone','$price','$currency','$period','$event','$categorie','$piconein','$pictwoin','$picthreein','$quantity','$quality','$about','$province','$district','$sector',now(),'$id',1)";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/venue.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/venue.php?no=0'>";
		}
	}
	//Sono
	if(isset($_POST['yeahhhh'])){
        $company = htmlentities($_POST['company']);
		$phone=htmlentities($_POST['phone']);
        $name = htmlentities($_POST['item']);
        $gender="none";
		$price = htmlentities($_POST['price']);
		$period= htmlentities($_POST['period']);
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
		$quantity= 1;
        $quality = htmlentities($_POST['quality']);
        $categorie = "----";
        $about = htmlentities($_POST['about']);
        $event = "Sono";
        $currency=htmlentities($_POST['currency']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['id'];
		$sql= "INSERT INTO service(Name,Sex,CompanyName,Phone,Price,Currency,PeriodOfRent,Event,Categorie,picone,pictwo,picthree,Quantity,Types,Quality,MoreAbout,Province,District,Sector,Date,AdminId,Available)  
	              VALUES('$name','$gender','$company','$phone','$price','$currency','$period','$event','$categorie','$piconein','$pictwoin','$picthreein','$quantity','$quality','$about','$province','$district','$sector',now(),'$id',1)";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/sono.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/sono.php?no=0'>";
		}
	}
    //Deco
	if(isset($_POST['yeahhhhh'])){
        $company = htmlentities($_POST['company']);
		$phone=htmlentities($_POST['phone']);
        $name = htmlentities($_POST['item']);
        $gender="none";
		$price = htmlentities($_POST['price']);
		$period= htmlentities($_POST['period']);
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
		$quantity= 1;
        $quality = htmlentities($_POST['quality']);
        $categorie = "----";
        $about = htmlentities($_POST['about']);
        $event = "Deco";
        $currency=htmlentities($_POST['currency']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['id'];
		$sql= "INSERT INTO service(Name,Sex,CompanyName,Phone,Price,Currency,PeriodOfRent,Event,Categorie,picone,pictwo,picthree,Quantity,Types,Quality,MoreAbout,Province,District,Sector,Date,AdminId,Available)
	              VALUES('$name','$gender','$company','$phone','$price','$currency','$period','$event','$categorie','$piconein','$pictwoin','$picthreein','$quantity','$quality','$about','$province','$district','$sector',now(),'$id',1)";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/deco.php?yes=0#hh'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/deco.php?no=0'>";
		}
	}
    //Cake
	if(isset($_POST['yeahhhhhh'])){
        $company = htmlentities($_POST['company']);
		$phone=htmlentities($_POST['phone']);
        $name = htmlentities($_POST['item']);
        $gender="none";
		$price = htmlentities($_POST['price']);
		$period= " ";
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
		$quantity= 1;
        $quality = htmlentities($_POST['quality']);
        $categorie = "----";
        $about = htmlentities($_POST['about']);
        $event = "Cake";
        $currency=htmlentities($_POST['currency']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['id'];
		$sql= "INSERT INTO service(Name,Sex,CompanyName,Phone,Price,Currency,PeriodOfRent,Event,Categorie,picone,pictwo,picthree,Quantity,Types,Quality,MoreAbout,Province,District,Sector,Date,AdminId,Available) 
	              VALUES('$name','$gender','$company','$phone','$price','$currency','$period','$event','$categorie','$piconein','$pictwoin','$picthreein','$quantity','$weddd','$quality','$about','$province','$district','$sector',now(),'$id',1)";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/cake.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/cake.php?no=0'>";
		}
	}
    //Catering
	if(isset($_POST['yeahhhhhhh'])){
        $company = htmlentities($_POST['company']);
		$phone=htmlentities($_POST['phone']);
        $name = htmlentities($_POST['item']);
        $gender="none";
        $weddd="none";
		$price = htmlentities($_POST['price']);
		$period= htmlentities($_POST['period']);
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
		$quantity= 1;
        $quality = htmlentities($_POST['quality']);
        $categorie = "----";
        $about = htmlentities($_POST['about']);
        $event = "Catering";
        $currency=htmlentities($_POST['currency']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['id'];
		$sql= "INSERT INTO service(Name,Sex,CompanyName,Phone,Price,Currency,PeriodOfRent,Event,Categorie,picone,pictwo,picthree,Quantity,Types,Quality,MoreAbout,Province,District,Sector,Date,AdminId,Available) 
	              VALUES('$name','$gender','$company','$phone','$price','$currency','$period','$event','$categorie','$piconein','$pictwoin','$picthreein','$quantity','$weddd','$quality','$about','$province','$district','$sector',now(),'$id',1)";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/catering.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/catering.php?no=0'>";
		}
	}
    //Messages
    if(isset($_POST['msg'])){
        $name = htmlentities($_POST['surnom']);
		$phone=htmlentities($_POST['phone']);
        $email = htmlentities($_POST['email']);
        $more = htmlentities($_POST['more']);
		$sql= "INSERT INTO messages(Name,Email,Phone,Content,Date) 
	              VALUES('$name','$email','$phone','$more',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../about.php?yes=1#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../about.php?no=1#here'>";
		}
	}
    //Register
    if(isset($_POST['freeee'])){
        $name = htmlentities($_POST['surnom']);
		$phone=htmlentities($_POST['phone']);
        $email = htmlentities($_POST['email']);
        $pass1 = htmlentities($_POST['pass1']);
        $pass2 = htmlentities($_POST['pass2']);
        if($pass2==$pass1){
            include('../connect.php');
            $sql= "SELECT * FROM users WHERE Username='$name'";
		    $res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
            while($myrow = mysqli_fetch_array($res)){
                $username=$myrow['Username'];
                $emaill=$myrow['Email'];
            }
                if(($name==$username)||($email==$emaill)){
                    echo "<meta http-equiv='refresh' content='0;url=../index.php?yes=3#hh'>";
                }else{
                    $_SESSION['user']=$name;
                    $sql= "INSERT INTO users(Username,Email,Phone,Password,Date) 
                            VALUES('$name','$email','$phone','$pass2',now())";
                    $res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
                    if(isset($res)){
                        echo "<meta http-equiv='refresh' content='0;url=../index.php?yes=1#hh'>";
                    }else{
                        echo "<meta http-equiv='refresh' content='0;url=../index.php?no=1#here'>";
                    }
                }
        }else{
            echo "<meta http-equiv='refresh' content='0;url=../index.php?yes=2#hh'>";
        }
	}
    //company
    if(isset($_POST['yea'])){
        $company = htmlentities($_POST['company']);
		$owner=htmlentities($_POST['owner']);
        $email = htmlentities($_POST['email']);
        $phone = htmlentities($_POST['phone']);
        $categorie = htmlentities($_POST['category']);
        $password = htmlentities($_POST['password']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['id'];
		$sql= "INSERT INTO company(Owner,Company,Email,Phone,Picture01,Picture02,Picture03,Categorie,Password,Admin_ID,Date)
	              VALUES('$owner','$company','$email','$phone','$piconein','$pictwoin','$picthreein','$categorie','$password','$id',now())";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/company.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/company.php?no=0'>";
		}
	}
    //Owner
	if(isset($_POST['yeaa'])){
        $company = htmlentities($_POST['comp']);
		$phone="none";
        $name = htmlentities($_POST['item']);
        $gender="none";
		$price = htmlentities($_POST['price']);
		$period= "none";
        $province = htmlentities($_POST['province']);
        $district = htmlentities($_POST['district']);
        $sector = htmlentities($_POST['sector']);
		$quantity= htmlentities($_POST['quantity']);
        $quality = "none";
        $categorie = "----";
        $about = htmlentities($_POST['about']);
        $event = "Owner";
        $currency=htmlentities($_POST['currency']);
		$targetFolder = "../assets/img/products/";
		$targetFolders = "assets/img/products/";
        $picone= $targetFolder.basename($_FILES['picone']['name']);
        $pictwo= $targetFolder.basename($_FILES['pictwo']['name']);
        $picthree= $targetFolder.basename($_FILES['picthree']['name']);
        $file_tmp1=$_FILES['picone']['tmp_name'];
        $file_tmp2=$_FILES['pictwo']['tmp_name'];
        $file_tmp3=$_FILES['picthree']['tmp_name'];
		move_uploaded_file($file_tmp1,$picone);
        move_uploaded_file($file_tmp2,$pictwo);
		move_uploaded_file($file_tmp3,$picthree);
        $piconein= $targetFolders.basename($_FILES['picone']['name']);
        $pictwoin= $targetFolders.basename($_FILES['pictwo']['name']);
        $picthreein= $targetFolders.basename($_FILES['picthree']['name']);
        $id=$_SESSION['idd'];
		$sql= "INSERT INTO service(Name,Sex,CompanyName,Phone,Price,Currency,PeriodOfRent,Event,Categorie,picone,pictwo,picthree,Quantity,Types,Quality,MoreAbout,Province,District,Sector,Date,AdminId,Available)
	              VALUES('$name','$gender','$company','$phone','$price','$currency','$period','$event','$categorie','$piconein','$pictwoin','$picthreein','$quantity','none','$quality','$about','$province','$district','$sector',now(),'$id',1)";
		$res= mysqli_query($dbcon,$sql) or die ("Failed".mysqli_error());
		if(isset($res)){
			echo "<meta http-equiv='refresh' content='0;url=../admin/index1.php?yes=0#here'>";
		}else{
			echo "<meta http-equiv='refresh' content='0;url=../admin/index1.php?no=0'>";
		}
	}
    ?>