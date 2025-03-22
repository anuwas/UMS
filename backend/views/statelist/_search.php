<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model common\models\StateMasterSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="state-master-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'state_id') ?>

    <?= $form->field($model, 'country_id') ?>

    <?= $form->field($model, 'state_name') ?>

    <?= $form->field($model, 'state_code') ?>

    <?= $form->field($model, 'crated_date') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
