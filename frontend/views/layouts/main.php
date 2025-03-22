<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <meta name="description" content="Responsive Bootstrap App Landing Page Template">    
    <meta name="keywords" content="Alive, Bootstrap, Landing page, Template, App, Mobile">
    <meta name="author" content="emr4all.com">    
    <META NAME="ROBOTS" CONTENT="INDEX, FOLLOW">
    <link rel="icon" href="images/favicon/favicon.ico">
	<!-- SET OF FAVICONS FOR APPLE PRODUCTS -->
    <link rel="apple-touch-icon" href="images/favicon/apple-touch-icon.png">
    <!-- RALEWAY FONT FROM GOOGLE FONTS -->
    <link href='http://fonts.googleapis.com/css?family=Raleway:300,400,600,700,900' rel='stylesheet' type='text/css'>
 <!-- JQUERY -->
    <script type="text/javascript" src="js/jquery_1.11.1.min.js"></script>
    <style type="text/css">
    #yii-debug-toolbar{
    display: none;
    }
    </style>
</head>
<body id="body" class="page-loading">
<?php $this->beginBody() ?>

<?= Alert::widget() ?>
<?= $content ?>

<footer>
      <div class="container anim-fade-up">
        
          <!-- HELP US SPREAD THE UMH :-) -->
          <div class="col-sm-3 col-xs-12 hidden-xs">&copy; 2016 UMH, All rights reserved.</div>
          <div class="col-sm-6">
              <a href="#"><div class="sm"> <span class="elegant social_facebook"></span></div></a>
              <a href="#"><div class="sm"><span class="elegant social_twitter"></span></div></a>
              <a href="#"><div class="sm"> <span class="elegant social_googleplus"></span></div></a>
              <a href="#"><div class="sm"><span class="elegant social_instagram"></span></div></a>
              <a href="#"><div class="sm"><span class="elegant social_youtube"></span></div></a>
              <a href="#"><div class="sm"><span class="elegant social_vimeo"></span></div></a>    
          </div>
          <div class="col-sm-3 col-xs-12"> <img src="images/footer.png" style="margin-top:-10px;"/></div> 
      </div>
    </footer>    
    
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
