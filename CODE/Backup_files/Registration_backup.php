<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>ICCC 2015</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" type="text/css" rel="stylesheet" />
<script language="JavaScript" type="text/JavaScript">
<!--

function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}
//-->
</script>
<style type="text/css">
<!--
.style1 {color: #0E2345}
.style3 {font-weight: bold}
.style4 {color: #0000ff}
.style5 {
	color: #FF0000;
	font-weight: bold;
}
.style6 {color: #FF3300}
-->
</style>
</head>
<body>
<div id="page_wrapper">
  <div id="header_wrapper">
    <div id="header">
      <h1 align="center"><img src="img/Banner.jpg" width="948" height="135" /></h1>
    </div>
    <div id="navcontainer">
      <ul id="navlist">
        <li><a href="index.php">Home</a></li>
        <li><a href="Venue.php">Venue</a></li>
        <li><a href="Talks.php">Invited Talks</a></li>
        <li id="active"><a href="Registration.php" id="current">Registration</a></li>
		<li><a href="OrgCommitee.php">Committees</a></li>
        <li><a href="Tutorials.php">Tutorials</a></li>
		<!--<li><a href="Accom.htm">Travel & Accommodation</a></li>-->
        <li><a href="Paper_sub.php">Paper Submission</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
	  </ul>
    </div>
  </div>
  <div id="left_side">
    <h3 align="center">ICCC 2015 </h3>
    <!--<h4 align="center">&nbsp; </h4>-->
    <!--<h4 align="center">  <span class="style4"><a href="FinalPaper.htm">Final Paper Submission</a></span></h4>
    <h4 align="center"><a href="Tutorials.php" class="style4"><br />
    Pre-conference Tutorials</a>--></h4>
    <?php
    include('imp_dates.php')
	?>
<br />
 <img src="img/PinnedNote-.gif" width="50" height="34" 
    <h4 align="center"><span class="style3"><a href="Registration_form.pdf" target="_blank">Download <br />
    Registration form</a><br />
    </span><br />
    </h4>
</div>
<div id="right_side">
    <h3 align="center">Technical <br />
Co-sponsor</h3>
    <p align="center" class="featurebox_center"><img src="img/ieee_mb_blue.jpg" width="118" height="34" /><br />
        <br />
  IEEE Kerala Section</p>
    <h3 align="center">Sponsors</h3>
    <p align="center" class="featurebox_center"><img src="img/GOK.jpg" width="120" height="83" /><br />
  Directorate of Technical Education<br />
  Kerala</p>
    <p align="center" class="featurebox_center"><img src="img/KSCSTE.gif" width="100" height="111" /><br />
      Kerala State Council for Science, Technology and Environment </p>
   <p align="center" class="featurebox_center"><img src="img/iiitmk.png" width="100" height="111" />
      <br/>
       Indian Institute of Information Technology and Management</br>Kerala
      </br>
  </p>
    <h3 align="center" class="featurebox_center">Technical Collaborators</h3>
    <p align="center" class="featurebox_center"><img src="img/C-DAC.jpg" width="100" height="71" /><br />
  Centre for Development of Advanced Computing</p>
    <p align="center" class="featurebox_center"><img src="img/EMC.jpg" width="100" height="73" /><br />
  Energy Management Centre, Kerala </p>
    <p align="center">&nbsp;</p>
</div>


  <div id="content">
  <h1 class="featurebox_center"><marquee behavior="scroll" direction="left">
      <span class="style2">Atleast one author should register at <span class="style6">Professional Rates</span> listed below for each paper to be published in the conference proceedings and <em>ieeexplore</em></span>.
  </marquee>
  </h1>
  <br />

    <h3 align="center" class="style1">Registration</h3>
    <div class='featurebox_center'> 
      <?php
      include('Reg_content.php')
      ?>
    </div>
    <?php
    include('footer.php');
	?>
</div>
</body>
</html>
