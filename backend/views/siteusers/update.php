<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\Siteusers */

$this->title = 'Update Siteusers: ' . $model->siteuser_id;
$this->params['breadcrumbs'][] = ['label' => 'Siteusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->siteuser_id, 'url' => ['view', 'id' => $model->siteuser_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="siteusers-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
