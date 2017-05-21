<?php
namespace app\components;
use yii\base\Component;
use yii\web\Session;
use app\models\Company;



class UtilComp extends Component{
    
   
    
	public static function getLoggedUserCompanyId(){
		$session = new Session();
		if(isset($session['loggedUser'])){
			return $session['loggedUser']->additional_id;
		}
	}
	
	//check for pplpro super user or not
	public static function getLoggedUserType()
	{
	    $session = new Session();
	    if(isset($session['loggedUser'])){
	        return $session['loggedUser']->user_type;
	    }
	}
	

	
}