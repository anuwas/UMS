<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\UmsRole;
use yii\helpers\ArrayHelper;
use app\models\UmsOption;

/* @var $this yii\web\View */
/* @var $model app\models\UmsRoleOptionMap */
/* @var $form yii\widgets\ActiveForm */

$roles=ArrayHelper::map(UmsRole::find()->asArray()->all(), 'role_id', 'role_name');
$roleoption=ArrayHelper::map(UmsOption::find()->asArray()->all(), 'option_id', 'option_name');
?>

<div class="row">
						
						<div class="col-md-12">

    <?php $form = ActiveForm::begin(); ?>
<section class="panel">
									
		<div class="panel-body">
		<?= $form->field($model, 'role_id')->dropDownList($roles,['prompt'=>'Select Role']) ?>
		<?= $form->field($model, 'option_id')->dropDownList($roleoption,['prompt'=>'Select Option']) ?>
		<?php echo $form->field($model, 'enable')->dropDownList(['1' => 'Yes', '0' => 'No']); ?>
        
            <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
</section>
    <?php ActiveForm::end(); ?>

</div>
						<!-- col-md-6 -->
						
					</div>
