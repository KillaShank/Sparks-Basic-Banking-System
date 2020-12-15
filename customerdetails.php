<html>
<?php

session_start();
include 'connection.php';

$q="select * from customers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);

?>
<head>

<title>CUSTOMER DETAILS</title>


<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style>


#table
{
	width:80%;
  margin-left: 10%;
}
h1
{
	font-size:40px;
  color: white;
  text-align : center;
}
thead, tr
{
	border:1px solid #dddddd;
	text-align:center;
	padding:8px;
}
a{
    font-size :  18px;
  }
</style>
</head>
<body style = "background-image : url('bankpic.webp');background-repeat: no-repeat;background-size: 100%;">

<div class="ui inverted segment">
  <div class="ui inverted secondary menu">
    <a class="item" href="/basicbank/">
      <img src="banksymb.jpg" alt="">
    </a>
    <a class="item" href="/basicbank/">
      Home
    </a>
    <a class="item" href="customerdetails.php" target="frame">
      Customers
    </a>
    <a class="item" href="selectuser.php" target="frame">
      Transaction
    </a>
    <a class="item" href="history.php" target="frame">
      Transaction History
    </a>
  </div>
</div>
<h1>Details of Customer</h1>
<table class ="ui selectable inverted celled table" id="table">
<thead>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>ACCOUNT NUMBER</th>
<th>CURRENT BALANCE</th>
<th>LOCATION</th>
</thead>
<tbody>
<tr>
<?php
while($row=mysqli_fetch_array($result)){
	?>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["acc_no"]; ?></td>
	<td><?php echo $row["balance"]; ?></td>
	<td><?php echo $row["location"]; ?></td>
<tr>
<?php }
?>
</tr>
</tbody>
</table>

</body>
</html>
	
	
	
	
	
	
	



















 
