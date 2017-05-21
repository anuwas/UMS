<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Company;
use yii\helpers\ArrayHelper;
/* @var $this yii\web\View */
/* @var $model app\models\PplEmployees */
/* @var $form yii\widgets\ActiveForm */

$companies=ArrayHelper::map(Company::find()->asArray()->all(), 'sys_company_id', 'company_name');
?>

<div class="row">
						
						<div class="col-md-12">

    <?php $form = ActiveForm::begin(); ?>
<section class="panel">
									
									<div class="panel-body">
				<?= $form->field($model, 'sys_company_id')->dropDownList($companies,['prompt'=>'Select Cpmpany']) ?>
               
                <?= $form->field($model, 'employee_id')->textInput() ?>

        
                <?= $form->field($model, 'employee_name')->textInput(['maxlength' => true]) ?>

        
                <?= $form->field($model, 'employee_doj')->textInput() ?>

        
                <?= $form->field($model, 'employee_dob')->textInput() ?>

        
                <?= $form->field($model, 'employee_photo_img')->textInput(['maxlength' => true]) ?>

        
                <?= $form->field($model, 'Address')->textInput(['maxlength' => true]) ?>
                <?php echo $form->field($model, 'Gender')->dropDownList(['1' => 'Male', '2' => 'Female']); ?>

        
            <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
</section>
    <?php ActiveForm::end(); ?>

</div>
						<!-- col-md-6 -->
						
					</div>
