<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Auftrag */

$this->title = $model->id;
$this->params['breadcrumbs'][] = ['label' => 'Auftrags', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="auftrag-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Update', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Delete', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'gruppe_auftrag',
            'auftraggeber_name',
            'auftraggeber_abteilung',
            'auftraggeber_telefon',
            'anfahrtszeit_min',
            'start',
            'ziel',
            'start_ort',
            'start_name',
            'start_telefon',
            'ziel_ort',
            'ziel_name',
            'ziel_telefon',
            'ladung',
            'fahrzeugtyp',
            'nachfrage_fahrer',
            'nachfrage',
            'rueckmeldung_fahrer',
            'rueckmeldung',
            'angelegt',
            'angelegt_fahrer',
            'stuetzpunkt',
            'last_update',
            'last_update_fahrer',
        ],
    ]) ?>

</div>
