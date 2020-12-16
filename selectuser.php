<html>
<?php
session_start();
include 'connection.php';

$q="select * from customers";
$result=mysqli_query($con,$q);
$row_count=mysqli_num_rows($result);
?>

<head>
<title>TRANSACTION PAGE</title>

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
  width : 80%;
  padding : 1px;
  margin-left : 10%;
  
}

thead,tr{
  text-align: center;
}
h1
{
  font-size:40px;
  text-align : center;
  color : white;
}
#note{
  width: 80%;
  margin-left : 10%;
}
a{
    font-size :  18px;
    color : white;
  }


</style>
</head>
<body style="background-image:url('bankback.jpeg');width=1920px; height=1080;background-repeat: no-repeat;background-size: 100%;">
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
<h1>Transact From </h1>
<div class="ui inverted segment" id="note">
  <h3>NOTE : Please select the payee by clicking on their name.</h3>
</div>
<table class="ui inverted selectable celled table" id="table">
<thead style="text-align: center;">
<th>ID</th>
<th>NAME</th>
<th>ACCOUNT NUMBER</th>
<th>CURRENT BALANCE</th>
</thead>
<tbody>
<tr>

<?php
while($row=mysqli_fetch_array($result))
{
	?>
	<td><?php echo $row["id"]; ?></td>
	<?php echo "<td><a href = 'transact.php?name=$row[1]'><button class='ui violet button'> $row[1]</button></a></td>";?>
	<td><?php echo $row["acc_no"]; ?></td>
	<td><?php echo $row["balance"]; ?></td>
	<tr>
	
<?php }
?>

</tr>
</tbody>
</table>


</body>
</html>






























