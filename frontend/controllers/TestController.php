<?php
namespace frontend\controllers;


use common\models\HealthcareAgencies;
use yii\web\Session;


class TestController extends \yii\web\Controller
{
	public function actionIndex()
	{
		$hca=HealthcareAgencies::findOne(2);
		print_r($hca->first_name);
		$session=new Session();
		$session['user']=['aa'=>'1'];
		print_r($session);
		
	}

}