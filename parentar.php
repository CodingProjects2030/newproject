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
 <title>تقنيات ووسائل لدعم أصحاب الهمم العاليه</title>
 <link href="cs.css?=version=3" rel="stylesheet">
<style>
p {color:red;}
</style>

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

<div id="container" style="margin-top:100px;height:auto;">
  
  <div id="container2" style="height:auto;text-align:right;    background-color: #d4e8d5;">
  <form action="/action_page.php">
 <p>رايك بالموقع بشكل عام:</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br>  
<p>رايك بالموقع بشكل عام:</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br>  
<p>رايك بالموقع بشكل عام:</p>
 <label for="html">ممتاز</label>
  <input style="float:rihgt;" type="radio" id="html" name="fav_language" value="HTML">
  <br>
  <label for="css">جيد</label>
  <input type="radio" id="css" name="fav_language" value="CSS">
  <br>
  <label for="javascript">سيء</label>
  <input type="radio" id="javascript" name="fav_language" value="JavaScript">
  
<br> 
<p>اذا كان لديك تعليق يرجى ذكره</p>
 <textarea  name="w3review" rows="4" cols="80"></textarea>
 <br> 
<br>  
<button style="    margin-right: 46%;
    background-color: #93ce95;
    color: white;
    font-size: 22px;
    padding: 8px;" type="submit" onclick="hh()" name="login">ارسال</button>
</form>
</div>
</div>
<br>


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
