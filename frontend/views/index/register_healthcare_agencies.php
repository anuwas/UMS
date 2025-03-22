<?php
$this->title = 'UberMobileHealthCare - Healthcare Agencies';
?>
<div ng-app="UMHIndex">
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
      <div class="about-cont bg-grey about-to-right" ng-controller="RegisterAgencies">
          <div class="container">
              <div class="row">
                    <div style="height:30px;"></div>
                   <h4 align="center">Sign up for free today as Healthcare Agency </h4>
                   <div style="height:30px;"></div>
                   <div class="col-md-2"></div>
                   <div class="col-md-8"> 
                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td colspan="3"><input ng-model="registered_company_name" id="registered_company_name" type="text" placeholder="Registered Company Name" style="width:100%;" required></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                       <tr>
                        <td><input ng-model="first_name" id="first_name" type="text" placeholder="First Name" style="width:100%;"></td>
                        <td width="2%">&nbsp;</td>
                        <td><input ng-model="last_name" id="last_name" type="text" placeholder="Last Name" style="width:100%;"></td>
                      </tr>
                       <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td><input ng-model="address" id="address" type="text" placeholder=" Company Address" style="width:100%;" required></td>
                        <td width="2%">&nbsp;</td>
                        <td><input ng-model="city" id="city" type="text" placeholder="City" style="width:100%;"></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td><select style="width:100%;" ng-model="state_id" id="state_id">
                                <option value="">- State -</option>
                                <?php foreach ($stateList as $values){?>
                                <option value="<?php echo $values->state_id?>"><?php echo $values->state_name?></option>
                                <?php } ?>
                            </select>				
				</td>
                        <td width="2%">&nbsp;</td>
                        <td><input ng-model="zipcode" id="zipcode" type="text" placeholder="Zipcode" style="width:100%;"></td>
                      </tr>
                       
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><input ng-model="email" id="email" type="text" placeholder="Email Address" style="width:100%;"></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                       <tr>
                        <td><input ng-model="direct_phone_number" id="direct_phone_number" type="text" placeholder="Direct phone number" style="width:100%;"></td>
                        <td width="2%">&nbsp;</td>
                        <td><input ng-model="sms_phone_number" id="sms_phone_number" type="text" placeholder="Mobile phone number (for sms messages)" style="width:100%;"></td>
                      </tr>
                      
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><input ng-model="password" id="password" type="password" placeholder="Create Password" style="width:100%;"></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><input ng-model="cpassword" id="cpassword" type="password" placeholder="Confirm Password" style="width:100%;"></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><input ng-model="termscondition" id="termscondition" type="checkbox" value=""> &nbsp; I agree to the <a href="terms-conditions" target="_blank">Terms Of Use</a></td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><input ng-click="AgnciregisterSubmit()" type="button" value="Submit" class="btn btnblue"> &nbsp; 
                        <input name="" type="button" value="Cancel" class="btn btnblue">
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:55px;"></td>
                      </tr>
                    </table>
                     </div>
                <div class="col-md-2"></div> 
              </div>
          </div>
      </div>      
    </section>
    </div>