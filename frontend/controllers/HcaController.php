<?php

namespace frontend\controllers;

class HcaController extends \yii\web\Controller
{
    public function actionIndex()
    {
    	$this->layout = 'hca';
        return $this->render('index');
    }

}
