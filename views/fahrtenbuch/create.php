<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fahrtenbuch */

$this->title = 'Create Fahrtenbuch';
$this->params['breadcrumbs'][] = ['label' => 'Fahrtenbuches', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahrtenbuch-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
