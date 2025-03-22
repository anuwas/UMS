<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\Siteusers */

$this->title = 'Create Siteusers';
$this->params['breadcrumbs'][] = ['label' => 'Siteusers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="siteusers-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
