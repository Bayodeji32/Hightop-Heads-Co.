<?php
session_start();
ob_start();
include "db_connection.php"; // Using database connection file here without displaying its contents
ob_end_clean();

    if(isset($_POST['Login'])){
      $uname = $_POST['username'];
      $pass1=$_POST['password'];
      $records = mysqli_query($conn,"SELECT * FROM `tbl_member` WHERE (`username`='$uname'AND `password`= md5('$pass1'))"); // selecting from table to crosscheck sign-up data
      if($records){
      if (mysqli_num_rows($records) == 1){ 

        $_SESSION['username']='$uname';
        header('location: Shoes.php'); 
        exit;

      }
    }
     }
      
?>
		
	


<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="​Online University of
In-Demand Professions, ​Top ten most popular courses for international students, ​What Is a Life Coach?, ​Leader in Executive Education, ​Flexible Distance Learning, ​Need Help?">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Login</title>
    <link rel="stylesheet" href="nicepage.css" media="screen">
<link rel="stylesheet" href="Login.css" media="screen">
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
    <meta property="og:title" content="Login">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-align-center u-clearfix u-image u-shading u-section-1" src="" data-image-width="4038" data-image-height="2697" id="sec-115c">
      <div class="u-expanded-width u-opacity u-opacity-10 u-shape u-shape-rectangle u-white u-shape-1"></div>
      <h1 class="u-align-left u-text u-title u-text-1">Explore a new horizon of footwear and comfort<br>
        <br>
      </h1>
      <p class="u-text u-text-default-xl u-text-2"> Login to your Account</p>
      <div class="u-form u-login-control u-form-1">
        <form method="POST" >
          <div class="u-form-group u-form-name">

  <!----------------------------------------------------------------------Login form---------------------------------------------------------------------------------------------------------->
       
            <label for="username" class="u-label">Username *</label>
            <input type="text" placeholder="Enter your Username" id="username-a30d" name="username" class="u-grey-5 u-input u-input-rectangle u-input-1" required="">
          </div>
          <div class="u-form-group u-form-password">
            <label for="password" class="u-label">Password *</label>
            <input type="password" placeholder="Enter your Password" id="password-a30d" name="password" class="u-grey-5 u-input u-input-rectangle u-input-2" required="">
          </div>
          <div class="u-align-left u-form-group u-form-submit">
         <input type="submit" name="Login" value="Login" class="u-btn u-btn-submit u-button-style u-btn-1">
          </div>
  <!---------------------------------------------------------------------Login Form-----------------------------------------------------------------------------------------------------------> 
        </form>
      </div>
      <div class="u-gallery u-layout-grid u-lightbox u-no-transition u-show-text-on-hover u-gallery-1">
        <div class="u-gallery-inner u-gallery-inner-1">
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="611" data-image-height="408">
              <img class="u-back-image u-expanded" src="images/Vans-Company-Logo-removebg-preview.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-1">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="568" data-image-height="439">
              <img class="u-back-image u-expanded" src="images/adidas-removebg-preview.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-2">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
          <div class="u-effect-fade u-gallery-item">
            <div class="u-back-slide" data-image-width="500" data-image-height="500">
              <img class="u-back-image u-expanded" src="images/nike-removebg-preview.png">
            </div>
            <div class="u-over-slide u-shading u-over-slide-3">
              <h3 class="u-gallery-heading"></h3>
              <p class="u-gallery-text"></p>
            </div>
          </div>
        </div>
      </div>
      <a href="Signup.php" data-page-id="58705369" class="u-border-1 u-border-active-palette-2-base u-border-hover-palette-1-base u-btn u-button-style u-login-control u-login-create-account u-none u-text-palette-1-base u-btn-2">Don't have an account?</a>
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