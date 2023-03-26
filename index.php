<?php
   session_start();
?>
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>تقنيات ووسائل لدعم أصحاب الهمم العاليه</title>
 <link href="cs.css?=version=3" rel="stylesheet">


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
<img class="centerMain" src="pic1.png" alt="" width="500px">

<br>
<div id="container">
  <img id="kk1"  src="imgs/index/1.png" alt="" width="250px">
  <div id="container2">
<p>  تقنيات ووسائل لدعم أصحاب الهمم العاليه </p>
</div>
<img id="kk"  src="pic1.png" alt="" width="250px">
</div>
<br>

<div class="wrap1">
  <button class="button"onclick="window.location.href='login.php'" >المستخدمين</button>
</div>
<div class="wrap2">
  <button class="button"onclick="window.location.href='loginadmin.php'" >الادارة</button>
</div>

<div class="footer">
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
