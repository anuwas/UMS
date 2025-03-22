<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel common\models\HealthcareAgenciesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Healthcare Agencies';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="healthcare-agencies-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Create Healthcare Agencies', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'agencies_id',
            'state_id',
            'registered_company_name',
            'first_name',
            'last_name',
            // 'address:ntext',
            // 'city',
            // 'zipcode',
            // 'email:email',
            // 'direct_phone_number',
            // 'sms_phone_number',
            // 'password',
            // 'agree',
            // 'created_date',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
