<?php

namespace frontend\controllers;

class SignupController extends \yii\web\Controller
{
    public function actionIndex()
    {
        return $this->render('index');
    }
	
	public function actionLogin(){
		echo 'in login';
	}

}