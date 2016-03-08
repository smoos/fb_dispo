<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fahrer */

$this->title = 'Create Fahrer';
$this->params['breadcrumbs'][] = ['label' => 'Fahrers', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahrer-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
