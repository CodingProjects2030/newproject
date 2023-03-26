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
<style>

table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
  direction:rtl;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}

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

<br>
<center id="formLog">

<div class="containers" id="container" style="min-height: 715px;">
	
	
	
		
			
				<h1>الخدمات الصحية</h1>
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

<p> مؤشر كتلة الجسم   هو <br>
<?php $newh = $height / 100;
$newh = $newh * $newh;
$bmi = $weight / $newh;
   echo $bmi; ?>       </p>
   
   <br>
   
		<p> بناء على مؤشر كتلة الجسم لديك فان <br>
<?php if ($bmi <16) {echo 'تعاني من النحافة الشديدة يجب عليك زيادة وزن جسمك من خلال اتباع نظام صحي جيد';}
   ?>     
<?php if ($bmi >=16 && $bmi <17) {echo 'تعاني من النحافة المعتدلة يجب عليك زيادة وزن جسمك من خلال اتباع نظام صحي جيد';}
   ?>  
<?php if ($bmi >=17 && $bmi <18.5) {echo 'تعاني من النحافة الخفيفة يجب عليك زيادة وزن جسمك من خلال اتباع نظام صحي جيد';}
   ?> 

<?php if ($bmi <18.5 ) {echo 'تعاني من النحافة الخفيفة يجب عليك زيادة وزن جسمك من خلال اتباع نظام صحي جيد'; echo '<br>'; echo'
 النصائح التالية تساعدك على اكتساب الوزن بطريقة صحية عن طريق اكتساب العضلات والعظام بدون زيادة كتلة الدهون:';echo '<br>'; echo'

كن واقعياً بخصوص نوع جسمك اذا كنت ابن لأبويين نحيفين فالوراثة تلعب دور مهم في طبيعة جسمك، والرياضة والنظام الغذائي يلعبان دور بسيط في هذا الشأن والمهم هو أن تكون بصحة جيدة، عادة الأمر يكون أسهل للأشخاص الذين يرغبون بزيادة وزنهم بعد الجراحة أو المرض.';echo '<br>'; echo'

كن على وعي تام بخصوص الخداع التجاري لبعض المكملات الغذائية لا يوجد هناك شيء (معجزة) لزيادة الوزن، توفير غذاء صحي متكامل أوفر من شراء هذا النوع من المكملات.';echo '<br>'; echo'

ركز على الجودة أولاً ثم الكمية السر في زيادة الوزن هو ان تجعل جميع الأطعمة التي تتناولها عالية في القيمة الغذائية، فتناول الأطعمة الفقيرة في الفيمة الغذائية عالية السعرات مثل (الشيبس، المشروبات الغازية، الحلويات) لا تعتبر الطريقة الصحيحة لبناء العضلات وتقوية العظام والأنسجة';echo '<br>'; echo'

اذا كنت تعاني من ضعف الشهية عليك بتناول 5-6 وجبات في اليوم، وشرب السوائل قبل وبعد الطعام لكي لا تمتلىء المعدة بالسوائل ولترك مساحة أكبر للغذاء.';echo '<br>'; echo'

 قم بزيارة أخصائي التغذية لتخطيط النظام الغذائي الخاص بك ليساعدك على اكتساب الوزن بطريقة صحية مع الأطعمة التي تستمتع بها.';echo '<br>'; echo'

مزاولة الرياضة بصورة منتظمة حيث تقوي العضلات وتفتح الشهية وتقلل من تأثير الضغوط النفسية على الجسم.  ';

   }
   ?> 

  <?php if ($bmi >=18.5 && $bmi <25) {echo '
   
    وزنك طبيعي، تحتاج للمحافظة عليه في المعدل الطبيعي لاتباع النصائح التالية:';echo '<br>'; echo'

اذا كنت تريد المحافظة على وزنك فعليك أن تتبع نظام صحي طويل الأمد يمزج بين الاختيارات الذكية للطعام والتحرك أكثر.';echo '<br>'; echo'

عدم إلغاء أي وجبة من الوجبات الرئيسية وتناول الوجبات في مواعيد ثابتة ومنتظمة';echo '<br>'; echo'

تناول أغذية مختلفة ومتنوعة وبالكميات الصحيحة الموصى بها كما في الهرم الغذائي';echo '<br>'; echo'

التقليل من تناول الأطعمة السكرية والمقلية والمشروبات الغازية.';echo '<br>'; echo'

التقليل من إضافة الملح للطعام والأغذية المعلبة.';echo '<br>'; echo'

التقليل من تناول الوجبات المحضرة خارج المنزل.';echo '<br>'; echo'

يفضل شرب الحليب ومنتجاته قليلة الدسم.';echo '<br>'; echo'

يفضل الإكثار من تناول السمك والدجاج أما اللحوم الحمراء فيكون بشكل معتدل.';echo '<br>'; echo'

الإكثار من تناول الفواكه والخضراوات والبقوليات الغنية بالألياف.';echo '<br>'; echo'

مزاولة الرياضة بشكل منتظم. ';}
?> 

<?php if ($bmi >=25 && $bmi <30) {echo 'تعاني من زيادة الوزن قليلا يرجى اتباع نظام غذائي صحي وممارسة الرياضة قدر المستطاع';}
   ?> 
   <?php if ($bmi >=30 && $bmi <35) {echo 'تعاني من السمنة من الفئة الالولى يرجى اتباع نظام غذائي صحي وممارسة الرياضة قدر المستطاع';}
   ?> 
   <?php if ($bmi >=35 && $bmi <40) {echo 'تعاني من السمنة من الفئة الثانية يرجى اتباع نظام غذائي صحي وممارسة الرياضة قدر المستطاع
';}
   ?> 
    <?php if ($bmi >=40 ) {echo '
تعاني من السمنة من الفئة الثالثة يرجى اتباع نظام غذائي صحي وممارسة الرياضة قدر المستطاع';}
   ?> 
   </p>	
			
		
			
  
  
	
	
</div>


<div class="containers" id="container" style="min-height: 453px;margin-top: 18px;">
	
	
	
		<form style= "height:auto;" role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
			
				<h1>اسال الممرضة الصحية</h1>
	
			<textarea name="w3review" rows="10" cols="90"> </textarea>
			
			<br>
			
		
			
  
  
			<button type="submit" name="signup">ارسل</button>
		</form>
	
	
	
</div>

<div class="containers" id="container" style="min-height: 453px;margin-top: 18px;">
	
	
	
		<form style= "height:auto;" role = "form"  id="arra" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); 
            ?>" method = "post">
			
				<h1>اسئلتك السابقة</h1>
	
			<table>
  <tr>
    <th>السؤال</th>
    <th>الجواب</th>
   
  </tr>
  <tr>
    <td>سؤال1</td>
    <td>جواب1</td>
    
  </tr>
  <tr>
    <td>سءال2</td>
    <td>جواب2</td>
   
  </tr>
  
</table>
		</form>
	
	
	
</div>
</center>



<div class="footer">
</div>


</body>
</html>
