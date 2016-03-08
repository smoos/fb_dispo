<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fahrtenbuch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fahrtenbuch-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'fahrer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fahrzeug')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start')->textInput() ?>

    <?= $form->field($model, 'ende')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
