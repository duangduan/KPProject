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
        <nav class="mobileUI-site-nav"> <a href="index.php" class="active">Homepage</a> <a href="vote.php">Vote Us</a> </nav>
      </div>
    </div>
  </header>
</div>
<div id="wrapper">
  <div class="5grid-layout">
    <div class="row">
      <div class="12u" id="banner">
        <section><a href="#"><img src="images/pics01.jpg" alt=""></a></section>
      </div>
    </div>
    <div id="feature-content">
      <section>
        <h2>รายชื่อผู้บรรยาย</h2>
      </section>
	  
	  
	 <?php
	 	$sqlSelectUser = "select * from dub";
		$querySelectUser = mysql_query($sqlSelectUser);
	
		while($rsSelectUser = mysql_fetch_array($querySelectUser)){
	
			$img_source_sr = $rsSelectUser[6];
			$full_name_sr	= $rsSelectUser[1];
			$status_sr = $rsSelectUser[2];
			$detail = $rsSelectUser[3];
		?>
		
	<div id="feature-content">
      <div class="row">
        <div class="12u">
       
          <div class="row">
            <div class="3u">
              <section>
                <div>
                  <div class="image-style1"><a href="#"><img src="<?php echo $img_source_sr; ?>" alt=""></a></div>
                  <div><a href="#"><img src="css/images/img02.png" width="262" height="30" alt=""></a></div>
                </div>
                <p><?php echo $full_name_sr; ?></p><?php echo $detail; ?>
                <p class="button"><a href="#">Read Full Details</a></p>
              </section>
            </div>
          </div>
          
		
        </div>
      </div>
    </div>
	
		<?php
        
            }
        ?>
  </div>
</div>
<div class="5grid-layout">
  <div id="copyright">
    <section>
      <p>&copy; Your Site Name | Images: <a target="_blank" href="http://fotogrph.com/">Fotogrph</a> | Design: <a target="_blank" href="http://html5templates.com/">HTML5Templates.com</a></p>
    </section>
  </div>
</div>
<div align="center">This template  downloaded form <a href="http://all-free-download.com/free-website-templates/">free website templates</a></div></body>
</html>