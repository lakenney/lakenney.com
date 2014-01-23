<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Contact Page for Lucille Kenney, Web Developer and Print Designer</title>
    <meta http-equiv="content-type" content="text/html;charset=utf-8" />
    <meta name="Author" content="Lucille Kenney" />
    <meta name="DESCRIPTION" content="Contact page mailto form for Lucille Kenney Hybrid Web Designer Developer" />

<!--    <link rel="shortcut icon" href="http://morpheus.dce.harvard.edu/~lkenney/GrAd_14/final/favicon.ico" />
-->    <link href="favicon.ico" rel="icon" type="image/x-icon" />
    <!--<link rel="icon" type="image/png" href="../favicon.ico" />
    --><link rel="stylesheet" type="text/css" href="css/reset.css" /> 
    <link rel="stylesheet" type="text/css" href="css/default.css" />
    <link rel="stylesheet" type="text/css" href="css/style.css" /> 
            
    <link rel="stylesheet" type="text/css" href="css/component.css" />
    
    <link rel="stylesheet" href="css/blueprint/print.css" type="text/css" media="print" />
    <!--<link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen" />
    -->
    <!--[if lt IE 8]><link rel="stylesheet" href="css/blueprint/ie.css" type="text/css" media="screen, projection" /><![endif]-->
    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" type="text/javascript"> </script>
    <script type="text/javascript" src="js/highlightnavigation.js"> </script>


</head>
<body id="part5">
  <div class="container">

<!-- masthead -->
  <h1 id="header">Lucille Kenney</h1> <br />
  <h2>Portfolio</h2>
  
<!-- end masthead -->

      <h2>Contact Me</h2>
      <p>If you are writing because you think I would be a good fit for your project, please include as much relevant detail as possible, such as scope, timeline, budget and how you think I may best be of help.</p>
      <p>I am currently available for work and will respond to your email in a timely manner. </p>
      
     <p>Cheers,</p>
     
    <div class="content">
<div id="nav" class="nav">
<ul>
<li id="navpart1"><a href="index.php" title="Lucille Kenney's Design Portfolio home page">Home</a></li>
<li id="navpart2"><a href="web.php" title="Lucille Kenney's Design Portfolio website page">Web</a></li>
<li id="navpart3"><a href="print.php" title="Lucille Kenney's Design Portfolio print page">Print</a></li>
<li id="navpart4"><a href="resume.php" title="Lucille Kenney's Design Portfolio resume">Resume</a></li>
<li id="navpart5"><a href="contact.php"title="Lucille Kenney's Design Portfolio contact page">Contact</a></li>
</ul>
</div>    
    <form id="my-form" class="ideal-form clearfix" action="http://www.bluehost.com/bluemail" enctype="multipart/form-data" method="post">
        <div class="ideal-field">
            <p> <label>Name:</label><br /> <input type="text" name="Name" /></p>
            <p><label>Email:</label><br /> <input type="email" name="mailfrom" /></p>
        </div>
        
        <div>
        	<label for="phone_number"><strong>Phone&#58;</strong></label> 
            <input type="tel" name="phone_number" id="phone_number" value="" maxlength="10" title="Phone Number is required" /> <br />

        </div>
        
        <div class="comments clearfix">
            <p><label>Comments: </label><br /><textarea cols="30" rows="20" name="comments" ></textarea></p>
        </div>
            <p><input type="hidden" name="sendtoemail" value="webmaster@lucillekenney.com" /></p>
            <p><input type="submit" value="Send Email" /></p>
    </form>
    
    </div>
  <div id="footer">
    <p>&copy; Lucille Kenney 2013,   <?php
// outputs e.g. 'Last modified: March 04 1998 20:43:59.'
echo "Last modified: " . date ("F d Y H:i:s.", getlastmod());
?>
</p><br />
<a href="http://validator.w3.org/check/referer"><img style="border:0;width:88px;height:31px" src="http://www.w3.org/Icons/valid-xhtml10" alt="Valid XHTML 1.0!" /></a>
<a href="http://jigsaw.w3.org/css-validator/check/referer"><img style="border:0;width:88px;height:31px" src="http://jigsaw.w3.org/css-validator/images/vcss" alt="Valid CSS!" /></a>
  </div>    </div><!--close container-->
</body>
</html>
