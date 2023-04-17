<?php
   session_start();
?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>تقنيات ووسائل لدعم أصحاب الهمم العاليه</title>
 <link href="cs.css?=version=9" rel="stylesheet">

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
 
<<<<<<< HEAD
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
margin-left: 8px;" ><a href="aboutus.php">نبذة عنا</a></li>


=======
   
  <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="aboutus.php">من نحن</a></li>
  
   
>>>>>>> 3c4f6232f5cbe2c853705d3adffcfeac6cfdc5ee
   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="indexen.php">English</a></li>
  
   

</ul>
</div>

<br>
<div id="container">
  <div id="container2" style="width:50%;  height:409; 
  background-image: url('imgs/1.jpg');
  background-color: #cccccc;
  height: 610;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  position: relative;">




<div class="wrap1" style="float: left;
    margin-left: 0%;
    align-items: center;
    justify-content: center;
    ">
  <button class="button"onclick="window.location.href='login.php'" >المستخدمين</button>
</div>
<div class="wrap2">
  <button class="button"onclick="window.location.href='loginadmin2.php'" >الادارة</button>
</div>




</div>
</div>


<div class="footer">
&copy; INSISTENCE 2023
</div>

<script>
function bigImg(x) {
  x.style.height = "300px";
  x.style.width = "300px";
}

function normalImg(x) {
  x.style.height = "100px";
  x.style.width = "100px";
}
</script>
</body>
</html>
