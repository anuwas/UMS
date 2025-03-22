<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\Siteusers */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="siteusers-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'subscriber_type_reference_id')->textInput() ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usrname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'usertype')->dropDownList([ 'SP' => 'SP', 'HCA' => 'HCA', 'P' => 'P', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'active_inactive')->textInput() ?>

    <?= $form->field($model, 'last_login')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
