<?php
   session_start();
?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>إعاقتي بداية نجاحي</title>
  <link href="csStu.css" rel="stylesheet">
  <link href="Student.css?session=6" rel="stylesheet">
   <link href="cs.css?=version=5" rel="stylesheet">
  <script type="text/javascript" src="Student.js"></script>

</head>
<body>

<div class="top">
<ul>
   
     <li class="h"><a href="#about"><img src="imgs/logo.png" height="120" width="230"></a></li><br><br>
  <li class="hh"><a href="indexen.html">English</a></li>
  <li class="hh"><a href="contactar.html">ولي الامر</a></li>
  
    <li class="hh"><a href="contactar.php">الخدمات الصحية</a></li>
 <li class="hh"><a href="login.html">الخدمات التعليمية</a></li>
<li class="hh"><a href="TeacherAr.html">الخدمات الترفيهية</a></li>

  
	
  
</ul>
</div>

<br>
<center id="formLog">
<div class="containers" id="container" style="margin-top: 15px;">
	<div class="form-container sign-up-container">
		<form role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
			
				<h1>انشاء حساب</h1>
			
			  
			<input type="text" placeholder="الاسم الكامل" name="fullname" required />
			<input type="text" placeholder="البريد الالكتروني"  name="email" required />
			<input type="password" placeholder="كلمة السر" name="password" required />
			<input type="text" placeholder="العمر" name="age" required />
			<input type="text" placeholder="الوزن" name="weight" required />
			<input type="text" placeholder="الطول" name="height" required />
			
			
			
			<div class="tryy">
			<label class="labeloption">الجنس</label>
			<select style="height: 27px;" name="sex" class="options" class="arrtol">
    <option  value="Female">انثى</option>
    <option value="Male">ذكر</option>
	
  </select>
  	</div>
	<div class="tryy">
	<label class="labeloption">الاعاقة</label>
   <select style="height: 27px;" name="disability" class="options"  class="arrtol">
    <option value="downSyndrome">سمعية</option>
    <option value="deaf">بصرية</option>
	  <option value="deaf">حركية</option>
  </select>
	</div>
			
  
  
			<button type="submit" name="signup">تسجيل</button>
		</form>
	</div>
	<div class="form-container sign-in-container">
		<form role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
		
		
			
			
			<h1>تسجيل الدخول</h1>
			<?php
		 require_once 'DbConnect.php';
				

         
			
			
            
			
			if (isset($_POST['signup']) && !empty($_POST['email']) 
               && !empty($_POST['password'])) {
				  
				  
				   $password=$_POST['password']; 
				    $email=$_POST['email'];  
    $age=$_POST['age'];  
	$disability=$_POST['disability'];
	$sex=$_POST['sex'];
	$height=$_POST['height'];
	$weight=$_POST['weight'];  
	
	$fullname=$_POST['fullname'];

//checking if the user is already exist with this fullname or mobile
					//as the mobile and fullname should be unique for every user 
		//			$stmt = $conn->prepare("SELECT id FROM student WHERE email = ? OR mobile = ?");
			$stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
					$stmt->bind_param("s", $email);
					$stmt->execute();
					$stmt->store_result();
					
					//if the user already exist in the database 
					if($stmt->num_rows > 0){
						//$response['error'] = true;
					//	$response['message'] = 'User already registered';
					 echo 'عفوا , البريد الالكتروني مسجل مسبقا ';
						$stmt->close();
					}else{
						 
						//if user is new creating an insert query 
						$stmt = $conn->prepare("INSERT INTO users (fullname, email,password, disability,age,sex,height,weight) VALUES ( ?, ?, ? ,?,?,?,?,?)");
						$stmt->bind_param("ssssssss", $fullname, $email, $password, $disability, $age, $sex, $height, $weight);
						
						//if the user is successfully added to the database 
						if($stmt->execute()){
						$stmt->close();
							
							//adding the user data in response 
							//$response['error'] = false; 
						//	$response['message'] = 'User registered successfully'; 
							//$response['user'] = $user; 
							 echo 'شكرا لك, ييمكنك تسجيل الدخول الان ';
						}
  
   
				   
				   
				   
		
			   }}
			
         ?>
			
			
			 <?php
           
            
           
			
			if (isset($_POST['login']) && !empty($_POST['email1']) 
               && !empty($_POST['password1'])) {
				  
				  
				   $email1=$_POST['email1']; 
				    $password1=$_POST['password1'];  
   

//checking if the user is already exist with this fullname or mobile
					//as the mobile and fullname should be unique for every user 
		//			$stmt = $conn->prepare("SELECT id FROM student WHERE email = ? OR mobile = ?");
			$stmt = $conn->prepare("SELECT id FROM users WHERE email = ? AND password = ?" );
					$stmt->bind_param("ss", $email1, $password1);
					$stmt->execute();
					$stmt->store_result();
					$stmt->bind_result($fullNamee);
							$stmt->fetch();
					
					
				
					
					//if the user already exist in the database 
					if($stmt->num_rows > 0){
						
						$_SESSION['userid'] =$fullNamee;
						 echo 'أهلا بعودتك  سيتم الانتقال للصفحة الرئيسية ';
					  header('Refresh: 2; URL = index.php');
						$stmt->close();
					}else{
						 
						 echo 'عفوا , البريد الالكتروني أو كلمة السر غير صحيحة  ';
  
   
				   
				   
				   
				   
				
              // if ($_POST['email2'] == 'student' && 
             //     $_POST['password2'] == '1234') {
             //     $_SESSION['valid'] = true;
             //     $_SESSION['timeout'] = time();
             //     $_SESSION['email2'] = 'student';
                  
            //      echo 'nice';
           //    }else {
			//	    echo 'Wrong ';
                 
           //    }
			   }}
			
			
			
         ?>
			
			<input type="text" placeholder="البريد الالكتروني" name="email1" required />
			<input type="password" placeholder="كلمة السر" name="password1" required />
			
			<button type="submit" onclick="hh()" name="login">دخول</button>
		</form>
	</div>
	<div class="overlay-container">
		<div class="overlay" id="ttt">
			<div class="overlay-panel overlay-left" style="background-image: url(pic1.png);
    background-repeat: no-repeat;
    background-size: cover;">
			
				<button class="ghost" id="signIn">تسجيل الدخول</button>
			</div>
			<div class="overlay-panel overlay-right" style="background-image: url(pic1.png);
    background-repeat: no-repeat;
    background-size: cover;">
			
				<button class="ghost" id="signUp">انشاء حساب</button>
			</div>
		</div>
	</div>
</div>
</center>



<div class="footer">
</div>


</body>
</html>
