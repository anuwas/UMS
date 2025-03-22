<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\ServiceProviders */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="service-providers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'state_id')->textInput() ?>

    <?= $form->field($model, 'discipline_id')->textInput() ?>

    <?= $form->field($model, 'jobtype_group_id')->textInput() ?>

    <?= $form->field($model, 'first_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'last_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'zipcode')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'direct_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'sms_phone_number')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'HCA_affiliation')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'licenseid')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'national_provider_identifer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'termscondition')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
