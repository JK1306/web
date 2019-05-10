<?php
/**
 * Created by PhpStorm.
 * User: Jaikishore
 * Date: 27-Feb-19
 * Time: 11:25 AM
 */?>
<html lang="en">
<head>
    <title>Net Banking</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="Net Banking Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
    <!-- bootstrap-css -->
    <link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!--// bootstrap-css -->
    <!-- css -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
    <!--// css -->
    <link rel="stylesheet" href="css/owl.carousel.css" type="text/css" media="all">
    <link href="css/owl.theme.css" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/cm-overlay.css" />
    <!-- font-awesome icons -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- //font-awesome icons -->
    <!-- font -->
    <link href="//fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
    <!-- //font -->
    <script src="js/jquery-1.11.1.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event){
            /*    event.preventDefault();*/
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
            });
    });
    </script>
    <!-- animation -->
    <link href="css/animate.css" rel="stylesheet" type="text/css" media="all">
    <script src="js/wow.min.js"></script>
    <script>
new WOW().init();
    </script>
    <!-- //animation -->

</head>
<body>
<!-- banner -->
<div class="banner">
    <!--header-->
    <div class="header">
        <div class="container">
            <nav class="navbar navbar-default">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <h1><a  href="index.html">Net <span>Banking</span></a></h1>
                </div>
                <!--navbar-header-->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li><a href="index.html" class="active">Home</a></li>
                        <li><a href="banking.php.php" class="scroll">Banking</a></li>
                        <li><a href="index.html #about" class="scroll">About</a></li>
                        <li><a href="index.html #services" class="scroll">Services</a></li>
 <!--                       <li><a href="index.html #news" class="scroll">News</a></li>
                        <li><a href="index.html #contact" class="scroll">Contact</a></li>-->
                    </ul>
                    <div class="clearfix"> </div>
                </div>
            </nav>
        </div>
    </div>
    <!--//header-->
    <div class="w3layouts-banner-info">
        <div class="container">
            <div class="w3layouts-banner-slider">
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides callbacks callbacks1" id="slider4">
                            <li>
                                <div class="agileits-banner-info">
                                    <div class="sign-in">
                                    <form method="post" autocomplete="off" action="submit.php">
                                        <h3>Sign IN</h3>
                                        <p>Email</p>
                                        <input type="email" name="mail" required>
                                        <p>Password</p>
                                        <input type="password" name="password" required><br><br>
                                        <input type="submit" name="Submit" value="Sign In">
                                        <p>Don't have account <a class="reg_button">click here.</a></p>
                                    </form>
                                    </div>
                                    <div class = "sign-up">
                                    <form method="post" autocomplete="off" action="submit.php">
                                        <h3>Sign Up</h3>
                                        <p>Name</p>
                                        <input type="text" name="name" required>
                                        <p>E-mail</p>
                                        <input type="email" name="mailId" required>
                                        <p>Phone</p>
                                        <input type="text" name="phnum" required minlength="10" maxlength="10">
                                        <p>DOB</p>
                                        <input type="date" name="date" required>
                                        <p>Password</p>
                                        <input type="password" name="paswd" required>
                                        <p>Re - Password</p>
                                        <input type="password" name="re-paswd" required><br><br>
                                        <input type="submit" name="Submit" value="Sign Up">
                                        <p>Already have account <a class="reg_button">click here.</a></p>
                                    </form>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <script>
                        /*var contain = document.getElementsByClassName('sign-up');*/
                        $(document).ready(function () {
                            $(".sign-up").hide();
                        });

                        $(".reg_button").click(function () {
/*                            console.log($(".sign-in").is(':hidden'));*/
                            if($(".sign-in").is(':hidden')){
                                $(".sign-up").hide();
                                $(".sign-in").show(function () {
                                    $(this).css("transition");
                                });
                            }else{
                                console.log("Clicked");
                                $(".sign-in").hide();
                                $(".sign-up").show(function () {
                                    $(this).css("transition");
                                });
                            }

                        });
                    </script>
                    <!--banner Slider starts Here-->
                </div>
            </div>
        </div>
    </div>
</div></body></html>