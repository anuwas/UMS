<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model common\models\HealthcareAgencies */

$this->title = $model->agencies_id;
$this->params['breadcrumbs'][] = ['label' => 'Healthcare Agencies', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healthcare-agencies-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->agencies_id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->agencies_id], [
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
            'agencies_id',
            'state_id',
            'registered_company_name',
            'first_name',
            'last_name',
            'address:ntext',
            'city',
            'zipcode',
            'email:email',
            'direct_phone_number',
            'sms_phone_number',
            'password',
            'agree',
            'created_date',
        ],
    ]) ?>

</div>
