<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\SiteusersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siteusers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'siteuser_id') ?>

    <?= $form->field($model, 'subscriber_type_reference_id') ?>

    <?= $form->field($model, 'email') ?>

    <?= $form->field($model, 'usrname') ?>

    <?= $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'usertype') ?>

    <?php // echo $form->field($model, 'active_inactive') ?>

    <?php // echo $form->field($model, 'last_login') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
