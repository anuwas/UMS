<?php
$this->title = 'UberMobileHealthCare - SignUp Service Provider';
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
      <div class="about-cont bg-grey about-to-right" ng-controller="RegisterServiceProver">
          <div class="container">
              <div class="row">
                    <div style="height:30px;"></div>
                   <h4 align="center">Sign up for free today as Service Provider </h4>
                   <div style="height:30px;"></div>
                   <div class="col-md-2"></div>
                   <div class="col-md-8"> 
                   <form name="register_service_provider_form">
                   <table width="100%" border="0" cellspacing="0" cellpadding="0">
                     <tr>
                        <td colspan="3"><input ng-model="registered_company_name" id="registered_company_name" type="text" placeholder="Registered Company Name (optional)"  style="width:100%;">
                        </td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td width="49%"><input ng-model="first_name" id="first_name" type="text" placeholder="First Name" style="width:100%;" ng-required="true">

                        </td>
                        <td width="2%">&nbsp;</td>
                        <td width="49%"><input ng-model="last_name" id="last_name" type="text" placeholder="Last Name" style="width:100%;"></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td><input ng-model="address" id="address" type="text" placeholder="Address" style="width:100%;"></td>
                        <td width="2%">&nbsp;</td>
                        <td><input ng-model="city" id="city" type="text" placeholder="City" style="width:100%;"></td>
                      </tr>
                     <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td>
                        
                        <select style="width:100%;" ng-model="state_id" id="state_id">
                        <option value=""> - Select State - </option>
                        <?php foreach ($stateList as $values){?>
           
                        <option value="<?php echo $values->state_id?>"><?php echo $values->state_name?></option>
                        <?php }?>
                                
                            </select></td>
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
                        <td><input ng-model="direct_phone_number" id="direct_phone_number" type="text" placeholder="Direct Phone Number" style="width:100%;"></td>
                        <td width="2%">&nbsp;</td>
                        <td><input ng-model="sms_phone_number" id="sms_phone_number" type="text" placeholder="Mobile Phone Number (For SMS Messages)" style="width:100%;"></td>
                      </tr>
                       
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td><input ng-model="HCA_affiliation" id="HCA_affiliation" type="text" placeholder="HCA Affiliation" style="width:100%;"></td>
                        <td width="2%">&nbsp;</td>
                        <td><select  style="width:100%;" ng-model="jobtype_group_id" id="jobtype_group_id">
                            <option value=""> -Select Group- </option>
                            <?php foreach ($spgoupList as $values){?>
                            <option value="<?php echo $values->group_id?>"><?php echo $values->group_name?></option>
                            <?php }?>
                        </select></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td><select  style="width:100%;" ng-model="discipline_id" id="discipline_id">
                        	<option value="">-Select Discipline-</option>
                            <?php foreach ($disciplinesList as $values){?>
                            <option value="<?php echo $values->discipline_id?>"><?php echo $values->discipline_name?></option>
                            <?php } ?>
                        </select></td>
                        <td width="2%">&nbsp;</td>
                        <td><input ng-model="licenseid" id="licenseid" type="text" placeholder="License ID" style="width:100%;"></td>
                      </tr>
                       <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td colspan="3"><input ng-model="national_provider_identifer" id="national_provider_identifer" type="text" placeholder="National Provider Identifier (NPI)" style="width:100%;"></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td><input ng-model="password" id="password" type="password" placeholder="Create Password" style="width:100%;"></td>
                        <td width="2%">&nbsp;</td>
                        <td><input ng-model="cpassword" id="cpassword" type="password" placeholder="Confirm Password" style="width:100%;"></td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:15px;"></td>
                      </tr>
                      <tr>
                        <td colspan="3">
                        <input ng-model="termscondition" id="termscondition" type="checkbox" value=""> &nbsp; I agree to the <a href="terms-conditions" target="_blank">Terms Of Use</a>
                        </td>
                      </tr>
                      <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td><input ng-click="SPregisterSubmit()" type="button" value="Submit" class="btn btnblue"> &nbsp; <input name="" type="button" value="Cancel" class="btn btnblue"></td>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                      </tr>
                      <tr>
                        <td colspan="3" style="height:55px;"></td>
                      </tr>
                    </table>
                    </form>
                     </div>
                <div class="col-md-2"></div> 
              </div>
          </div>
      </div>      
    </section>
    </div>
