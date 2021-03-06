<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<style type="text/css">

.flashclass{ /*sample CSS class added to image slideshow container*/
width: 200px; /*a width should be defined for transition to work*/
border: 5px solid orange;
padding: 5px;
}

.flashclass img{
border-width: 0;
}

</style>

<script type="text/javascript" src="transitionshow.js">

/***********************************************
* Random Transitions Slideshow- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code
***********************************************/

</script>

<style type="text/css">

.flashclass{ /*sample CSS class added to image slideshow container*/
width: 485px; /*a width should be defined for transition to work*/
border: 5px solid blue;
padding: 5px;
margin-left: 5px;
}

.flashclass img{
border-width: 0;
}

</style>

<script type="text/javascript" src="transitionshow.js">

/***********************************************
* Random Transitions Slideshow- by JavaScript Kit (www.javascriptkit.com)
* This notice must stay intact for usage
* Visit JavaScript Kit at http://www.javascriptkit.com/ for full source code
***********************************************/

</script>

<title>ICCC 2015</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<link href="css/style.css" type="text/css" rel="stylesheet" />

<style type="text/css">
<!--
.style1 {color: #0E2345}
.style4 {color: #0000ff}
.style5 {
	color: #FF0000;
	font-weight: bold;
}
.style2 {font-weight: bold}
.style7 {color: #990000; font-weight: bold; }
.style8 {
	color: #000000;
	font-weight: bold;
}
.style9 {
	color: #000099;
	font-weight: bold;
}
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
        <li id="active"><a href="index.php" id="current">Home</a></li>
        <li><a href="Venue.php">Venue</a></li>
        <li><a href="Talks.php">Invited Talks</a></li>
        <li><a href="Registration.php">Registration</a></li>
		<li><a href="OrgCommitee.php">Committees</a></li>
		<li><a href="Tutorials.php">Tutorials</a></li>
        <li><a href="accom.php">Accomodation</a></li>
        <li><a href="Contact.php">Contact Us</a></li>
	  </ul>
    </div>
  </div>
<div id="left_side">
    <h3 align="center">ICCC 2015 </h3>
	 <!--<h4 align="center"><span class="style4"><a href="FinalPaper.htm">Final Paper Submission</a></span></h4>
     <h4 align="center"><a href="Tutorials.php" class="style4"><br />
  Pre-conference Tutorials</a></h4>-->
  
  <p align="center" class="featurebox_center"><span class="style7">Keynote Speaker<br />
 <img src="img/sub_pic.png" width="135" height="135" /> <br />
<p> <h4 class="style1" align="center">Subhasis Chaudhuri </h4></p>
<span class="style1"align="center ">Deputy Director (AIA) & <br/>K.N. Bajaj Chair Professor <br/>in Electrical Engineering<br />
Indian Institute of Technology<br/> Powai, Bombay 400 076 <br/>
</span></span></p>
  
  <p align="center" class="featurebox_center"><span class="style7">Plenary Speaker<br />
  <img src="img/t_b_a.jpg" width="135" height="135" /> <br />
  <span class="style9"></span> </span></p>
  
  
<?php
include('imp_dates.php')
?>
  
	 <!--<h4 align="center">&nbsp;</h4>-->
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
  Energy Management Centre, Kerala</p>
    
    <br />
</div>
  <div id="content">
    <!--<h1 class="featurebox_center"><marquee behavior="scroll" direction="left">
      <span class="style2">Decision on all papers have been notified. Final paper upload and registration is open</span>
    </marquee>
      <marquee behavior="scroll" direction="left">
	  </marquee>
    </h1>-->

    <h1 class="featurebox_center"><marquee behavior="scroll" direction="left">
      <a class="style2" href="iccc2015-call-for.pdf">Click here to Download Brochure</a>
    </marquee>
      
    </h1>
<br/>
<!--br/-->
	
	 <div align="center", class='featurebox_center'> 
	
	 <!--<script type="text/javascript">

var flashyshow=new flashyslideshow({ //create instance of slideshow
	wrapperid: "myslideshow", //unique ID for this slideshow
	wrapperclass: "flashclass", //desired CSS class for this slideshow
	
	imagearray: [ 
		["img/CET2.jpg", "Organiser.htm", "", ""],
		["img/RT3.jpg", "Venue.htm", "", ""]
	],
	pause: 2000, //pause between content change (millisec)
	transduration: 1000 //duration of transition (affects only IE users)
})

     </script>-->
	   <img name="index_banner" src="img/CET2.jpg" width="485" height="228" alt="" />	 </div>
    <h3 align="center" class="style1">About the Conference</h3>
    <div class='featurebox_center'> 
	
		
      <div align="left">
		<p align="justify">The 2015 International Conference on Control, Communication and Computing (ICCC 2015) is to bring researchers, practicing engineers, faculty and students on to a common platform to share their research work, solution to various research problems and technical knowledge to enhance the opportunities in the areas of focus. There has been rapid development in technology related to these areas during the past few years and has resulted in change in techniques adopted in various applications. The scope for further development always exist and the conference would provide the opportunity to discuss the state of the art and to explore the avenues for future work. </p>
        <p align="justify">The conference will be held at  Trivandrum in parallel sessions. A technical exhibition and tutorial sessions are also envisaged along with the conference. </p>
        <p align="justify">IEEE Kerala Section is the technical co-sponsor for this conference and all the papers presented at the conference will be published through IEEE Xplore Digital Library. </p>
      </div>
    </div>
    <p>&nbsp;  </p>
    <?php
    include('footer.php');
	?>
</div>
</body>
</html>
