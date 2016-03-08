<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\AuftragAusfuehrung */

$this->title = 'Update Auftrag Ausfuehrung: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Auftrag Ausfuehrungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="auftrag-ausfuehrung-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
