<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Kommentar */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="kommentar-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'text')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'fahrer')->textInput() ?>

    <?= $form->field($model, 'angelegt')->textInput() ?>

    <?= $form->field($model, 'status')->textInput() ?>

    <?= $form->field($model, 'ziel')->dropDownList([ 'auftrag' => 'Auftrag', 'fahrer' => 'Fahrer', 'ort' => 'Ort', 'gruppierung' => 'Gruppierung', 'tour' => 'Tour', 'fahrzeug' => 'Fahrzeug', ], ['prompt' => '']) ?>

    <?= $form->field($model, 'ziel_id')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
