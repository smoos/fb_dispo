<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\AuftragSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="auftrag-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'gruppe_auftrag') ?>

    <?= $form->field($model, 'auftraggeber_name') ?>

    <?= $form->field($model, 'auftraggeber_abteilung') ?>

    <?= $form->field($model, 'auftraggeber_telefon') ?>

    <?php // echo $form->field($model, 'anfahrtszeit_min') ?>

    <?php // echo $form->field($model, 'start') ?>

    <?php // echo $form->field($model, 'ziel') ?>

    <?php // echo $form->field($model, 'start_ort') ?>

    <?php // echo $form->field($model, 'start_name') ?>

    <?php // echo $form->field($model, 'start_telefon') ?>

    <?php // echo $form->field($model, 'ziel_ort') ?>

    <?php // echo $form->field($model, 'ziel_name') ?>

    <?php // echo $form->field($model, 'ziel_telefon') ?>

    <?php // echo $form->field($model, 'ladung') ?>

    <?php // echo $form->field($model, 'fahrzeugtyp') ?>

    <?php // echo $form->field($model, 'nachfrage_fahrer') ?>

    <?php // echo $form->field($model, 'nachfrage') ?>

    <?php // echo $form->field($model, 'rueckmeldung_fahrer') ?>

    <?php // echo $form->field($model, 'rueckmeldung') ?>

    <?php // echo $form->field($model, 'angelegt') ?>

    <?php // echo $form->field($model, 'angelegt_fahrer') ?>

    <?php // echo $form->field($model, 'stuetzpunkt') ?>

    <?php // echo $form->field($model, 'last_update') ?>

    <?php // echo $form->field($model, 'last_update_fahrer') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
