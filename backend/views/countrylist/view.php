<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\CountryMaster */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Country Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="country-master-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->country_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->country_id], [
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
            'country_id',
            'name',
            'iso_code_2',
            'iso_code_3',
            'postcode_required',
            'status',
        ],
    ]) ?>

</div>
