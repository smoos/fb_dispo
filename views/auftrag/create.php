<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Auftrag */

$this->title = 'Create Auftrag';
$this->params['breadcrumbs'][] = ['label' => 'Auftrags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auftrag-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
