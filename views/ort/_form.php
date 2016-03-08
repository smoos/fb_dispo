<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Ort */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="ort-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'kurz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'name')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'zusatz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'zweitname')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'hinweis')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'strasse')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'plz')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stadt')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stadtteil')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stadtplannr')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'stadtplanko')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'parkplatzbeschreibung')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'lageplan_dateiname')->textarea(['rows' => 6]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
