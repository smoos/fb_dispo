<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\FahrerSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fahrer-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'tag') ?>

    <?= $form->field($model, 'vorname') ?>

    <?= $form->field($model, 'nachname') ?>

    <?= $form->field($model, 'nickname') ?>

    <?php // echo $form->field($model, 'klasse') ?>

    <?php // echo $form->field($model, 'telefonnummer') ?>

    <?php // echo $form->field($model, 'stuetzpunkt') ?>

    <?php // echo $form->field($model, 'buero') ?>

    <?php // echo $form->field($model, 'admin') ?>

    <?php // echo $form->field($model, 'passwort') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
