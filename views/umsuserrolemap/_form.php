<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\UmsRole;
use yii\helpers\ArrayHelper;
use app\models\UmsUser;
use app\components\UtilComp;
/* @var $this yii\web\View */
/* @var $model app\models\UmsUserRoleMap */
/* @var $form yii\widgets\ActiveForm */
$roles=ArrayHelper::map(UmsRole::find()->asArray()->all(), 'role_id', 'role_name');
$user=ArrayHelper::map(UmsUser::find()->where('additional_id>='.UtilComp::getLoggedUserCompanyId())->asArray()->all(), 'user_id', 'username');
?>

<div class="row">
						
						<div class="col-md-12">

    <?php $form = ActiveForm::begin(); ?>
<section class="panel">
									
									<div class="panel-body">
        <?= $form->field($model, 'user_id')->dropDownList($user,['prompt'=>'Select User']) ?>
				<?= $form->field($model, 'role_id')->dropDownList($roles,['prompt'=>'Select Role']) ?>
        
            <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>
</div>
</section>
    <?php ActiveForm::end(); ?>

</div>
						<!-- col-md-6 -->
						
					</div>
