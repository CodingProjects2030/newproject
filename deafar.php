
<!DOCTYPE>
<html lang="en-US">
  <meta charset="UTF-8">
<head>
 <title>تقنيات ووسائل لدعم أصحاب الهمم العاليه</title>
 <link href="cs.css?=version=7" rel="stylesheet">

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
margin-left: 8px;" ><div class="dropdown"> <a class="dropbtn" href="">الخدمات التعليمية <div class="dropdown-content">
    <a href="educationalservices.php?id=1">اللغة الانجليزية</a>
    <a href="educationalservices.php?id=2">تقنية معلومات</a>
   
  </div></a></div></li>
<li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="entertainmentservices.php">الخدمات الترفيهية</a></li>

   <li class="hh" style="border: 2px solid black;
background-color: white;
border-radius: 20px;
margin-left: 8px;" ><a href="education1en.php">English</a></li>
  
   

</ul>
</div>


 <div class="maincontent" style="direction:rtl; margin-top: 220px;">
            <div class="maincontentWrapper" id="d2">
                <div class="topWrapper">
                    <div class="left" >
					<video    width="100%" height="100%"  poster="imgs\letters\a.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center" >
					<video   width="100%" height="100%"  poster="imgs\letters\2.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video width="100%" height="100%"  poster="imgs\letters\3.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%"  poster="imgs\letters\4.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%"  poster="imgs\letters\5.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video width="100%" height="100%"  poster="imgs\letters\6.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\7.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\8.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video  width="100%" height="100%"  poster="imgs\letters\9.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\10.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\11.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video width="100%" height="100%"  poster="imgs\letters\12.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\13.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\14.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video  width="100%" height="100%"  poster="imgs\letters\15.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\16.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\17.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video  width="100%" height="100%"  poster="imgs\letters\18.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\19.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\20.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video  width="100%" height="100%"  poster="imgs\letters\21.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\22.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video width="100%" height="100%" poster="imgs\letters\23.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video  width="100%" height="100%"  poster="imgs\letters\24.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\25.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\26.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video  width="100%" height="100%"  poster="imgs\letters\27.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\28.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\29.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%"  poster="imgs\letters\30.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\31.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\32.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video  width="100%" height="100%"  poster="imgs\letters\33.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video  width="100%" height="100%" poster="imgs\letters\34.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="center">
					<video  width="100%" height="100%" poster="imgs\letters\35.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    <div class="right">
					<video  width="100%" height="100%"  poster="imgs\letters\36.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                </div>
				
				
				<div class="topWrapper">
                    <div class="left">
					<video width="100%" height="100%" poster="imgs\letters\37.jpg">
                    <source src="videos/down-3-5-colors.mp4" type="video/mp4">
					</div>
					
                    
					
                </div>
				
			
				
			
               
                <!--End bottomWrapper-->
            </div>
            <!-- End maincontentWrapper-->
        </div>






</body>
</html>
