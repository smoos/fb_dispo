<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Fahrer */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="fahrer-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'tag')->textInput() ?>

    <?= $form->field($model, 'vorname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nachname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'nickname')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'klasse')->textInput() ?>

    <?= $form->field($model, 'telefonnummer')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'stuetzpunkt')->textInput() ?>

    <?= $form->field($model, 'buero')->textInput() ?>

    <?= $form->field($model, 'admin')->textInput() ?>

    <?= $form->field($model, 'passwort')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
