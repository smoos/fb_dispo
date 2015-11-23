<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Status */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="status-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bezeichner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ziel')->dropDownList([ 'auftrag' => 'Auftrag', 'fahrer' => 'Fahrer', 'tour' => 'Tour', 'fahrzeug' => 'Fahrzeug', ], ['prompt' => '']) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
