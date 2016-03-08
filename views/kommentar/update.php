<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Kommentar */

$this->title = 'Update Kommentar: ' . ' ' . $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Kommentars', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->id, 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="kommentar-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
