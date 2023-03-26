<?php
   session_start();
   
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {

}
else
{  	 header('Refresh: 0; URL = login.php');
}

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
   
    <li class="h"><a href="#about"><img src="imgs/br.png" height="70" width="450"></a></li>
  <li class="hh"><a href="indexen.html">English</a></li>
  <li class="hh"><a href="contactar.html">ولي الامر</a></li>
  
    <li class="hh"><a href="contactar.php">الخدمات الصحية</a></li>
 <li class="hh"><a href="login.html">الخدمات التعليمية</a></li>
<li class="hh"><a href="TeacherAr.html">الخدمات الترفيهية</a></li>

  
	
  
</ul>
</div>

<br>
<center id="formLog">
<div class="containers" id="container" style="min-height: 715px;">
	
	
	
		<form role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
			
				<h1>تحديث البيانات</h1>
			<?php
 require_once 'DbConnect.php';
$id=$_SESSION['userid'];
$sel_query="Select * from users  where id ='".$id."'"; 
$result = mysqli_query($conn,$sel_query);
while($row = mysqli_fetch_assoc($result)) { ?>
<?php  $fullname = $row["fullname"]; 
 $email = $row["email"]; 
  $password = $row["password"]; 
   $sex = $row["sex"]; 
    $height = $row["height"]; 
	 $age = $row["age"]; 
	 $weight = $row["weight"]; 
$disability = $row["disability"]; }


?>
			<input type="text" placeholder="<?php echo $fullname; ?>" name="fullname2" required />
			<input type="text" placeholder="<?php echo $email; ?>"  name="email2" required />
			<input type="password" placeholder="<?php echo $password; ?>" name="password2" required />
			<input type="password" placeholder="اعادة كلمة المرور" name="password22" required />
			<input type="text" placeholder="<?php echo $age; ?>" name="age2" required />
			<input type="text" placeholder="<?php echo $weight; ?>" name="weight2" required />
			<input type="text" placeholder="<?php echo $height; ?>" name="height2" required />
			
			
			
			<div class="tryy">
			<label class="labeloption">الجنس</label>
			<select style="height: 27px;" name="genderOption" class="options" class="arrtol">
    <option  value="Female">انثى</option>
    <option value="Male">ذكر</option>
	
  </select>
  	</div>
	<div class="tryy">
	<label class="labeloption">الاعاقة</label>
   <select style="height: 27px;" name="categoryOption" class="options"  class="arrtol">
    <option value="downSyndrome">سمعية</option>
    <option value="deaf">بصرية</option>
	  <option value="deaf">حركية</option>
  </select>
	</div>
			
  
  
			<button type="submit" name="signup">تحديث</button>
		</form>
	
	
	
</div>
</center>



<div class="footer">
</div>


</body>
</html>
