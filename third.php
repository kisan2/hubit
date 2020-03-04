<?php require  "../config/config.php";
 //include "../config/config.php";?>

<?php 
 if((isset($_REQUEST['submit']))){
 	$Fullname = $_REQUEST['Fullname'];
 	$email = $_REQUEST['email'];
 	$username = $_REQUEST['username'];
 	$password =md5($_REQUEST['password']) ;

 	$query = "INSERT INTO login(Fullname,email,username,password) VALUES('$Fullname','$email','$username','$password')";
 	$fire = mysqli_query($con,$query) or die("cannot insert ibto database".mysqli_error($con));
 	if($fire) echo "submitted in database";

    

 	//this code will be executed
 }else{
 	echo "not set";
 }

?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<title></title>
 	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" />
 </head>
 <body>
 	<div class="container">
 		<div class="row">
 				<div class="col-lg-12">
 					<!--show data here-->
 			<div class="col-lg-8">
 				<h3>user data</h3>
 				<hr>
 				

 			</div>
 					<div class="col-lg-6 ">
 				<h1>signup</h1>
 		 		<hr>
 				<form name="signup" id="signup" action="../advance/third.php" method="post">
 					<div class="form-group">
 						<label for="Fullname"> Fullname</label>

 						<input name="Fullname" id="Fullname" type="text" class="form-control" placeholder="Fullname" />	
 					</div>

 					<div class="form-group">
 						<label for="email"> email</label>

 						<input name="email" id="email" type="text" class="form-control" placeholder="email" />	
 					</div>

 					<div class="form-group">
 						<label for="username"> username</label>

 						<input name="username" id="username" type="text" class="form-control" placeholder="username" />	
 					</div>

 					<div class="form-group">
 						<label for="password"> password</label>

 						<input name="password" id="password" type="password" class="form-control" placeholder="password" />	
 					</div>

 					<div class="form-group">
 						

 						<button name="submit" id="submit" class="btn btn-primary btn-block">Sign up</button>
 					</div>
 					
 					
 				</form>
 			   </div>	
 			</div>
 		</div>	
 	</div>
 
 </body>
 </html>
	