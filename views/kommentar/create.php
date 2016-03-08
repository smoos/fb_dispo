<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Kommentar */

$this->title = 'Create Kommentar';
$this->params['breadcrumbs'][] = ['label' => 'Kommentars', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="kommentar-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
