<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ladung */

$this->title = 'Create Ladung';
$this->params['breadcrumbs'][] = ['label' => 'Ladungs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ladung-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
