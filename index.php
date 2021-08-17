<?php
$conn=mysqli_connect("localhost","root","","stock_management");
if(isset($_post['btnsubmit']))
{
	$email = $_POST['email'];
	$password = $_POST['password'];

	$query = "select * from stock_management where email= '{$name}' and password = '{$password}'";
	$result = mysqli_query($conn,$query);
	if($res=mysqli_fetch_array($result))
	{
		echo "<script>alert(\"Login sucessfull\");</script>";
	}
	else
	{
		echo "<script>alert(\"Login Failed\");</script>";
	 } 
}
$conn->close();	
?>



<!DOCTYPE html>
<html>
<head>
	<title>nature</title>
	 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<style type="text/css">
	.container-fluid{
	align-items: center;
	background-image: url('water_drop_wallpaper_high_resolution_021.jpg');
	background-repeat: no-repeat;
	width: 1000px;
	height: 2000px;
}
#log{
	border:2px ;
	padding: 60px 40px;
	margin-top: 30px;
	-webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
-moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
}
img{
	width: 150px;
	margin:auto;
}
h1{
	color: white;
	text-align: center;
	font-weight: bolder;
	margin-top: -20px;
}
label{
	font-size: 20px;
	color: white;
}
button{

	-webkit-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
-moz-box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
box-shadow: -5px 2px 62px 8px rgba(0,0,0,0.75);
}
		
	</style>
</head>
<body>

<div class="container-fluid">
   <div class="row">
   	<div class="col-md-4 col-sm-4 col-xs-12 "> 
</div>
   	<div class="col-md-4 col-sm-4 col-xs-12 ">
       <form id="log" action="stock.php" method="post">
       <h1>Login Form</h1>
       <img  class="img img-responsive img-circle" src="source.gif">
       	<div class="form-group">
       		<label>Email</label>
       		<input type="Email" class="form-control" name="email" placeholder="Email">
       	</div>
       	<div class="form-group">
       		<label>Password</label>
       		<input type="Password" class="form-control" name="password" placeholder="Password">
       	</div>
       	<div class="checkbox">
       		<label><input type="checkbox" >Remember me</label>
       	</div>
       	<button type="submit" class="btn btn-success btn-block" name="btnsubmit">Login</button>
       </form>

   	 </div>

    <div class="col-md-4 col-sm-4 col-xs-12 text-center">
   		
   	</div>
 
</div>



</body>
</html>