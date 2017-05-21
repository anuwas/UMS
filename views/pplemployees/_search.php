<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\PplEmployeesSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ppl-employees-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'sys_employee_id') ?>

    <?= $form->field($model, 'sys_company_id') ?>

    <?= $form->field($model, 'employee_id') ?>

    <?= $form->field($model, 'employee_name') ?>

    <?= $form->field($model, 'employee_doj') ?>

    <?php // echo $form->field($model, 'employee_dob') ?>

    <?php // echo $form->field($model, 'employee_photo_img') ?>

    <?php // echo $form->field($model, 'Address') ?>

    <?php // echo $form->field($model, 'Gender') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
