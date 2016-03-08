<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fahrzeug */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fahrzeug-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'typ')->textInput() ?>

    <?= $form->field($model, 'tag')->textInput() ?>

    <?= $form->field($model, 'kennzeichen')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'schluessel')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stuetzpunkt')->textInput() ?>

    <?= $form->field($model, 'km_abholung')->textInput() ?>

    <?= $form->field($model, 'km_dekt_start')->textInput() ?>

    <?= $form->field($model, 'km_dekt_ende')->textInput() ?>

    <?= $form->field($model, 'km_abgabe')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
