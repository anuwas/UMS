<?php

namespace frontend\controllers;

use common\models\CountryMaster;
use common\models\DisciplinesMaster;
use yii\db\all;
use common\models\SpGrouptypeMaster;
use common\models\StateMaster;
use common\models\ServiceProviders;
use common\models\HealthcareAgencies;
use common\models\Siteusers;
use yii\web\Session;

class IndexController extends \yii\web\Controller
{
	
    public function actionIndex(){
  
    	$this->layout = 'index';
        return $this->render('index');
    }
    
    public function actionLogin(){
    	
    	$this->layout = 'index';
    	return $this->render('login');
    }
    
    public function actionSignup(){
    	
    	$this->layout = 'index';
    	return $this->render('signup');
    }
    public function actionTermsconditions(){
    	 
    	$this->layout = 'index';
    	return $this->render('terms_conditions');
    }
    public function actionPrivacypolicy(){
    
    	$this->layout = 'index';
    	return $this->render('privacy_policy');
    }
    
    public function actionForgotpassword(){
    	$this->layout = 'index';
    	return $this->render('forgot_password');
    }
    
    public function actionCheckemailid(){
    	$count=0;
    	$postdata = file_get_contents("php://input");
    	$request = json_decode($postdata);
    	$email=$request->email;
    	$count = Siteusers::find()->where(['email' => $email])->count();
    	echo $count;
    }
    
    public function actionLoginprocess(){
    	$dbapssword='';
    	$postdata = file_get_contents("php://input");
    	$request = json_decode($postdata);
    	
    	$email=$request->username;
    	$password=md5($request->password);
    	$user=Siteusers::findAll(array('email'=>$email));
    	if($user){
    		$dbapssword=$user[0]->password;
    		if($dbapssword==$password){
    			$fullname='';
    			$userid='';
    			$email='';
    			switch($user[0]->usertype){
    				case 'HCA':
    					{
    						$hca=HealthcareAgencies::findOne($user[0]->subscriber_type_reference_id);
    						$fullname=$hca->first_name.' '.$hca->last_name;
    						$userid=$hca->agencies_id;
    						$email=$hca->email;
    					}
    					
    					break;
    				case 'SP':
    					{
    						$sp=ServiceProviders::findOne($user[0]->subscriber_type_reference_id);
    						$fullname=$sp->first_name.' '.$sp->last_name;
    						$userid=$sp->service_provider_id;
    						$email=$sp->email;
    					}
    					
    					break;
    			}
    			$session = new Session();
    			
    			$session['user'] = [
    					'name' =>$fullname,
    					'userid' => $userid,
    					'email'=>$email]; 
    		
    			echo $user[0]->usertype;
    		}else{
    			echo 'invalid';
    		}
    	}else{
    		echo 'invalid';
    	}
    	
    }
    
    public function actionLogout(){
    	$session=new Session();
    	$session->destroy();
    	return $this->redirect(['/']);
    }
    
    public function actionRegisterserviceprovider(){
    	 
    	$this->layout = 'index';
    	//$countryList=CountryMaster::findAll(array('status'=>1)); 
    	$stateList=StateMaster::find()->all();
    	$disciplineList=DisciplinesMaster::find()->all();
    	$spgroups=SpGrouptypeMaster::find()->all();
    	
    	return $this->render('register_service_provider',array('stateList'=>$stateList,'disciplinesList'=>$disciplineList,'spgoupList'=>$spgroups));
    }
    
    public function actionSaveserviceprovider(){
    	$postdata = file_get_contents("php://input");
    	$request = json_decode($postdata);
    		
    	$serviceProvider=new ServiceProviders();
    	$serviceProvider->first_name=$request->first_name;
    	$serviceProvider->last_name=$request->last_name;
    	$serviceProvider->registered_company_name=$request->registered_company_name;
    	$serviceProvider->address=$request->address;
    	$serviceProvider->city=$request->city;
    	$serviceProvider->state_id=$request->state_id;
    	$serviceProvider->zipcode=$request->zipcode;
    	$serviceProvider->email=$request->email;
    	$serviceProvider->direct_phone_number=$request->direct_phone_number;
    	$serviceProvider->sms_phone_number=$request->sms_phone_number;
    	$serviceProvider->HCA_affiliation=$request->HCA_affiliation;
    	$serviceProvider->jobtype_group_id=$request->jobtype_group_id;
    	$serviceProvider->discipline_id=$request->discipline_id;
    	$serviceProvider->licenseid=$request->licenseid;
    	$serviceProvider->national_provider_identifer=$request->national_provider_identifer;
    	$serviceProvider->password=md5($request->password);
    	$serviceProvider->save();
    	
    	$siteUser=new Siteusers();
    	$siteUser->subscriber_type_reference_id=$serviceProvider->service_provider_id;
    	$siteUser->email=$request->email;
    	$siteUser->password=md5($request->password);
    	$siteUser->usertype='SP';
    	$siteUser->active_inactive=1;
    	$siteUser->save();
    }
    
    public function actionRegisterhealthcareagencies(){
    
    	$this->layout = 'index';
    	//$countryList=CountryMaster::findAll(array('status'=>1));
    	$stateList=StateMaster::find()->all();
    	return $this->render('register_healthcare_agencies',array('stateList'=>$stateList));
    }
    
    public function actionSaveagencies(){
    	$postdata = file_get_contents("php://input");
    	$request = json_decode($postdata);
    	
    	$agencies=new HealthcareAgencies();
    	$agencies->first_name=$request->first_name;
    	$agencies->last_name=$request->last_name;
    	$agencies->registered_company_name=$request->registered_company_name;
    	$agencies->email=$request->email;
    	$agencies->address=$request->address;
    	$agencies->city=$request->city;
    	$agencies->direct_phone_number=$request->direct_phone_number;
    	$agencies->sms_phone_number=$request->sms_phone_number;
    	$agencies->password=md5($request->password);
    	
    	$agencies->save();
    	
    	$siteUser=new Siteusers();
    	$siteUser->subscriber_type_reference_id=$agencies->agencies_id;
    	$siteUser->email=$request->email;
    	$siteUser->password=md5($request->password);
    	$siteUser->usertype='HCA';
    	$siteUser->active_inactive=1;
    	$siteUser->save();
    }

}
