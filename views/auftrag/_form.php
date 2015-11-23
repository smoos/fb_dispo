<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Auftrag */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auftrag-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'gruppe_auftrag')->textInput() ?>

    <?= $form->field($model, 'auftraggeber_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auftraggeber_abteilung')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'auftraggeber_telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'anfahrtszeit_min')->textInput() ?>

    <?= $form->field($model, 'start')->textInput() ?>

    <?= $form->field($model, 'ziel')->textInput() ?>

    <?= $form->field($model, 'start_ort')->textInput() ?>

    <?= $form->field($model, 'start_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'start_telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ziel_ort')->textInput() ?>

    <?= $form->field($model, 'ziel_name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ziel_telefon')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'ladung')->textInput() ?>

    <?= $form->field($model, 'fahrzeugtyp')->textInput() ?>

    <?= $form->field($model, 'nachfrage_fahrer')->textInput() ?>

    <?= $form->field($model, 'nachfrage')->textInput() ?>

    <?= $form->field($model, 'rueckmeldung_fahrer')->textInput() ?>

    <?= $form->field($model, 'rueckmeldung')->textInput() ?>

    <?= $form->field($model, 'angelegt')->textInput() ?>

    <?= $form->field($model, 'angelegt_fahrer')->textInput() ?>

    <?= $form->field($model, 'stuetzpunkt')->textInput() ?>

    <?= $form->field($model, 'last_update')->textInput() ?>

    <?= $form->field($model, 'last_update_fahrer')->textInput() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
