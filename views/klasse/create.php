<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Klasse */

$this->title = 'Create Klasse';
$this->params['breadcrumbs'][] = ['label' => 'Klasses', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="klasse-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
