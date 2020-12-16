<html>
<?php
session_start();
include 'connection.php';
$q="select * from transactions";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>
<head>
<title>TRANSACTION HISTORY</title>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<style>
#table
{
	width:80%;
  margin-left: 10%;
}
h1
{
	font-size:40px;
  text-align : center;
  color : white;
}
thead, tr
{
	
	text-align:center;
	padding:8px;
}
a{
    font-size :  18px;
  }
</style>
</head>
<body style = "background-image : url('bankback.jpeg');background-repeat: no-repeat;background-size: cover;">
<div class="ui inverted segment">
  <div class="ui inverted secondary menu">
    <a class="item" href="/basicbank/">
      <img src="banksymb.jpg" alt="">
    </a>
    <a class="item" href="/basicbank/">
      Home
    </a>
    <a class="item" href="customerdetails.php">
      Customers
    </a>
    <a class="item" href="selectuser.php">
      Transaction
    </a>
    <a class="item" href="history.php">
      Transaction History
    </a>
  </div>
</div>
<h1>Transaction History</h1>
<table class ="ui selectable inverted celled table" id="table">
<thead>
<th>ID</th>
<th>SENDER'S NAME</th>
<th>RECIEVER'S NAME</th>
<th>AMOUNT </th>
</thead>
<tbody>
<tr>
<?php
while($row=mysqli_fetch_array($result)){
	?>
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["SenderName"]; ?></td>
	<td><?php echo $row["RecieverName"]; ?></td>
	<td><?php echo $row["TransAmount"]; ?></td>
<tr>
<?php }
?>
</tr>
</tbody>
</table>


</body>
</html>
	
	

