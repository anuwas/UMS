<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\HealthcareAgencies */

$this->title = 'Update Healthcare Agencies: ' . $model->agencies_id;
$this->params['breadcrumbs'][] = ['label' => 'Healthcare Agencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->agencies_id, 'url' => ['view', 'id' => $model->agencies_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="healthcare-agencies-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
