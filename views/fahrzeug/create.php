<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fahrzeug */

$this->title = 'Create Fahrzeug';
$this->params['breadcrumbs'][] = ['label' => 'Fahrzeugs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahrzeug-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
