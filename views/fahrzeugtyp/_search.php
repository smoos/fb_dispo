<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FahrzeugtypSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fahrzeugtyp-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'bezeichner') ?>

    <?= $form->field($model, 'plaetze') ?>

    <?= $form->field($model, 'klasse') ?>

    <?= $form->field($model, 'zuladung_kg') ?>

    <?php // echo $form->field($model, 'laderaum_ltr') ?>

    <?php // echo $form->field($model, 'dimension_cm') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
