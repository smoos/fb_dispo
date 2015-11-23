<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Auftrag */

$this->title = 'Update Auftrag: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Auftrags', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auftrag-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
