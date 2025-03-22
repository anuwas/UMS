<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\Siteusers */

$this->title = $model->siteuser_id;
$this->params['breadcrumbs'][] = ['label' => 'Siteusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siteusers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->siteuser_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->siteuser_id], [
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
            'siteuser_id',
            'subscriber_type_reference_id',
            'email:email',
            'usrname',
            'password',
            'usertype',
            'active_inactive',
            'last_login',
        ],
    ]) ?>

</div>
