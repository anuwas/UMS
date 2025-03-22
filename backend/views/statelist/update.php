<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\StateMaster */

$this->title = 'Update State Master: ' . $model->state_id;
$this->params['breadcrumbs'][] = ['label' => 'State Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->state_id, 'url' => ['view', 'id' => $model->state_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="state-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
