<?php
$this->title = 'UberMobileHealthCare -Forgot Password';
?>
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
                        <li><a href="sign-up.html" class="btn btn-primary"> SIGN UP</a></li>
                    </ul>
                </div>
            </div>
          </div>           
        </div>
    </nav>
    
    <div class="fixedspace"></div>
    <section id="about" style="margin-bottom:0px !important;">
      <div class="about-cont bg-grey about-to-right">
          <div class="container">
              <div class="row">
                  <div class="col-md-4"></div>
                   <div class="col-md-4">
                          <div align="center" class="bcircle">
                          	 <h4>Reset your password</h4>
                             <div class="pading"><input name="email" id="email" type="text" placeholder="Enter your email address" style="width:90%;"></div>
                             <input name="" type="button" value="Submit" class="btn btnblue"> &nbsp; <input name="" type="button" value="Cancel" class="btn btngrey">
                          </div>
                    </div>
                  <div class="col-md-4"></div>
              </div>
          </div>
      </div>      
    </section>