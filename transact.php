<html>
<?php

session_start();
include 'connection.php';

if(isset($_GET['name'])){
	$name=$_GET['name'];
}

$q="select * from customers where name='$name'";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
$_SESSION['name']=$name;
?>
<head>

<title>TRANSACT</title>


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
	text-align : center;
	font-size:40px;
	color : white;
}
thead, tr
{
	border:1px solid #dddddd;
	text-align:center;
	padding:8px;
}
h3{
  margin-left:10%;
  color : white;
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

<h1>User information</h1>
<h3>Transact from</h3> 
<table class="ui selectable inverted celled table" id="table">
<thead>
<th>ID</th>
<th>NAME</th>
<th>EMAIL</th>
<th>ACCOUNT NUMBER</th>
<th>CURRENT BALANCE</th>
<th>LOCATION</th>
</thead>
<tr>
<?php
    $row=mysqli_fetch_array($result);
?>   
	<td><?php echo $row["id"]; ?></td>
	<td><?php echo $row["name"]; ?></td>
	<td><?php echo $row["email"]; ?></td>
	<td><?php echo $row["acc_no"]; ?></td>
	<td><?php echo $row["balance"]; ?></td>
	<td><?php echo $row["location"]; ?></td>
</tr >
</table>
</div>
<?php echo "<form method='post' action='transaction.php?name=$name'>"?><br><br>

<h3>Transact To</h3><br>
<table table class="ui selectable inverted celled table" id="table">
<tr>
<td width="50%">Transfer to:</td>
<td>
<select name="user" class="ui compact selection dropdown">
<?php
$q1="select * from customers where name!='$name'";
$result1=mysqli_query($con,$q1);
while($row=mysqli_fetch_array($result1)){
	?>
	<option value="<?php echo $row['name']; ?>"> <?php echo $row["name"]; ?></option>
	
<?php }
?>

</select></td></tr>
<tr><td>Amount:</td><td><div class="ui input"><input type="text" name="amount"></div></td></tr>
<tr><td colspan='2'><button class="ui inverted purple button" name="submit" value="submit" >Make Transaction</button></td></tr>
</table>

</form>
<br><br><br>



</body>
</html>