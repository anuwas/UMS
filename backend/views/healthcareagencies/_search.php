<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\HealthcareAgenciesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="healthcare-agencies-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'agencies_id') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'registered_company_name') ?>

    <?= $form->field($model, 'first_name') ?>

    <?= $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'zipcode') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'direct_phone_number') ?>

    <?php // echo $form->field($model, 'sms_phone_number') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'agree') ?>

    <?php // echo $form->field($model, 'created_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
