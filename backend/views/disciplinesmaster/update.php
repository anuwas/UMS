<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\DisciplinesMaster */

$this->title = 'Update Disciplines Master: ' . $model->discipline_id;
$this->params['breadcrumbs'][] = ['label' => 'Disciplines Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->discipline_id, 'url' => ['view', 'id' => $model->discipline_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="disciplines-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
