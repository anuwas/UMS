<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;
use yii\web\Session;
use yii\helpers\Url;

$session=new Session();

?>
AppAsset::register($this);

?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
     <meta name="description" content="Responsive Bootstrap App Landing Page Template">    
    <meta name="keywords" content="Alive, Bootstrap, Landing page, Template, App, Mobile">
    <meta name="author" content="emr4all.com">    
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    
    <link rel="icon" href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>images/favicon/favicon.ico">
    <link rel="apple-touch-icon" href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>images/favicon/apple-touch-icon.png">
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900' rel='stylesheet' type='text/css'>
    
 	<link href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>css/icons/elegant.css" rel='stylesheet' type='text/css'>
    <!-- BOOTSTRAP -->
    <link href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>css/style-default.css" rel="stylesheet" id="theme-change">
    <link href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>css/plugins/plugins.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/angular/angular.min.js"></script>
</head>

<body id="body" class="page-loading">
<!-- =========================
     PRELOADER
============================== -->
    <div id="preloader">
        <div id="loading"></div>
    </div>
    <nav id="mainmenu" class="navbar navbar-fixed-top main-menu head-menu auto-height" role="navigation">
        <div class="container">
         <div class="col-sm-4 col-xs-12">
         <a class="navbar-brand" href="index.html"><img src="<?php echo Yii::getAlias('@web').'/frontend/web/' ?>images/logo.png" alt> </a>
         </div>
          <div class="col-sm-4" style="margin-top:10px;"> <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div style=" padding-top:10px;" class="topli"> 
                 <ul>
                      <li> <a href="service-provider.html"> Find Service Provider </a></li>
                      <li>|</li>
                      <li> <a href="message.html"> Message </a> </li>
                      <li>|</li>
                      <li> <a href="report.html"> Report </a> </li>
                  </ul>
            </div>
          </div>
          <div class="col-sm-4 col-xs-12"> 
          
            <div id="navbar" class="navbar-collapse collapse">
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="#"> 
                       <?php echo $session['user']['name'];?>
                         </a></li>
                       
                        <li><a href="<?php echo  Url::base();?>/index/logout" class="btn btn-primary"> SIGN OUT</a></li>
                    </ul>
                </div>
            </div>
          </div>           
        </div>
    </nav>
    
    <div class="fixedspace"></div>
    <div style="clear:both;"></div>
    <section id="navigation">
       <div class="container">
              <div class="row">
                   <ul class="pfmenu">
                      <li> <a href="dasboard-agency.html" class="active">Dashboard </a></li>
                      <li> <a href="My-Profile.html">My Profile </a></li>
                      <li> <a href="Manage-Admin.html">Manage Admin </a></li>
                      <li> <a href="Manage-Staff.html">Manage Staff </a></li>
                      <li> <a href="Map-Service-Posting.html">Manage Service Postings </a></li>
                      <li> <a href="Post-New-Service.html">New Service Postings </a></li>
                   </ul>
               </div>
           </div>
    </section>

<?= $content ?>
<section id="contact" class="caption-margin">
     
      <div id="contact-more">
          <div class="container anim-fade-up">
            <div class="col-sm-3 col-xs-12">
                <h6>Uber Mobile Healthcare</h6>
                <p>Proudly made in<br/>Katowice, Silesia, Poland</p> 
            </div>
            <div class="col-sm-3 col-xs-12">
                <h6>Find us on a map</h6>
                <ul>
                    <li><a href="#">Our office on Google Maps</a></li>
                    <li><a href="#">Our surroundings on Street View</a></li>
                </ul>               
            </div>
            <div class="col-sm-3 col-xs-12">
                <h6>Call us today</h6>
                <ul>
                    <li><span>Mobile: </span><a href="#">+123 456 789 123</a></li>
                    <li><span>Office:</span><a href="#">+123 45 678 901 234</a></li>
                </ul>               
            </div>
            <div class="col-sm-3 col-xs-12">
                <h6>Drop us a line</h6>
                <p class="breakit"><a href="#">support@ubermobilehealthcare.com </a></p>               
            </div>            
          </div>
      </div>
    </section>
    <footer>
      <div class="container anim-fade-up">
        
          <!-- HELP US SPREAD THE UMH :-) -->
          <div class="col-sm-3 col-xs-12 hidden-xs"><a href="privacy-policy" target="_blank">Privacy policy </a> &nbsp; | &nbsp; <a href="terms-conditions" target="_blank">Terms of use</a></div>
          <div class="col-sm-6">
              <a href="#"><div class="sm"> <span class="elegant social_facebook"></span></div></a>
              <a href="#"><div class="sm"><span class="elegant social_twitter"></span></div></a>
              <a href="#"><div class="sm"> <span class="elegant social_googleplus"></span></div></a>
              <a href="#"><div class="sm"><span class="elegant social_instagram"></span></div></a>
              <a href="#"><div class="sm"><span class="elegant social_youtube"></span></div></a>
              <a href="#"><div class="sm"><span class="elegant social_vimeo"></span></div></a>    
          </div>
          <div class="col-sm-3 col-xs-12"> &copy; 2016 UMH, All rights reserved. </div> 
      </div>
    </footer>
    <input type="hidden" name="baseurl" id="baseurl" value="<?php echo Url::base();?>">
</body>
</html>
<script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/jquery_1.11.1.min.js"></script>
    
    <!-- BOOTSTRAP SCRIPTS -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/bootstrap.js"></script>
    <!-- SMOOTH SCROLLING FIX -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/js/' ?>smoothscroll.js"></script>
    
    <!-- PARALLAX -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/parallax.js" id="parallax-change"></script>
	<script type="text/javascript"  src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/headroom.min.js"></script>      
    <script type="text/javascript"  src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/jQuery.headroom.js"></script>
    <!-- VIEWPORT DETECTION -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/jquery.inview.min.js"></script>
    
    <!-- CAROUSEL -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/owl.carousel.min.js"></script>
    
    <!-- COUTNUP -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/countUp.min.js"></script>
    
    <!-- FORM VALIDATION -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/validator.js"></script>
    
    <!-- IMAGE ZOOM - COLORBOX JS-->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/jquery.colorbox-min.js"></script>