<?php
session_start();
ob_start();
  include "db_connection.php"; // Using database connection file here without displaying its contents
  ob_end_clean();

   if(isset($_POST['buy1'])){
     $item_name= "Air Jordan 1 Retro High Red"; //enter values into variables provided by froms from each shoe display
     $shoe_price="700.0";

   $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')"; // inserting into database

   if(mysqli_query($conn,$sql)){
     echo "<script>alert('added to your cart.')</script>";
   } else{
     echo 'error'; //returns if the shoe data is not entered into the table
   }
   }

   if(isset($_POST['buy2'])){
    $item_name= "Vans SK8-Hi Navy";
    $shoe_price="540.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
    echo 'error';
  }
  }

  if(isset($_POST['buy3'])){
    $item_name= "Nike airmax Pre-day 'black white'";
    $shoe_price="441.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
    echo 'error';
  }
  }

  if(isset($_POST['buy4'])){
    $item_name= "Nike Airforce 1 '07";
    $shoe_price="400.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
    echo 'error';
  }
  }

  if(isset($_POST['buy5'])){
    $item_name= "Nike Airmax 97s Undefeated";
    $shoe_price="172.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
    echo 'error';
  }
  }

  if(isset($_POST['buy6'])){
    $item_name= "Giuseppe Zannoti";
    $shoe_price="230.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
    echo 'error';
  }
  }

  if(isset($_POST['buy7'])){
    $item_name= "Airmax 270s White";
    $shoe_price="735.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
    echo 'error';
  }
  }

  if(isset($_POST['buy8'])){
    $item_name= "Airmax 270s 'black white";
    $shoe_price="735.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
    echo 'error';
  }
  }

  if(isset($_POST['buy9'])){
    $item_name= "yeezy boost 350";
    $shoe_price="500.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
    echo 'error';
  }
  }

  if(isset($_POST['buy10'])){
    $item_name= "Ultraboost 4.0 DNA";
    $shoe_price="165.0";

  $sql= "INSERT INTO `cartlist` (shoe_name, shoe_price) VALUES ('$item_name', '$shoe_price')";

  if(mysqli_query($conn,$sql)){
    echo "<script>alert('added to your cart.')</script>";
  } else{
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
    <title> Shoes</title>
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
        <h1 class="u-custom-font u-font-georgia u-text u-text-default u-text-1">Shoes&nbsp;</h1>
        <a href="Home.php" data-page-id="1700813288" class="u-border-2 u-border-hover-palette-1-base u-border-palette-1-base u-btn u-btn-round u-button-style u-hover-palette-1-base u-palette-1-dark-2 u-radius-50 u-btn-1">Logout</a>
        <div class="u-container-style u-group u-group-1">
          <div class="u-container-layout">
            <div class="u-align-right u-border-2 u-border-grey-dark-1 u-expanded-width-xs u-radius-15 u-shape u-shape-round u-shape-1"></div>
            <p class="u-align-left u-custom-font u-font-georgia u-small-text u-text u-text-variant u-text-2">New Releases </p>
          </div>
        </div>
        <h4 class="u-custom-font u-font-georgia u-text u-text-default u-text-3">10 shoes filtered by&nbsp;</h4>

        <div class="u-container-style u-grey-60 u-group u-hover-feature u-shape-rectangle u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h5 class="u-align-left u-text u-text-4">Air Jordan 1 Retro High Red</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-1" src="images/Jordan1retrohigh.jpg" alt="" data-image-width="1100" data-image-height="620">
            <p class="u-align-left u-text u-text-5">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br>The Air Jordan 1 High debuted in 1985 as the first signature sneaker developed by Nike for Michael Jordan. The Peter Moore designed performance basketball sneaker featured a simple Nike Dunk inspired design that incorporated the Nike Swoosh and the Jordan Wings logo and featured Nike Air.&nbsp;
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-6">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Jordan<br>
              <span style="font-weight: 700;">Colorway</span>: Red, black, white<br>
              <span style="font-weight: 700;">Release date</span>: 2021-10-15
            </p>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-7">Estimated market price: GHC 700</p>
            <input type= "submit"  value = "buy now" name = "buy1" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')"></input> 
          </form>
          </div>
        </div> 
        
        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-3">
          <div class="u-container-layout u-container-layout-3">
            <h5 class="u-align-center u-text u-text-8">Vans SK8-Hi&nbsp; Navy</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-2" src="images/VansSK8-HiNavy.jpg" alt="" data-image-width="296" data-image-height="170">
            <p class="u-align-left u-text u-text-9">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br> Vans are a staple in skate culture and street style, and this skate sneaker is no exception. ... The Vans SK8 Hi Navy is constructed from a&nbsp;<b>combination of canvas and suede</b>&nbsp;and features the signature side stripe detail and vulcanized waffle sole.
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-10">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Vans<br>
              <span style="font-weight: 700;">Colorway</span>: black, white, navy blue&nbsp;<br>
              <span style="font-weight: 700;">Release date</span>: 2021-09-15
            </p>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-11">Estimated market price: GHC 441</p>
            <input type="submit" value= "buy now " name= "buy2" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-4"onclick="return confirm('Are you sure you want to add to cart')">
            </form>
            </a>
          </div>
        </div>


        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-4">
          <div class="u-container-layout u-container-layout-4">
            <h5 class="u-align-left u-text u-text-12">Nike airmax Pre-day 'black white'</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-3" src="images/Nike-Air-Max-Pre-Dayblackandwhite.jpg" alt="" data-image-width="1140" data-image-height="800">
            <p class="u-align-left u-text u-text-13">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br>&nbsp;Case in point: A newly-surfaced “Black/White” colorway.&nbsp;Akin to an inaugural style of the all-new&nbsp;Air Max 2021, the upcoming pair indulges in a dark arrangement across most of its mixed-materials upper. Profile swooshes, laces, pull tabs at the heel and real estate on the tongue deviate from the pitch-“Black” makeup in favor of a contrasting “colorless” composition
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-14">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Nike<br>
              <span style="font-weight: 700;">Colorway</span>: black, white<br>
              <span style="font-weight: 700;">Release date</span>: 2021-08-05
            </p>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-7">Estimated market price: GHC 540</p>
            <input type= "submit"  value = "buy now" name = "buy3" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')">
          </form>
          </a>
          </div>
        </div>


        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-5">
          <div class="u-container-layout u-container-layout-5">
            <h5 class="u-align-left u-text u-text-16">Nike Airforce 1 '07</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-4" src="images/AF1.2.jpg" alt="" data-image-width="592" data-image-height="592">
            <p class="u-align-left u-text u-text-17">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br>The radiance lives on in the Nike Air Force 1 ’07, the b-ball icon that puts a fresh spin on what you know best: crisp leather, bold colors and the perfect amount of flash to make you shine.
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-18">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Nike<br>
              <span style="font-weight: 700;">Colorway</span>: white<br>
              <span style="font-weight: 700;">Release date</span>: 2021-08-02
            </p>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-19">Estimated market price: GHC 400</p>
            <input type= "submit"  value = "buy now" name = "buy4" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')">
            </form>
          </div>
        </div>


        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-6">
          <div class="u-container-layout u-container-layout-6">
            <h5 class="u-align-left u-text u-text-20">Nike Airmax 97s Undefeated</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-5" src="images/Airmax97undefeated.jpg" alt="" data-image-width="261" data-image-height="193">
            <p class="u-align-left u-text u-text-21">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br>While the culture-shifting Air Max 97 turns 20, LA sneaker boutique Undefeated celebrates 15 years as a cultural influencer. To commemorate, the long-time Nike collaborator lovingly gives the "silver bullet" a fresh treatment,Black with hits of Speed Red,complete with their name across the patent mudguard. When it first arrived, the Air Max 97 was a futuristic style that sped ahead of its time.&nbsp;
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-22">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Nke<br>
              <span style="font-weight: 700;">Colorway</span>: Red, black, white<br>
              <span style="font-weight: 700;">Release date</span>: 2021-07-22
            </p>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-23">Estimated market price: GHC172</p>
            <input type= "submit"  value = "buy now" name = "buy5" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')">
</form>
          </div>
        </div>

        
        
        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-7">
          <div class="u-container-layout u-container-layout-7">
            <h5 class="u-align-left u-text u-text-24">Giuseppe Zannoti&nbsp;</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-6" src="images/GiuseppeZannotichelseas.jpg" alt="" data-image-width="275" data-image-height="183">
            <p class="u-align-left u-text u-text-25">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br><b>close-fitting ankle boots featuring stretchy elastic side panels</b>. Many Chelsea boots have a loop or fabric tab at the back to allow for easy pulling on and off, a classic design feature from the boots' Victorian origins.&nbsp;
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-26">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Guiseppe Vannoti<br>
              <span style="font-weight: 700;">Colorway</span>: Creamy brown<br>
              <span style="font-weight: 700;">Release date</span>: 2021-07-21
            </p>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-27">Estimated market price: GHC 230</p>
            <input type= "submit"  value = "buy now" name = "buy6" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')">
          </form>
          </div>
        </div>


        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-8">
          <div class="u-container-layout u-container-layout-8">
            <h5 class="u-align-left u-text u-text-28">Airmax 270s White&nbsp;</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-7" src="images/270swhite2.jpg" alt="" data-image-width="592" data-image-height="592">
            <p class="u-align-left u-text u-text-29">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br> The Nike Air Max 270 combines the exaggerated tongue from the Air Max 180 and classic elements from the Air Max 93. It features Nike's biggest heel Air unit yet for a supersoft ride that feels as impossible as it looks.
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-30">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Nike<br>
              <span style="font-weight: 700;">Colorway</span>: white<br>
              <span style="font-weight: 700;">Release date</span>: 2021-07-14
            </p>
            <form method="POST">
            <p class="u-small-text u-text u-text-variant u-text-31">Estimated market price: GHC 735</p>
            <input type= "submit"  value = "buy now" name = "buy7" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')">
            </form>
          </div>
        </div>


        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-9">
          <div class="u-container-layout u-container-layout-9">
            <h5 class="u-align-left u-text u-text-32">Airmax 270s 'black white'</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-8" src="images/270sblackandwhite.jpg" alt="" data-image-width="1280" data-image-height="1600">
            <p class="u-align-left u-text u-text-33">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br> The Nike Air Max 270 combines the exaggerated tongue from the Air Max 180 and classic elements from the Air Max 93. It features Nike's biggest heel Air unit yet for a supersoft ride that feels as impossible as it looks.&nbsp;
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-34">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Nike<br>
              <span style="font-weight: 700;">Colorway</span>: black, white<br>
              <span style="font-weight: 700;">Release date</span>: 2021-07-13
            </p>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-35">Estimated market price: GHC 735</p>
            <input type= "submit"  value = "buy now" name = "buy8" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')">
            </form>
          </div>
        </div>
      </div>
      
    </section>
    <section class="u-clearfix u-section-2" id="sec-a811">
      <div class="u-align-left u-clearfix u-sheet u-sheet-1">
        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h5 class="u-align-left u-text u-text-1">Ultraboost 4.0 DNA</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-1" src="images/Adidasultraboost.jpg" alt="" data-image-width="840" data-image-height="840">
            <p class="u-align-left u-text u-text-2">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br> Ultraboost DNA carries the genetic information of one of the most popular performance runners, but it's born for the street.Precision-made, seamless zones combine strength and performance with smooth comfort to ensure distraction-free movement.
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-3">
              <span style="font-weight: 700;">Brand</span>:&nbsp; adidas<br>
              <span style="font-weight: 700;">Colorway</span>: black, white<br>
              <span style="font-weight: 700;">Release date</span>: 2020-11-12
            </p>
            <br></br>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-4">Estimated market price: GHC165</p>
            <input type= "submit"  value = "buy now" name = "buy10" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')">
            </form>
          </div>
        </div>


        <div class="u-container-style u-grey-60 u-group u-shape-rectangle u-group-2">
          <div class="u-container-layout u-container-layout-2">
            <h5 class="u-align-left u-text u-text-5">yeezy boost 350</h5>
            <img class="u-border-2 u-border-grey-75 u-image u-image-default u-image-2" src="images/adidasyeezyboost1.jpg" alt="" data-image-width="1000" data-image-height="1000">
            <p class="u-align-left u-text u-text-6">
              <span style="font-weight: 700; font-size: 0.875rem;">Description:</span>
              <br> YEEZY BOOST 350 V2 Black features an upper composed of re-engineered&nbsp; primeknit. The post-dyed monofilament side stripe is woven into the upper. Reflective threads are woven into the laces. The midsole utilizes adidas’ innovative BOOST™ technology.&nbsp;&nbsp;
            </p>
            <p class="u-align-left u-small-text u-text u-text-variant u-text-7">
              <span style="font-weight: 700;">Brand</span>:&nbsp; Adidas<br>
              <span style="font-weight: 700;">Colorway</span>: Red, black<br>&nbsp;<span style="font-weight: 700;">Release date</span>: 2020-11-15
            </p>
            <br></br>
            <form method="POST">
            <p class="u-align-left u-small-text u-text u-text-variant u-text-8">Estimated market price: GHC 500</p>
            
            <input type= "submit"  value = "buy now" name = "buy9" class="u-border-2 u-border-black u-btn u-button-style u-hover-black u-palette-1-light-3 u-text-black u-text-hover-white u-btn-2"onclick="return confirm('Are you sure you want to add to cart')">
            </form>
          </div>
        </div>
      </div>
    </section>


    <style class="u-overlap-style">.u-overlap:not(.u-sticky-scroll) .u-header {
background-color: #4c7397 !important
}</style>
    
    
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