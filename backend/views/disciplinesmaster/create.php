<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model common\models\DisciplinesMaster */

$this->title = 'Create Disciplines Master';
$this->params['breadcrumbs'][] = ['label' => 'Disciplines Masters', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="disciplines-master-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
