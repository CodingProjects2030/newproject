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
  <link href="Student.css?session=7" rel="stylesheet">
   <link href="cs.css?=version=7" rel="stylesheet">
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
 
  <li class="h"><a href="#about"><img src="imgs/logo.png" height="120" width="230"></a></li><br><br>
 
    <?php
if(isset($_SESSION['userid']) && !empty($_SESSION['userid'])) {
echo '<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="signout.php">تسجيل الخروج</a></li>';
echo '<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;"><a href="update.php">تحديث البيانات</a></li>';
}
else
{   ?>
	
	<?php
	
}
?>
  <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="parentar.php">ولي الامر</a></li>
  
    <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="healthservices.php">الخدمات الصحية</a></li>
	

 <li class="hh" style="
margin-left: 8px;" ><div class="dropdown"> <a class="dropbtn" href="educationalservices.php">الخدمات التعليمية <div class="dropdown-content">
    <a href="#">اللغة الانجليزية</a>
    <a href="#">تقنية معلومات</a>
    <a href="#">اي شي </a>
  </div></a></div></li>
<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="entertainmentservices.php">الخدمات الترفيهية</a></li>

   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="indexen.html">English</a></li>
  
   

</ul>
</div>

<br>
<!--<center id="formLog">-->
<div class="containers" id="container" style="min-height: 715px;margin-top: 143px;margin-left: 25%;width:50%">
	
	
	
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
<!--</center>-->



<div class="footer">
</div>


</body>
</html>
