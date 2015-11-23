<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Fahrzeugtyp */

$this->title = 'Create Fahrzeugtyp';
$this->params['breadcrumbs'][] = ['label' => 'Fahrzeugtyps', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="fahrzeugtyp-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
