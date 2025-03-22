<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\ServiceProvidersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Service Providers';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="service-providers-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Service Providers', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'service_provider_id',
            'state_id',
            'discipline_id',
            'jobtype_group_id',
            'first_name',
            // 'last_name',
            // 'address',
            // 'city',
            // 'zipcode',
            // 'email:email',
            // 'direct_phone_number',
            // 'sms_phone_number',
            // 'HCA_affiliation',
            // 'licenseid',
            // 'national_provider_identifer',
            // 'password',
            // 'termscondition',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
