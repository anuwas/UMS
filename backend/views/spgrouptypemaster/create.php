<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\SpGrouptypeMaster */

$this->title = 'Create Sp Grouptype Master';
$this->params['breadcrumbs'][] = ['label' => 'Sp Grouptype Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="sp-grouptype-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
