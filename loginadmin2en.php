<?php
   session_start();
?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>إعاقتي بداية نجاحي</title>
  <link href="log.css?session=7" rel="stylesheet">
   <link href="csen.css?=version=6" rel="stylesheet">
  <script type="text/javascript" src="Student.js"></script>
<style>
.dropbtn {
  color: #151414;

font-size: 22px;
border: none;
}

.dropdown {
  position: relative;
  display: inline-block;
  
border: 2px solid black;
background-color: white;
border-radius: 20px;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {}

.dropdown:hover .dropdown-content {display: block;position:fixed;}

.dropdown:hover .dropbtn {}


</style>
</head>
<body>

<div class="top">
<ul>
 
  <li class="h"><a href="indexen.php"><img src="imgs/logo.png" height="120" width="230"></a></li><br><br>
 
  

  
  
    <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="loginadmin2.php">العربية</a></li>
  
   

</ul>
</div>

<br>
<center id="formLog">
<div class="containers" id="container" style="margin-top: 15px;">
	<div class="form-container sign-up-container">
		<form role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
			
				<h1>Create Account</h1>
			
			  
			<input type="text" placeholder="Full Name" name="fullname" required />
			<input type="text" placeholder="Email"  name="email" required />
			<input type="password" placeholder="Password" name="password" required />
			
	<div class="tryy">
	<label class="category">Category</label>
   <select style="height: 27px;color: #5f79ca;" name="category" class="options"  class="arrtol">
    <option value="admin">admin</option>
    <option value="health">health</option>
	
  </select>
	</div>
			
  
  
			<button type="submit" name="signup">Create</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
		
		
			
			
			<h1>Log In</h1>
			<?php
		 require_once 'DbConnect.php';
				

         
			
			
            
			
			if (isset($_POST['signup']) && !empty($_POST['email']) 
               && !empty($_POST['password'])) {
				  
				  
				   $password=$_POST['password']; 
				    $email=$_POST['email'];  
    $category=$_POST['category'];  
	 
	
	$fullname=$_POST['fullname'];

//checking if the user is already exist with this fullname or mobile
					//as the mobile and fullname should be unique for every user 
		//			$stmt = $conn->prepare("SELECT id FROM student WHERE email = ? OR mobile = ?");
			$stmt = $conn->prepare("SELECT id FROM admin WHERE email = ?");
					$stmt->bind_param("s", $email);
					$stmt->execute();
					$stmt->store_result();
					
					//if the user already exist in the database 
					if($stmt->num_rows > 0){
						//$response['error'] = true;
					//	$response['message'] = 'User already registered';
					 echo 'sorry, email is registered before, ';
						$stmt->close();
					}else{
						 
						//if user is new creating an insert query 
						$stmt = $conn->prepare("INSERT INTO admin (fullname, email,password, category) VALUES ( ?,?,?,?)");
						$stmt->bind_param("ssss", $fullname, $email, $password, $category);
						
						//if the user is successfully added to the database 
						if($stmt->execute()){
						$stmt->close();
							
							//adding the user data in response 
							//$response['error'] = false; 
						//	$response['message'] = 'User registered successfully'; 
							//$response['user'] = $user; 
							 echo 'Thank You.. You can Log in now ';
						}
  
   
				   
				   
				   
		
			   }}
			
         ?>
			
			
			 <?php
           
            
           
			
			if (isset($_POST['login']) && !empty($_POST['email1']) 
               && !empty($_POST['password1'])) {
				  
				  
				   $email1=$_POST['email1']; 
				    $password1=$_POST['password1'];  
    $category1=$_POST['category1'];

//checking if the user is already exist with this fullname or mobile
					//as the mobile and fullname should be unique for every user 
		//			$stmt = $conn->prepare("SELECT id FROM student WHERE email = ? OR mobile = ?");
			$stmt = $conn->prepare("SELECT id FROM admin WHERE email = ? AND password = ?" );
					$stmt->bind_param("ss", $email1, $password1);
					$stmt->execute();
					$stmt->store_result();
					$stmt->bind_result($fullNamee);
							$stmt->fetch();
					
					
				
					
					//if the user already exist in the database 
					if($stmt->num_rows > 0){
						
						$_SESSION['health'] =$fullNamee;
						if($category1=='health')
						{ echo '	Thank you ';
					  header('Refresh: 2; URL = healthadminen.php');}
					  
					  else{
						 echo '	Thank you ';
					  header('Refresh: 2; URL = adminen.php');}
						$stmt->close();
					}else{
						 
						 echo 'Sorry. email or password is incorrect ';
  
   
				   
			   }}
			
			
			
         ?>
			
			<input type="text" placeholder="Email" name="email1" required />
			<input type="password" placeholder="Password" name="password1" required />
			<div class="tryy">
	<label class="category1">Category</label>
   <select style="height: 27px;color: #5f79ca;" name="category1" class="options"  class="arrtol">
    <option value="admin">admin</option>
    <option value="health">health</option>
	
  </select>
	</div>
			
			<button type="submit" onclick="hh()" name="login">Log in</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay" id="ttt">
			<div class="overlay-panel overlay-left" style="background-image: url(log.png);
    background-repeat: no-repeat;
    background-size: cover;">
			
				<button class="ghost" id="signIn">Log in</button>
			</div>
			<div class="overlay-panel overlay-right" style="background-image: url(log.png);
    background-repeat: no-repeat;
    background-size: cover;">
			
				<button class="ghost" id="signUp">Create Account</button>
			</div>
		</div>
	</div>
</div>
</center>



<div class="footer">
</div>


</body>
</html>
