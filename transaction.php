<?php

session_start();
include 'connection.php';
$flag=0;
if(isset($_POST['submit'])){
	$user=$_POST['user'];
	$amt=$_POST['amount'];
	$name=$_GET['name'];
}

$r1 = mysqli_query($con,"SELECT * FROM customers where name='$name'");
if (!$r1) {
	printf("Error: %s\n", mysqli_error($con));
	exit();
}
while($row = mysqli_fetch_array($r1)){
	
	if($row["balance"]<$amt){
		$flag = 1;
		echo '<script>alert("Insufficient Balance. Please Try Again!!!!")</script>'; 
		
		echo "<script>location.href='selectuser.php';</script>";
	}
	else{
		$q = "UPDATE customers SET balance=balance - '$amt' WHERE name='$name'";
	
		mysqli_query($con,$q);
	}
	
}

$r2= mysqli_query($con,"SELECT * FROM customers where name='$user'");
if (!$r2) {
	printf("Error: %s\n", mysqli_error($con));
	exit();
}
while($row = mysqli_fetch_array($r2)){
	if($flag==0){
		$z= "UPDATE customers SET balance=balance +'$amt' WHERE name='$user'";
		mysqli_query($con,$z);
	}
	
	
}


$r3 = mysqli_query($con,"SELECT * FROM customers where name='$name'");
if (!$r3) {
	printf("Error: %s\n", mysqli_error($con));
	exit();	
}
while($row = mysqli_fetch_array($r3)) {
	if($row["balance"]<$amt){
		break;
	}
	else{
		$h="INSERT INTO transactions(SenderName,RecieverName,TransAmount) VALUES('".$name."','".$user."','".$amt."')";
		mysqli_query($con,$h);
	}
	
}

?>

<html>
<head>

<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<script>
alert("Your Transaction is Successful");
</script>

<?php 
    echo "<script>location.href='history.php';</script>";
?>


</head>
</html>
