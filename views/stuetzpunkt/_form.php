<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Stuetzpunkt */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="stuetzpunkt-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'bezeichner')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
