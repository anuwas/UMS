<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model common\models\SpGrouptypeMaster */

$this->title = 'Update Sp Grouptype Master: ' . $model->group_id;
$this->params['breadcrumbs'][] = ['label' => 'Sp Grouptype Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->group_id, 'url' => ['view', 'id' => $model->group_id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="sp-grouptype-master-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
