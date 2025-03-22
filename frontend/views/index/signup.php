<?php
$this->title = 'UberMobileHealthCare - SignUp';
?>
    <div id="preloader">
        <div id="loading"></div>
    </div>
    <nav id="mainmenu" class="navbar navbar-fixed-top main-menu head-menu auto-height" role="navigation">
        <div class="container">
         <div class="col-sm-3 col-xs-12">
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
           
          </div>
          <div class="col-sm-5 col-xs-12"> 
          
            <div id="navbar" class="navbar-collapse collapse">
                <div class="navbar-right" align="right">
                   Already have an UMH account? <br>
                      <a href="login">Login</a> &nbsp;
                </div>
            </div>
          </div>           
        </div>
    </nav>
    
    <div class="fixedspace"></div>
    <section id="about" style="margin-bottom:0px !important;">
      <div class="about-cont bg-grey">
          <div class="container">
              <div class="row">
                  <div style="height:35px;"></div>
                  <div align="center">
                   <h4>Let's get started!</h4>
                   <p align="center">First, tell us what you're looking for.</p>
                   </div>
                   <div style="height:40px;"></div>
                   <div class="col-md-2"></div>
                 <div class="col-md-4">
                   
                        <div align="center">
                         <img src="<?php echo Yii::getAlias('@web').'/frontend/web/' ?>images/hire.png"/>
                        <p>Healthcare Agency.</p>
                        </div>
                    <div style="height:15px;"></div>
                    <div align="center"> <a href="register-healthcare-agencies" class="btn btnblue">Sign Up </a></div>                     
                </div>
                <div class="col-md-4 aboutl">
                   
                        <div align="center">
                         <img src="<?php echo Yii::getAlias('@web').'/frontend/web/' ?>images/work.png"/>
                        <p>Service Provider. </p>
                        </div>
                    <div style="height:15px;"></div>
                    <div align="center"> <a href="register-service-provider" class="btn btnblue">Sign Up </a></div>                     
                </div>
                 <!--<div class="col-md-4 aboutl"> 
                     
                        <div align="center">
                         <img src="images/pat.png"/>
                        <p>Service Request. </p>
                        </div>
                    <div style="height:15px;"></div>
                    <div align="center"> <a href="registered.html" class="btn btnblue">Sign Up </a></div>                     
                </div>--> 
               <div style="clear:both; height:50px;"></div> 
              </div>
          </div>
      </div>      
    </section>