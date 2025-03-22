<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\ServiceProviders */

$this->title = $model->service_provider_id;
$this->params['breadcrumbs'][] = ['label' => 'Service Providers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-providers-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->service_provider_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->service_provider_id], [
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
            'service_provider_id',
            'state_id',
            'discipline_id',
            'jobtype_group_id',
            'first_name',
            'last_name',
            'address',
            'city',
            'zipcode',
            'email:email',
            'direct_phone_number',
            'sms_phone_number',
            'HCA_affiliation',
            'licenseid',
            'national_provider_identifer',
            'password',
            'termscondition',
        ],
    ]) ?>

</div>
