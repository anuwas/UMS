<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use frontend\assets\AppAsset;

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
    
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900' rel='stylesheet' type='text/css'>
    <link href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>css/icons/elegant.css" rel='stylesheet' type='text/css'>
    <link href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>css/bootstrap/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>css/style-default.css" rel="stylesheet" id="theme-change">
    <link href="<?php echo Yii::getAlias('@web').'/frontend/web/'?>css/plugins/plugins.css" rel="stylesheet">
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/angular/angular.min.js"></script>
</head>

<body id="body" class="page-loading">

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
</body>
</html>
<script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/jquery_1.11.1.min.js"></script>
    
    <!-- BOOTSTRAP SCRIPTS -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/bootstrap.js"></script>
    <!-- SMOOTH SCROLLING FIX -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/js/' ?>smoothscroll.js"></script>
    
    <!-- PARALLAX -->
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/parallax.js" id="parallax-change"></script>

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
    <script type="text/javascript" src="<?php echo Yii::getAlias('@web').'/frontend/web/'?>js/angular/ang.index.js"></script>