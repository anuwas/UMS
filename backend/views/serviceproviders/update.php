<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\ServiceProviders */

$this->title = 'Update Service Providers: ' . $model->service_provider_id;
$this->params['breadcrumbs'][] = ['label' => 'Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->service_provider_id, 'url' => ['view', 'id' => $model->service_provider_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="service-providers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
