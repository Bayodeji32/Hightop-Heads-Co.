<?php

include 'db_connection.php';

session_start();


$query = "SELECT * from checkout";

$result = mysqli_query($conn,$query);

if (isset($_POST['update'])){
   $new=$_POST['new'];
    $update = "UPDATE checkout SET fullname='$new' ";
    $update1=  mysqli_query($conn,$update);

    if ($update1) {
     echo "<script>alert('updated Sucessfully.')</script>";
          } else {
      echo 'error';
          
 }
 }
 
  
?> 
 
<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="987-654-321&nbsp;or
456-789-321, Taxi transfers from and to&nbsp; Airport, Yellow Cab NYC, Book your trip online now">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title> Edit</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Shoes.css" media="screen">
    <script class="u-script" type="text/javascript" src="jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 4.0.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    
    
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "High-top Heads Co",
		"sameAs": [
				"https://www.facebook.com/bethel.ayodeji/",
				"https://www.instagram.com/_bethelllll_/",
				"https://www.linkedin.com/in/bethel-ayodeji-1200b2196/"
		]
}</script>
    <meta name="theme-color" content="#478ac9">
    <meta property="og:title" content="Shoes">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body u-overlap"><header class="u-clearfix u-header u-header" id="sec-6b72"><div class="u-absolute-hcenter u-expanded u-opacity u-opacity-20 u-shape u-shape-rectangle u-white u-shape-1"></div><h2 class="u-custom-font u-font-georgia u-text u-text-default u-text-1">High-Top Hea​ds Co.</h2><nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
        <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
          <a class="u-button-style u-custom-active-border-color u-custom-border u-custom-border-color u-custom-borders u-custom-hover-border-color u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-text-color u-custom-text-hover-color u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
            <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect>
</symbol>
</defs></svg>
          </a>
        </div>
        <div class="u-custom-menu u-nav-container">
          <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="Home.php" style="padding: 10px 0px;">Home </a>
</li><li class="u-nav-item"><a class="u-border-2 u-border-active-palette-1-base u-border-hover-palette-1-base u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-palette-1-base u-text-grey-90 u-text-hover-grey-90" href="cart.php" style="padding: 10px 0px;">Cart</a>
</li></ul>
        </div>
        <div class="u-custom-menu u-nav-container-collapse">
          <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
            <div class="u-inner-container-layout u-sidenav-overflow">
              <div class="u-menu-close"></div>
              <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Login.html" style="padding: 10px 0px;">Login</a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="Home.php" style="padding: 10px 0px;">Home </a>
</li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="cart.php" style="padding: 10px 0px;">Cart</a>
</li></ul>
            </div>
          </div>
          <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
        </div>
      </nav></header>
      
<section class="u-clearfix u-white u-section-1" id="sec-ca9c">
<div class="u-clearfix u-sheet u-sheet-1">

<div class="bs-example">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="page-header clearfix">
<h3 class="pull-left"></h3>
</div>
<br></br>

<?php
$result = mysqli_query($conn,"SELECT * FROM checkout");
?>
<?php
if (mysqli_num_rows($result) > 0) {
?>
<div class='tablemove'>
<table class='table' style="border: 0px solid white; border-collapse: collapse;width:100%;">
<tr style ="width:100%" >
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width:100%;">old Fullname</td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width:100%;">new Fullname</td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width:50%;"></td>
</tr>
<?php
$i=0;


while($row = mysqli_fetch_array($result)) {
?>
<tr style="width:100%;">
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width:100%;"><?php echo $row["fullname"]; ?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE;width:100%;"><form method='post'>
    <input type='text' name='new' ></input>
    <input type=hidden name="name1" value="<?php echo $row["fullname"]; ?>">

<?php

?></td>
<td  style="border: 1px solid black; border-collapse: collapse; background-color: #CDDDEE; width:50%;">


    <input type='submit' name='update' value='update'style="background-color:green; color:white" onclick="return confirm ('Are you sure you want to update??')"></input>
    <input type=hidden name="name" >

<?php

?>

</td>
<!-- <td><?php // echo $row["mobile"]; ?></td> -->
</tr>

<?php
$i++;
}
?>
</table>
<?php
}
else{
echo "No result found";
}
?>
</div>
</div>
</div>        
</div>
</div>

