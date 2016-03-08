<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Stuetzpunkt */

$this->title = 'Create Stuetzpunkt';
$this->params['breadcrumbs'][] = ['label' => 'Stuetzpunkts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="stuetzpunkt-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
