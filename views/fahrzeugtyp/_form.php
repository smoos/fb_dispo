<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use app\models\Klasse;

/* @var $this yii\web\View */
/* @var $model app\models\Fahrzeugtyp */
/* @var $form yii\widgets\ActiveForm */

?>

<div class="fahrzeugtyp-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bezeichner')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'plaetze')->textInput() ?>

    <?= $form->field($model, 'klasse')->textInput() ?>

    <?= $form->field($model, 'zuladung_kg')->textInput() ?>

    <?= $form->field($model, 'laderaum_ltr')->textInput() ?>

    <?= $form->field($model, 'dimension_cm')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
