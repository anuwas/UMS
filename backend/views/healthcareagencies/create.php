<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\HealthcareAgencies */

$this->title = 'Create Healthcare Agencies';
$this->params['breadcrumbs'][] = ['label' => 'Healthcare Agencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healthcare-agencies-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
