<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>A4</title>

  <!--  Normalize or reset CSS with your favorite library -->
  

  <!-- Load paper.css for happy printing -->
  <link rel="stylesheet" href="pagestyle.css">

  <!-- Set page size here: A5, A4 or A3 -->
  <!-- Set also "landscape" if you need -->
  <style>@page { size: A4 }</style>
</head>

<!-- Set "A5", "A4" or "A3" for class name -->
<!-- Set also "landscape" if you need -->
<body class="A4">

  <!-- Each sheet element should have the class "sheet" -->
  <!-- "padding-**mm" is optional: you can set 10, 15, 20 or 25 -->
  <?php
$i = 0;
  $cars = array("1", "2", "3","4","5","6","7","8","9","10","11","1", "2", "3","4","5","6","7","8","9","10","11");
  $count=[];
  foreach($cars as $cars1){
	  $i++;
	  if($i==11 or $i==21 or $i==31 or $i == 41 or $i == 51 or $i == 61 or $i == 71 or $i == 81 or $i == 91 or $i == 111 or $i == 121 or $i == 131 ){
		$count[] =$i;  
	  }
  }
 $f = null;
  foreach($count as $count1){
	//echo $count1;
	 
  
 
 
  ?> 
  
  <section class="sheet padding-10mm">

    <!-- Write HTML just like a web page -->
   
	<?php 
	
	foreach (array_slice($cars,$f) as $carsss){
		
	 
	
	?>
<?php
 echo $carsss.","; 

?>
	<?php } ?>
  </section>
  <div style="page-break-after: always;"></div>
  <?php $f = $f + 10; } ?>

</body>

</html>