</section>
    
    <footer class="u-clearfix u-footer u-grey-80" id="sec-4671"><div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-align-left u-social-icons u-spacing-10 u-social-icons-1">
          <a class="u-social-url" title="facebook" target="_blank" href="https://www.facebook.com/bethel.ayodeji/"><span class="u-icon u-social-facebook u-social-icon u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-ed4d"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-ed4d"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M73.5,31.6h-9.1c-1.4,0-3.6,0.8-3.6,3.9v8.5h12.6L72,58.3H60.8v40.8H43.9V58.3h-8V43.9h8v-9.2
            c0-6.7,3.1-17,17-17h12.5v13.9H73.5z"></path></svg></span>
          </a>
          <a class="u-social-url" title="instagram" target="_blank" href="https://www.instagram.com/_bethelllll_/"><span class="u-icon u-social-icon u-social-instagram u-icon-2"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-df4b"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-df4b"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M55.9,38.2c-9.9,0-17.9,8-17.9,17.9C38,66,46,74,55.9,74c9.9,0,17.9-8,17.9-17.9C73.8,46.2,65.8,38.2,55.9,38.2
            z M55.9,66.4c-5.7,0-10.3-4.6-10.3-10.3c-0.1-5.7,4.6-10.3,10.3-10.3c5.7,0,10.3,4.6,10.3,10.3C66.2,61.8,61.6,66.4,55.9,66.4z"></path><path fill="#FFFFFF" d="M74.3,33.5c-2.3,0-4.2,1.9-4.2,4.2s1.9,4.2,4.2,4.2s4.2-1.9,4.2-4.2S76.6,33.5,74.3,33.5z"></path><path fill="#FFFFFF" d="M73.1,21.3H38.6c-9.7,0-17.5,7.9-17.5,17.5v34.5c0,9.7,7.9,17.6,17.5,17.6h34.5c9.7,0,17.5-7.9,17.5-17.5V38.8
            C90.6,29.1,82.7,21.3,73.1,21.3z M83,73.3c0,5.5-4.5,9.9-9.9,9.9H38.6c-5.5,0-9.9-4.5-9.9-9.9V38.8c0-5.5,4.5-9.9,9.9-9.9h34.5
            c5.5,0,9.9,4.5,9.9,9.9V73.3z"></path></svg></span>
          </a>
          <a class="u-social-url" title="linkedin" target="_blank" href="https://www.linkedin.com/in/bethel-ayodeji-1200b2196/"><span class="u-icon u-social-icon u-social-linkedin u-icon-3"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 112 112" style=""><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#svg-6451"></use></svg><svg class="u-svg-content" viewBox="0 0 112 112" x="0" y="0" id="svg-6451"><circle fill="currentColor" cx="56.1" cy="56.1" r="55"></circle><path fill="#FFFFFF" d="M41.3,83.7H27.9V43.4h13.4V83.7z M34.6,37.9L34.6,37.9c-4.6,0-7.5-3.1-7.5-7c0-4,3-7,7.6-7s7.4,3,7.5,7
            C42.2,34.8,39.2,37.9,34.6,37.9z M89.6,83.7H76.2V62.2c0-5.4-1.9-9.1-6.8-9.1c-3.7,0-5.9,2.5-6.9,4.9c-0.4,0.9-0.4,2.1-0.4,3.3v22.5
            H48.7c0,0,0.2-36.5,0-40.3h13.4v5.7c1.8-2.7,5-6.7,12.1-6.7c8.8,0,15.4,5.8,15.4,18.1V83.7z"></path></svg></span>
          </a>
        </div>
        <p class="u-align-center u-text u-text-default u-text-1">Web Technologies Individual Project<br>Bethel Ayodeji- C'2023
        </p>
        <p class="u-align-center u-custom-font u-font-georgia u-text u-text-default u-text-2"> HighTop <span style="font-size: 1.5rem;"></span>Heads Co.
        </p>
      </div></footer>

  </body>
</html>