<?php
ob_start();
   session_start();
   


?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title></title>
  <link href="csStu.css" rel="stylesheet">
  <link href="Student.css?session=6" rel="stylesheet">
   <link href="cs.css?=version=5" rel="stylesheet">
  <script type="text/javascript" src="Student.js"></script>

</head>
<body>

<div class="top">
<ul>
   
  <li class="h"><a href="#about"><img src="imgs/br.png" height="70" width="450"></a></li>
  <li class="hh"><a href="indexen.html">English</a></li>
    <?php
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
echo '<li class="hh"><a href="signout.php">تسجيل الخروج</a></li>';
echo '<li class="hh"><a href="update.php">تحديث البيانات</a></li>';
}
else
{   ?>
	
	<?php
	
}
?>
  <li class="hh"><a href="parentar.php">ولي الامر</a></li>
  
    <li class="hh"><a href="healthar.php">الخدمات الصحية</a></li>
 <li class="hh"><a href="services.html">الخدمات التعليمية</a></li>
<li class="hh"><a href="services.html">الخدمات الترفيهية</a></li>

  
  
   
  
</ul>
</div>

<br>
<center id="formLog">

<?php
		 require_once 'DbConnect.php';
				

         
			
			
            
			
			if (isset($_POST['signup']) && !empty($_POST['weight']) 
               && !empty($_POST['weight'])) {
				  
				  
				  
    $age=$_POST['age'];  

	$height=$_POST['height'];
	$weight=$_POST['weight'];  
	
	
						 
						//if user is new creating an insert query 
						$stmt = $conn->prepare("INSERT INTO ss (age,height,weight) VALUES ( ?,?,?)");
						$stmt->bind_param("sss",$age, $height, $weight);
						
						//if the user is successfully added to the database 
						if($stmt->execute()){
						$stmt->close();
							
							//adding the user data in response 
							//$response['error'] = false; 
						//	$response['message'] = 'User registered successfully'; 
							//$response['user'] = $user; 
								$_SESSION['height'] =$height;
								$_SESSION['weight'] =$weight;
						 
					  header('Refresh: 0; URL = 33.php');
						}
  
   
				   
			   }
				   
		
			   
			
         ?>


<div class="containers" id="container" style="min-height: 715px;margin-top: 18px;">
	
	
	
		<form role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
			
				<h1></h1>
			
			  
			
			<input type="text" placeholder="العمر" name="age" required />
			<input type="text" placeholder="الوزن" name="weight" required />
			<input type="text" placeholder="الطول" name="height" required />
			
			
			
			
			
  
  
			<button type="submit" name="signup">احسب</button>
		</form>
	
	
	
</div>
</center>



<div class="footer">
</div>


</body>
</html>
