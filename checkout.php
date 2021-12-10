<?php
session_start();
ob_start();
include "db_connection.php"; // Using database connection file here without displaying its contents
ob_end_clean();

    if(isset($_POST['checkO'])){
    if(!empty($_POST['fullname'] && $_POST['address']&&$_POST['city'])&&$_POST['region']&& $_POST['cardname']&& $_POST['cardnumber']&&$_POST['expyear']&&$_POST['cvv']){ //checks if the various forms are not empty
        $firstname=$_POST['fullname']; // setting the form value in variable
        $address = $_POST['address'];
        $city= $_POST['city'];
        $region= $_POST['region'];
        $cardname=$_POST['cardname'];
        $cardnumber=  $_POST['cardnumber'];
        $expyear= $_POST['expyear'];
        $cvv=  $_POST['cvv'];   
        $sql = "INSERT INTO `checkout` (fullname,address, city,region,cardname,cardnumber,expyear,cvv) VALUES ('$firstname', '$address','$city', '$region','$cardname', '$cardnumber', '$expyear','$cvv')";
        if (mysqli_query($conn,$sql)) { //if query happens
			echo "<script>alert('success.')</script>";
            header('location:Editeval.php'); //displays when query is suceessful
                } 
                else {
            echo 'error'; // displays in case of an error
                }
            }
            else{
                echo "<script>alert('complete the form.')</script>"; // displays if form is incomplete
            }
}
      
?>







<!DOCTYPE html>
<html style="font-size: 16px;">
  <head>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="Model Comparison">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
    <link rel="stylesheet" href="path/to/bootstrap/css/bootstrap.min.css">
<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">      
    <link href="checkout.css" type="text/css"
  rel="stylesheet" />
      <title>checkout</title>

       <!-------------------------------------------------------------------------------------------------------------------------------------------------------------------------------->
</head>
<body>
    <!--source: W3schools link:https://www.w3schools.com/howto/howto_css_checkout_form.asp-->

     <!--------------------------------------------------------------checkout form------------------------------------------------------------------------------------------------------------------>
<div class="row">
  <div class="col-50">
    <div class="container">
      <form action='Editeval.php' method ='post'>

        <div class="row">
          <div class="col-50">
            <h3>Billing Address Info</h3>
            <label for="fname"><i class="fa fa-user"></i> Full Name</label>
            <input type="text" id="fname" name="fullname" placeholder="Bethel Ayodeji">

            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="adr" name="address" placeholder="Pawpaw Street bibi-lane">

            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="city" name="city" placeholder="Accra">

            <div class="row">
              <div class="col-50">
                <label for="region">Region</label>
                <input type="text" id="region" name="region" placeholder="GA">
              </div>
              
          <div class="col-50">
            <h3>Payment Info</h3>
            
            <label for="cname">Name on Card</label>
            <input type="text" id="cname" name="cardname" placeholder="Bethel Ayodeji">

            <label for="ccnum">Credit card number</label>
            <input type="text" id="ccnum" name="cardnumber" placeholder="2222-4444-6666-8888">
            

            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="text" id="expyear" name="expyear" placeholder="2018">
              </div>

              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" placeholder="123">
              </div>
            </div>
          </div>

        </div>
        <input type="submit" name='checkO' value="Continue to checkout" class="btn"> </input>
        

</form>
  <!--------------------------------------------------------------checkout form------------------------------------------------------------------------------------------------------------------>
    </div>
  </div>

  
</body>
</html>