<?php
namespace app\components;

use yii\base\Component;
use app\models\UmsUser;
use app\models\Company;

class PplemployeesComp extends Component
{
	public  function create($model){
		$status=false;
		 if($model->save()){
		     if($model->employee_id==""){
		         $model->employee_id=$model->sys_employee_id;
		         $model->save();
		     }
		     
		 	$umsuer= new UmsUser();
		 	$umsuer->user_access_key=(string)$model->sys_employee_id;
		 	$umsuer->username=$this->generateUsreName($model);
		 	$umsuer->password=md5('admin');
		 	$umsuer->user_type=2;
		 	$umsuer->user_status=1;
		 	$umsuer->additional_id=$model->sys_company_id;
		 	$umsuer->first_name="fname";
		 	$umsuer->last_name="lname";
		 	$umsuer->email_id="demo@gmail.com";
		 	$umsuer->user_creation_stamp=date("Y-m-d H:i:s");
		 	$umsuer->user_created_by=1;
		 	$umsuer->user_updated_stamp=date("Y-m-d H:i:s");
		 	$umsuer->user_updated_by=1;
		 	 if($umsuer->save()){
		 		$status=true;
		 	} 
		 	$status=true;
		} 
		
		return $status;
	}
	
	private  function generateUsreName($model)
	{
	    $company=Company::findOne(['sys_company_id'=>$model->sys_company_id]);
	    $compPre=strtoupper(substr($company->company_name,0,3));
	    $empnamearr=ucfirst(explode(" ", $model->employee_name)[0]);
	    $username=$compPre.$model->sys_employee_id."_".$empnamearr;
	    return $username;
	}
}