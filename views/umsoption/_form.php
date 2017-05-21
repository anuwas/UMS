<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\UmsOption */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="row">
						
						<div class="col-md-12">

    <?php $form = ActiveForm::begin(); ?>
<section class="panel">
									
									<div class="panel-body">
        <?= $form->field($model, 'option_name')->textInput(['maxlength' => true]) ?>

        
                <?= $form->field($model, 'option_description')->textInput(['maxlength' => true]) ?>

        
                <?= $form->field($model, 'option_type')->textInput() ?>

        
                <?= $form->field($model, 'option_area')->textInput() ?>

        
                <?= $form->field($model, 'option_status')->textInput() ?>

        
                <?= $form->field($model, 'option_link')->textInput(['maxlength' => true]) ?>

        
                <?= $form->field($model, 'option_icon')->textInput(['maxlength' => true]) ?>

        
                <?= $form->field($model, 'option_order')->textInput() ?>

        
                <?= $form->field($model, 'parent_option_id')->textInput() ?>

        
                <?= $form->field($model, 'enable_toolbox')->textInput() ?>

        
                <?= $form->field($model, 'object_reference_key')->textInput(['maxlength' => true]) ?>

        
                <?= $form->field($model, 'level')->textInput() ?>

        
                <?= $form->field($model, 'icon_class')->textInput(['maxlength' => true]) ?>

        
                <?= $form->field($model, 'add_data')->textInput() ?>

        
                <?= $form->field($model, 'edit_data')->textInput() ?>

        
                <?= $form->field($model, 'delete_data')->textInput() ?>

        
                <?= $form->field($model, 'view_data')->textInput() ?>

        
            <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
</section>
    <?php ActiveForm::end(); ?>

</div>
						<!-- col-md-6 -->
						
					</div>
