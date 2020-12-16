<html>
<head>
<title>BASIC BANKING SYSTEM</title>

<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.css">
<script
  src="https://code.jquery.com/jquery-3.1.1.min.js"
  integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8="
  crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/semantic.min.js"></script>
<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
<link rel="icon" href="favicon.ico" type="image/x-icon">
<style>
  a{
    font-size :  18px;
  }
  .ui.container.segment{
    margin-top : 5%;
  }
  .ui.text.container{
    
    width : 2500px ;
    height : 45%;
  }
  .ui.inverted.header{
    width: 100%;
    margin-top : 10%;
  }
   h1.ui.header {
     
      font-size: 4em;
      font-weight: normal;
      text-align : center;
  }

  h2{
    text-align : center;
    margin-top : 10%;
  }
  .ui.huge.button{
    margin-top : 10%;
    margin-left : 30%;
  }
  /*effect-box*/
a.effect-box:after,
a.effect-box:before {
	content: '';
  position: absolute;
 
  left: 0;
  display: inline-block;
  height: 1em;
  width: 100%;
 
 
  opacity: 0;
	-webkit-transition: opacity 0.35s, -webkit-transform 0.35s;
	transition: opacity 0.35s, transform 0.35s;
	
}

a.effect-box:before {
  border-left: 1px solid;
  border-right: 1px solid;
  -webkit-transform: scale(1,0);
	transform: scale(1,0);
}

a.effect-box:after {
  border: 2px solid;
 
  -webkit-transform: scale(0,1);
	transform: scale(0,1);
}

a.effect-box:hover:after,
a.effect-box:hover:before {
  color : #fff;
  opacity: 1;
	-webkit-transform: scale(1);
	transform: scale(1);
}
h2 a {
  color: #fff;
  font-size: 30px;
  text-decoration: none;
  display: inline-block;
  position: relative;
  font-family: 'Dosis', sans-serif;
  padding-top : 5px;
}
</style>
</head>
<body style = "background-image : url('bankback.jpeg');background-repeat: no-repeat;background-size: 100%;">
<div allign ="center" style="top:0px">
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
<div class="ui inverted raised very padded container segment">
  <div class="ui text container">
      <h1 class="ui inverted header">
        Bank Transaction System
      </h1>
      <h2>Bank Transaction Webapp made by <a class="effect-box" style="color:purple;" href="https://linktr.ee/sankalp007">Sankalp Verma</a></h2>
      <a href="selectuser.php"><div class="ui huge inverted violet button">Make a transaction<i class="right arrow icon"></i></div></a>
</div>
</div>


</body>
</html>