<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Ort */

$this->title = 'Create Ort';
$this->params['breadcrumbs'][] = ['label' => 'Orts', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="ort-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
