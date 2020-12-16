<?php

session_start();
include 'connection.php';
$flag=0;
if(isset($_POST['submit'])){
	$a=$_POST['user'];
	$b=$_POST['amount'];
	$d=$_GET['name'];
}

$result1 = mysqli_query($con,"SELECT * FROM customers where name='$d'");
if (!$result1) {
	printf("Error: %s\n", mysqli_error($con));
	exit();
}
while($row = mysqli_fetch_array($result1)){
	// $g = $row[3];
	if($row["balance"]<$b){
		$flag = 1;
		echo '<script>alert("Insufficient Balance")</script>'; 
		
		echo "<script>location.href='selectuser.php';</script>";
	}
	else{
		$e= "UPDATE customers SET balance=balance - '$b' WHERE name='$d'";
	
		mysqli_query($con,$e);
	}
	
}

$result2= mysqli_query($con,"SELECT * FROM customers where name='$a'");
if (!$result2) {
	printf("Error: %s\n", mysqli_error($con));
	exit();
}
while($row = mysqli_fetch_array($result2)){
	$f = $row[3];
	if($flag==0){
		$z= "UPDATE customers SET balance=balance +'$b' WHERE name='$a'";
		mysqli_query($con,$z);
	}
	
	
}


$result3 = mysqli_query($con,"SELECT * FROM customers where name='$d'");
if (!$result3) {
	printf("Error: %s\n", mysqli_error($con));
	exit();	
}
while($row = mysqli_fetch_array($result3)) {
	if($row["balance"]<$b){
		break;
	}
	else{
		$h="INSERT INTO transfers(SenderName,RecieverName,TransAmount) VALUES('".$d."','".$a."','".$b."')";
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
