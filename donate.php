<!doctype html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->


<!-- Mirrored from lovesome.biz/tf-template/liftfund/causes-single.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 28 Jul 2020 15:15:16 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="Segun Sowemimo">
    <!-- ======= titles ======= -->
    <title>Divine Destiny Orphange Donation| Please help the children</title>
    <!-- ======= favicon ======= -->
    <link rel="icon" type="image/png" href="favicon.png">
    <!-- ======= all css ======= -->
    <!-- normalize css -->
    <link rel="stylesheet" href="css/normalize.css">
    <!-- plugin css -->
    <link rel="stylesheet" href="css/plugin.css">
     
    <!-- style css -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/sweetalert2.min.css">
    <!-- responsive css -->
    <link rel="stylesheet" href="css/responsive.css">
</head>

<body>
    <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->

    <!-- Add your site or application content here -->

    <!--
        ============================
        preloader part start
        ============================
    -->
    <div class="preloader">
        <div class="spinner">
            <div class="double-bounce1"></div>
            <div class="double-bounce2"></div>
        </div>
    </div>
   
    <?php include_once("partials/head.php");?>
    
<p style="margin-bottom:140px">.</p>

<section class="donation-area parallax" id="donation">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-0">
                    <!-- donate form -->
					<form id="donate_form" method="post">
					
                    <div class="donate-form">
                        <div class="form-group col-md-12">
                            <h3>How much would you like to donate?</h3>
                            <div class="select-amount">
                                
                                <input name="amount" id="amount" placeholder=" Amount in Naira" type="text" required>
                            </div>
                        </div>
                        <!--
                        <div class="form-group col-sm-6">
                            <h3> Currency:</h3>
                            <select name="currency" id="curr" style="color:black">
                            <option value="NGN"> NGN </option>
							<option value="USD"> USD </option>
                        </select>
                        </div>-->
                        <div class="form-group col-sm-6">
                            <h3>E-mail</h3>
                            <input name="email" id="email"  type="email" required>
                        </div>
                        <div class="form-group col-sm-6">
                            <h3>Phone Number</h3>
                            <input name="phone" id="phone" type="text" required>
                        </div>
                        
                        <button type="button" class="tem-btn move-eff donate_it"><span>donate now</span></button>
                    </div>
					
					</form>
                </div>
            </div>
        </div>
    </section>
   <p style="margin-bottom:50px">.</p>
    <?php include_once("partials/foot.php");?>