<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ServiceProvidersSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-providers-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'service_provider_id') ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'discipline_id') ?>

    <?= $form->field($model, 'jobtype_group_id') ?>

    <?= $form->field($model, 'first_name') ?>

    <?php // echo $form->field($model, 'last_name') ?>

    <?php // echo $form->field($model, 'address') ?>

    <?php // echo $form->field($model, 'city') ?>

    <?php // echo $form->field($model, 'zipcode') ?>

    <?php // echo $form->field($model, 'email') ?>

    <?php // echo $form->field($model, 'direct_phone_number') ?>

    <?php // echo $form->field($model, 'sms_phone_number') ?>

    <?php // echo $form->field($model, 'HCA_affiliation') ?>

    <?php // echo $form->field($model, 'licenseid') ?>

    <?php // echo $form->field($model, 'national_provider_identifer') ?>

    <?php // echo $form->field($model, 'password') ?>

    <?php // echo $form->field($model, 'termscondition') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
