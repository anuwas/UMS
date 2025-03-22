<?php
$this->title = 'UberMobileHealthCare - Login';
?>
<div ng-app="UMHIndex">
    <div id="preloader">
        <div id="loading"></div>
    </div>
    <nav id="mainmenu" class="navbar navbar-fixed-top main-menu head-menu auto-height" role="navigation">
        <div class="container">
         <div class="col-sm-3 col-xs-12">
         <a class="navbar-brand" href="index"><img src="<?php echo Yii::getAlias('@web').'/frontend/web/' ?>images/logo.png" alt> </a>
         </div>
          <div class="col-sm-4" style="margin-top:10px;"> <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
             
          </div>
          <div class="col-sm-5 col-xs-12"> 
          
            <div id="navbar" class="navbar-collapse collapse">
                <div class="navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="signup" class="btn btn-primary"> SIGN UP</a></li>
                    </ul>
                </div>
            </div>
          </div>           
        </div>
    </nav>
    
    <div class="fixedspace"></div>
    <section id="about" style="margin-bottom:0px !important;" ng-controller="loginContoller">
      <div class="about-cont bg-grey about-to-right">
          <div class="container">
              <div class="row">
                   <div style="height:40px;"></div>
                   <h4 align="center">Login to access the site </h4>
                   <div style="height:10px;"></div>
                    <div class="col-lg-4"></div>
                    <div class="col-md-4 bcircle">
                    <div style="height:40px;"></div>
                    <div align="center"><input  id="uname" ng-model="uname" type="text" placeholder="Username or Email" style="width:80%;"></div>
                    <div style="height:15px;"></div>
                    <div align="center"><input id="userpassword" ng-model="userpassword" type="password" placeholder="Password" style="width:80%;"></div>
                    <div style="height:15px;"></div>
                    <div align="center"> <input type="button" ng-click="LoginClick()"  value="Log In" class="btn btnblue"> &nbsp; <input id="remombermenexttime" ng-model="remombermenexttime" type="checkbox" value=""> Remember me next time </div>
                     <div style="height:15px;"></div>
                       <p style="padding-right:8%"><a href="forgot-password">Forgot password?</a></p>
                      <p style="padding-right:8%">Don't have an account? <a href="signup">Sign up now!</a></p>
                     
                </div>
                    <div class="col-lg-4"></div>
              </div>
          </div>
      </div>      
    </section>
    </div>