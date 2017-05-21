<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UmsOptionSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ums-option-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'option_id') ?>

    <?= $form->field($model, 'option_name') ?>

    <?= $form->field($model, 'option_description') ?>

    <?= $form->field($model, 'option_type') ?>

    <?= $form->field($model, 'option_area') ?>

    <?php // echo $form->field($model, 'option_status') ?>

    <?php // echo $form->field($model, 'option_link') ?>

    <?php // echo $form->field($model, 'option_icon') ?>

    <?php // echo $form->field($model, 'option_order') ?>

    <?php // echo $form->field($model, 'parent_option_id') ?>

    <?php // echo $form->field($model, 'enable_toolbox') ?>

    <?php // echo $form->field($model, 'object_reference_key') ?>

    <?php // echo $form->field($model, 'level') ?>

    <?php // echo $form->field($model, 'icon_class') ?>

    <?php // echo $form->field($model, 'add_data') ?>

    <?php // echo $form->field($model, 'edit_data') ?>

    <?php // echo $form->field($model, 'delete_data') ?>

    <?php // echo $form->field($model, 'view_data') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
