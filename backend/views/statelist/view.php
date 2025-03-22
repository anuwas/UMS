<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\StateMaster */

$this->title = $model->state_id;
$this->params['breadcrumbs'][] = ['label' => 'State Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="state-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->state_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->state_id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'state_id',
            'country_id',
            'state_name',
            'state_code',
            'crated_date',
        ],
    ]) ?>

</div>
