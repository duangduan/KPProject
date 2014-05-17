<?php
include("connectDB/connect.php");

?>

<!DOCTYPE HTML>
<html>
<head>
<title>Football Commentator</title>
<meta charset="utf-8">
<noscript>
<link rel="stylesheet" href="css/5grid/core.css">
<link rel="stylesheet" href="css/5grid/core-desktop.css">
<link rel="stylesheet" href="css/5grid/core-1200px.css">
<link rel="stylesheet" href="css/5grid/core-noscript.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/style-desktop.css">
</noscript>
<script src="css/5grid/jquery.js"></script>
<script src="css/5grid/init.js?use=mobile,desktop,1000px&amp;mobileUI=1&amp;mobileUI.theme=none"></script>
<!--[if IE 9]><link rel="stylesheet" href="css/style-ie9.css"><![endif]-->
</head>
<body>
<div id="header-wrapper">
  <header id="header" class="5grid-layout">
    <div class="row">
      <div class="12u">
        <!-- Logo -->
        <h1><a href="#" class="mobileUI-site-name"></a></h1>
        <p>นักพากย์บอลคนไหนที่คุณชื่นชอบ ?</p>
        <!-- Nav -->
        <nav class="mobileUI-site-nav"> <a href="index.html" class="active">Homepage</a> <a href="threecolumn.html">Three Column</a> <a href="twocolumn1.html">Two Column #1</a> <a href="twocolumn2.html">Two Column #2</a> <a href="onecolumn.html">One Column</a> </nav>
      </div>
    </div>
  </header>
</div>
<div id="wrapper">
  <div class="5grid-layout">
    <div class="row">
      <div class="12u" id="banner">
        <section><a href="#"><img src="images/pics01.gif" alt=""></a></section>
      </div>
    </div>
	
		  
	  <?php
	
	 	$tMatch = "select * from footballmatch where match_id";
		$ctMatch = mysql_query($tMatch);
	
		while($rsMatch = mysql_fetch_array($ctMatch)){
			$fullMatch = $rsMatch[1]." / ".$rsMatch[2]." / ".$rsMatch[3];
		}
		?>
		
		
    <div id="feature-content">
      <section>
	 	<center><h2><? echo "** ร่วมโหวตนักพากย์ที่คุณอยากให้พากย์คู่นี้มากที่สุด !**"; ?></h2></center>
        <center><h2><? echo $fullMatch; ?></h2></center>
		<center>
		<select onchange="if(this.value == '') this.selectedIndex = 1; ">
  			<option value="">เลือกนักพากย์คนที่ 1</option>
  			<option value="1one">เอกราช เก่งทุกทาง</option>
  			<option value="1two">วีรศักดิ์ นิลกลัด</option>
			<option value="1three">อดิสรณ์ พึ่งยา</option>
  			<option value="1four">สาธิต กรีกุล</option>
			<option value="1five">อิสรพงษ์ ผลมั่ง</option>
  			<option value="1six">อัฐชพงษ์ สีมา</option>
			<option value="1seven">สมศักดิ์ สงวนทรัพย์</option>
  			<option value="1eight">บูรณิจฉ์ รัตนวิเชียร</option>
		</select>
		
		<select onchange="if(this.value == '') this.selectedIndex = 1; ">
  			<option value="">เลือกนักพากย์คนที่ 2</option>
  			<option value="2one">เอกราช เก่งทุกทาง</option>
  			<option value="2two">วีรศักดิ์ นิลกลัด</option>
			<option value="2three">อดิสรณ์ พึ่งยา</option>
  			<option value="2four">สาธิต กรีกุล</option>
			<option value="2five">อิสรพงษ์ ผลมั่ง</option>
  			<option value="2six">อัฐชพงษ์ สีมา</option>
			<option value="2seven">สมศักดิ์ สงวนทรัพย์</option>
  			<option value="2eight">บูรณิจฉ์ รัตนวิเชียร</option>
		</select>
		<br><br>
		<p class="button"><a href="#">ร่วมโหวต !</a></p>
		</center>
		
      </section>
	  
	  
	  <div id="feature-content">
	  </div>
	  
	  <?php
	 	$sqlSelectUser = "select * from dub where sp_id";
		$querySelectUser = mysql_query($sqlSelectUser);
	
	while($rsSelectUser = mysql_fetch_array($querySelectUser)){
	
		$img_source_sr = $rsSelectUser[6];
		$full_name_sr	= $rsSelectUser[1];
		$status_sr = $rsSelectUser[2];
		$detail = $rsSelectUser[3];
		?>
	
		
	
      <div class="row">
        <div class="12u">
          <div class="row">
            <div class="3u">
              <section>
                <div>
                  <div class="image-style1"><a href="#"><img src="<? echo $img_source_sr; ?>" alt=""></a></div>
                  <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                </div>
                <p><? echo $full_name_sr; ?></p><? echo $detail; ?>
                <p class="button"><a href="#">Rate now!</a></p>
              </section>
            </div>
          </div>
        </div>
      </div>
    
		<?
	}
?>
</div>
  </div>
</div>
<div class="5grid-layout">
  <div id="copyright">
    <section>
      <p>&copy; Your Site Name | Images: <a target="_blank" href="http://fotogrph.com/">Fotogrph</a> | Design: <a target="_blank" href="http://html5templates.com/">HTML5Templates.com</a></p>
    </section>
  </div>
</div>
<div align=center>This template  downloaded form <a href='http://all-free-download.com/free-website-templates/'>free website templates</a></div></body>
</html>
